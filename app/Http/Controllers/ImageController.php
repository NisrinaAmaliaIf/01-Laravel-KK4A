<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function uploadForm()
    {
        return view('image.upload');
    }

    public function uploadFile(Request $request)
    {
        $image = Image::create([
            "teks" =>$request->teks,
            "img" =>$request->file('img')->getClientOriginalName()
        ]);
        $image->save();
        return redirect('upload');
        
    }


    public function index()
    {
        $image = Image::paginate(3);
        return view('image/index', compact('image'));
    }

    public function showgallery(Request $request)
    {
        $image = Image::all();
        return view('/gallery',
        [
            "title" => "Gallery"
        ], compact('image'));
    }


    public function edit($id)
    {
        $image = Image::findOrFail($id);
        return view('/image.edit', compact('image'));
    }

   public function update(Request $request, $id)
   {
        $image = Image::findOrFail($id);
        $lokasi_gambar = public_path('projectku/').$image->img;
        $nama_awal = $image->img;

        $image->teks      = $request->teks;
        if($request->hasFile('img')) {
            @unlink($lokasi_gambar);
            $image->img =  $request->file('img')->getClientOriginalName();
            $request->file('img')->move('projectku', $request->file('img')->getClientOriginalName());
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

    public function destroy($id)
    {
        $image= Image::findOrFail($id);
        $image->delete();

        return redirect()->route('image.index');
    }
}
