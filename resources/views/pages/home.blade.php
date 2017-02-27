@extends('layout.default')
@section('content')
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
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Tambah Data Pengguna</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="add" class="btn sbold green" data-toggle="modal"> Tambah Data
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Aksi</th>
                            </tr>
                        </tfoot>

                        <tbody>
                        @foreach($homeList as $list)
								<tr>
									<td>{{$list->id}}</td>
									<td>{{$list->nim}}</td>
									<td>{{$list->nama}}</td>
									<td>{{$list->alamat}}</td>
									<td><center>
                                    <div class="btn-group">
	                                        <a href="{{URL::to('edit/'.$list->id)}}" class="btn btn-primary tooltips" data-container="body" data-placement="top" data-original-title="Edit" data-toggle="modal"><i class="fa fa-edit"></i></a>
	                                        <a href="{{URL::to('hapus/'.$list->id)}}" class="btn btn-danger tooltips" data-container="body" data-placement="top" data-original-title="Hapus" onclick="if(confirm('Apakah anda yakin akan menghapus?')){return true;}else{return false;}"><i class="fa fa-trash"></i></a>
	                                    </div>
	                                </center></td>									
								</tr>
						@endforeach
                            <tr>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- END CONTENT BODY -->
</div>
</form>
@stop