@extends('layouts.app')
@section('title','Nisrina | Data Image')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Image</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Teks</th>
                                                <th>Image</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($image as $index => $images)
                                            <tr> 
                                                <td>{{ $index + 1}}</td>
                                                <td>{{ $images->teks}}</td>
                                                <td><img src= "{{asset('projectku/' . $images->img)}}" width= "250px" ></td>
                                                
                                                <td>
                                                    <a href = "{{ route('image.edit', $images->id)}}"><i class= "fas fa-edit"></i></a>
                                                    |
                                                    <a href = "{{ route('image.destroy', $images->id)}}"><i class= "fas fa-trash" style="color:red"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach  
                                        </tbody>

                                        
                                    </table>
                                    {{ $image->links()}}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
