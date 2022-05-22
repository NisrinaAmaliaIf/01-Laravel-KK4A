@extends('layouts.main')

@section('container')
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Portofolio</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <tbody>
                                        @foreach ($image as $index => $images)
                                        <tr> 
                                            
                                            <td><img src= "{{asset('projectku/' . $images->img)}}" width= "250px" ></td>
                                            
                                        </tr>
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
