@extends('layout.default')
@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="/halaman_utama">Master</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span></span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title">
        <!-- <small>form validation</small> -->
    </h1>
    <div class="row">
        <div class="col-md-10">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <form role="form" class="form-horizontal" method="POST" action="{{URL::to('store')}}">
			<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_employee">NIM</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="NIM" name="nim" required pattern="[0-9-+]+" title="Harap masukkan Nim">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="username">Nama</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama" required pattern="[0-9A-Za-z_]+" title="Harap isi Nama Mahasiswa">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name_employee">Alamat</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" required pattern="[0-9A-Za-z ]+" title="Harap masukkan Alamat">
                        </div>
                    </div>
					<button type="submit" class="btn btn-info" name="saveemployee">Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>
<!-- END CONTENT BODY -->
@stop