
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Buku</h2>
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
                                                <th>Judul</th>
                                                <th>Pengarang</th>
                                                <th>Penerbit</th>
                                                <th>Tahun Terbit</th>
                                                <th>Stok</th>
                                                <th>Cover</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($images as $index => $images)
                                            <tr> 
                                                <td>{{ $index + 1}}</td>
                                                <td>{{ $images->judul}}</td>
                                                <td>{{ $images->pengarang }}</td>
                                                <td>{{ $images->penerbit }}</td>
                                                <td>{{ $images->tahun }}</td>
                                                <td>{{ $images->stok }}</td>
                                                
                                                <td><img src= "{{asset('coverbuku/' . $images->img)}}" width= "100px" ></td>
                                        
                                            </tr>
                                            @endforeach  
                                        </tbody>

                                        
                                    </table>
                                 
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
<script type = "text/javascript">
    window.print()
</script>
