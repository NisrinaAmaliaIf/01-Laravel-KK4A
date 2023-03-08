@extends('layouts.app')
@section('images','Nisrina | Data Contacts')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Image
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route ('image.update', $image->id)}}" method="post" class="" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label for="judul" class=" form-control-label">Judul Buku</label>
                                                <input type="text" name="judul" class="form-control" value="{{ $image->judul}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="pengarang" class=" form-control-label">Pengarang</label>
                                                <input type="text" name="pengarang" class="form-control" value="{{ $image->pengarang}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="penerbit" class=" form-control-label">Penerbit</label>
                                                <input type="text" name="penerbit" class="form-control" value="{{ $image->penerbit}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="tahun" class=" form-control-label">Tahun Terbit</label>
                                                <input type="text" name="tahun" class="form-control" value="{{ $image->tahun}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="stok" class=" form-control-label">Stok Buku</label>
                                                <input type="text" name="stok" class="form-control" value="{{ $image->stok}}">
                                            </div>

                                            <div class="form-group">
                                                <label for = "img" >Choose File</label>
                                                <input type="file" name="img" class="form-control" value="{{ $image->img}}">
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
