@extends('layouts.app')
@section('title','Nisrina | Upload Image')

@section('content')
    <div class="main-content">

    <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Form Upload Image</h2>
                            
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
                        <label for = "teks" > Deskripsi Teks</label>
                        <input type="text" class="form-control" name="teks" id="teks" />
                    </div>
                    <div class="form-group">
                        <label for = "file" > Choose File</label>
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

