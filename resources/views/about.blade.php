@extends('layouts\main')
@section ('container')
    <h2><center>About Me</center></h2>
    <img src= "images/{{ $gambar }}" alt="{{ $nama }}" width="200px">
    <h3>{{ $nama }}</h3>
    <p>{{ $email }} | {{ $alamat }} <p>
    <p> {{ $description }}</p>

    <li>
        <a href= "https://instagram.com/nisrinamla">
            <i class="fa-brands fa-instagram"></i>Instagram</a>
    </li>
    <li>
        <a href= "https://youtube.com/NisrinaIffatunnisa"> 
            <i class="fa-brands fa-instagram"></i>Youtube</a>
    </li>
@endsection