@extends('layouts.main')

@section('container')
    <div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Buku yang Tersedia</h2>
                                <form action="/gallery" method="GET" class="d-flex">
                                    <input class="form-control me-2" name="search" type="search" placeholder="Search by Judul" aria-label="Search">
                                </form>
                                <p></p>
                                <p> <a href="/export" target = "_blank"  class="btn btn-primary ml-3"> Export Data Buku</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-m-t-30">
                            <div class="row-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <tbody>
                                        @foreach ($images as $index => $images)
                                        <div class="card" style="width: 18rem;">
                                            <tr><img src= "{{asset('coverbuku/' . $images->img)}}" width= "250px" height="350px" class="card-img-top" ></tr>
                                        <div class="card-body">
                                                <p class="card-text"><strong>Judul</strong> {{$images->judul}}</p>
                                                <th><a class="btn btn-info" href="/image_detail/{{$images->id}}">Detail</a></th>
                                        </div>
                                            </div>
                                        @endforeach  
                                    </tbody>
                                </div>
                                
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection