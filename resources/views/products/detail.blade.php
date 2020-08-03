@extends('layout.admin-layout')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$obj->name}}</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="font-weight-bold">Price: </span> {{$obj->name}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="font-weight-bold">Detail: </span> {!! $obj->detail !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection
