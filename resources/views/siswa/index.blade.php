@extends('admin_template')

@section('judul')
<h1>
  Data Siswa
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Siswa</li>
</ol>
@endsection

@section('content')

<div class="box box-info">
    <div class="dropdown" style="float:right;">
      <button class="btn btn-info dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tools
      <span class="caret"></span></button>
      <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-file-excel-o"></i>Import from Excel</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-download"></i>Download Template</a></li>
      </ul>
    </div>
    <a href="{{ url('/siswa/create') }}"><button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-plus " ></span> Tambah Data </button></a>
  <br>
  <br>
<div class="table-responsive">
<table id="tabel-siswa" class="table table-striped table-bordered" cellspacing="0">
    <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Wali</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">1</td>
            <td>112112</td>
            <td>Fata Hasan</td>
            <td>Laki Laki</td>
            <td>X IPA</td>
            <td>IPA</td>
            <td>Budi</td>
            <td style="text-align: center;"><a href="{{ url('/siswa/detail') }}" class="btn btn-primary">Detail</a>
            <a href="{{ url('/siswa/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">2</td>
            <td>112132</td>
            <td>Hasan</td>
            <td>Laki Laki</td>
            <td>XI IPS</td>
            <td>IPS</td>
            <td>Andi</td>
            <td style="text-align: center;">
            <a href="{{ url('/siswa/detail') }}" class="btn btn-primary">Detail</a>
            <a href="{{ url('/siswa/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">3</td>
            <td>112112</td>
            <td>Susi</td>
            <td>Perempuan</td>
            <td>XII BAHASA</td>
            <td>BAHASA</td>
            <td>Susilo</td>
            <td style="text-align: center;">
            <a href="{{ url('/siswa/detail') }}" class="btn btn-primary">Detail</a>
            <a href="{{ url('/siswa/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
  <tbody>
</table>
</div>
</div>
@endsection

@section('script')
$('#tabel-siswa').DataTable();
@endsection
