@extends('layouts.main')

@section('container')
    <div class = "row">
        <div class = "col-lg=12 margin=tb">
            <div class = "pull-left">
                <h2>Detail Buku</h2>
            </div>
            <div class = "pull-right">
                <a class = "btn btn-primary" href="{{url('/gallery')}}">Back</a>
                <p></p>
            </div>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <tr><img src= "{{asset('coverbuku/' . $images->img)}}" width= "250px" height="350px" class="card-img-top" ></tr>
            <div class="card-body">
                <p class="card-text"><strong>Judul</strong> {{$images->judul}}</p>
                <tr class="card-text"><strong>Pengarang</strong> {{$images->pengarang}}</tr>
                <tr class="card-text"><strong>Penerbit</strong> {{$images->penerbit}}</tr>
                <tr class="card-text"><strong>Tahun Terbit</strong> {{$images->tahun}}</tr>
                <tr class="card-text"><strong>Stok Buku</strong> {{$images->stok}}</tr>
            </div>
    </div>
@endsection