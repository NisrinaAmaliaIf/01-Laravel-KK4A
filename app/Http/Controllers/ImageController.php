<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Session;

class ImageController extends Controller
{
    public function uploadForm()
    {
        return view('image.upload');
    }

    public function uploadFile(Request $request)
    {
        //return $request->file('img')->store('post-fotosampul');
        $image = Image::create([
            "judul" =>$request->judul,
            "pengarang" =>$request->pengarang,
            "penerbit" =>$request->penerbit,
            "tahun" =>$request->tahun,
            "stok" =>$request->stok,
            "img" =>$request->file('img')->getClientOriginalName()
        ]);
        $request->file('img')->move('coverbuku', $request->file('img')->getClientOriginalName());
        $image->save();
        return redirect('upload');
        
    }

    //membuat controller search
    // public function search(Request $request)
    // {
    //     $title = 'search buku';
    //     if($request -> has ('search')){
    //         $images = Image::where('judul', 'LIKE', '%' .$request->search . '%')->get();

    //     }
    //     else{
    //         $images = Image::all();
    //     }

    //     return view('gallery', ['image' => $images]);
    // }



    public function index()
    {
        $image = Image::paginate(3);
        return view('image/index', compact('image'));
    }

    public function showgallery(Request $request)
    {
        $title = 'search buku';
        if($request -> has ('search')){
            $images = Image::where('judul', 'LIKE', '%' .$request->search . '%')->get();

            Session::put('halaman_url', request()->fullUrl());
        }
        else{
            $images = Image::all();
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('gallery', compact('images','title'));

        // $image = Image::all();
        // return view('/gallery',
        // [
        //     "title" => "Gallery"
        // ], compact('image'));
    }


    public function edit($id)
    {
        $image = Image::findOrFail($id);
        return view('/image.edit', compact('image'));
    }

   public function update(Request $request, $id)
   {
        $image = Image::findOrFail($id);
        $lokasi_gambar = public_path('coverbuku/').$image->img;
        $nama_awal = $image->img;

        $image->judul      = $request->judul;
        $image->pengarang  = $request->pengarang;
        $image->penerbit    = $request->penerbit;
        $image->tahun      = $request->tahun;
        $image->stok     = $request->stok;
        if($request->hasFile('img')) {
            @unlink($lokasi_gambar);
            $image->img =  $request->file('img')->getClientOriginalName();
            $request->file('img')->move('coverbuku', $request->file('img')->getClientOriginalName());
        } else {
            $image->img = $nama_awal;
        }
        $image->save();
        return redirect()->route('image.index');
   }

    
    /*public function update(Request $request, Image $img) 
    {
        $this->validate($request,[
            "teks" => 'required',
            "img" => 'required'
        ]);

        //get data img by id
        $image = Image::findOrFail($img->id);
        
        if($request->file('img') == ""){

            $img->update([
                "teks" => $request->teks,
                "img" => $request->img
            ]);

        }else{

            //hapus old image
            Storage::disk('local')->delete('public/projectku/' .$img->img );

            //upload new image
            $image->storeAs('public/projectku', $img->hashName());

            $image->update([
            'img'     => $img->hashName(),
            'teks'     => $request->teks
        ]);

    }

    if($image){
        //redirect dengan pesan sukses
        return redirect()->route('image.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('image.index')->with(['error' => 'Data Gagal Diupdate!']);

        }

        /*$image = Image::findOrFail($id);
        $image->update($request->all());
        $image->save();

        return redirect()->route('image.index');*/

    public function detail($id){

        $images = Image::find($id);
        $title = 'detail buku';

        return view('/image/detail', compact('images','title'));
    }

    public function destroy($id)
    {
        $image= Image::findOrFail($id);
        $image->delete();

        return redirect()->route('image.index');
    }

    public function export(){
        $images = Image::all();
        return view('export', compact('images'));
    }

}
