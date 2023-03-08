@extends('layouts.app')
@section('title','Nisrina | Upload Image')

@section('content')
    <div class="main-content">

    <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Form Upload Buku</h2>
                            
                                </div>
                            </div>
                        </div>
                        
<body>
    <div class="container">
        <div class="row">
            
            <div class="col-md-6-offset-md-3">
                <div class="card-body">
                    <form method="POST" action="{{route('upload.uploadfile')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for = "judul" >Judul Buku</label>
                        <input type="text" class="form-control" name="judul" id="judul" />
                    </div>

                    <div class="form-group">
                        <label for = "pengarang" >Pengarang Buku</label>
                        <input type="text" class="form-control" name="pengarang" id="pengarang" />
                    </div> 

                    <div class="form-group">
                        <label for = "penerbit" >Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" id="penerbit" />
                    </div>

                    <div class="form-group">
                        <label for = "tahun" >Tahun Terbit</label>
                        <input type="text" class="form-control" name="tahun" id="tahun" />
                    </div>

                    <div class="form-group">
                        <label for = "stok" >Stok Buku</label>
                        <input type="text" class="form-control" name="stok" id="stok" />
                    </div>
                    
                    <div class="form-group">
                        <label for = "img" > Choose File</label>
                        <input type="file" class="form-control" name="img" id="img" multiple/>
                    </div>
                    <button type="submit" class="btn btn-success">Upload Image</button>
                </form>
                </div>
            </div>
        
        </div>
    </div>
    
</body>
</html>

@endsection

