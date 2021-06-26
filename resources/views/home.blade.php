@extends('layouts.adminLTE')
@section('title','Beranda ')
@section('content-header', 'Beranda')
@section('route-first','Beranda')
@section('route-second','Home')
@section('berandaActive','menu-open')
@section('content')
<!-- /.col -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>KANSART</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="info-box">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-briefcase"></i></span>

                <div class="info-box-content mb-4">
                    <span class="info-box-text"><b>Service</b></span>
                    <span class="info-box-number">
                        <small>
                            <ol type="a">
                                <li>Tingkat Keamanan Tinggi</li>
                                <li>Load Server Cepat</li>
                            </ol>
                        </small>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-12">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-mail-bulk"></i></span>

                <div class="info-box-content mb-3">
                    <span class="info-box-text"><b>Broadcast</b></span>
                    <p class="info-box-number"><small>Kansart telah tersebar dan dipercaya di berbagai belahan dunia</small></p>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-md-4 col-sm-6">
            <div class="info-box">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bullseye"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><b>Prioritas</b></span>
                    <span class="info-box-number">
                        <small>
                            <ol type="a">
                                <li>Aspek Kuantitas</li>
                                <li>Aspek Kualitas</li>
                                <li>Aspek Kenyamanan</li>
                            </ol>
                        </small>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
</div>
</div>

@endsection