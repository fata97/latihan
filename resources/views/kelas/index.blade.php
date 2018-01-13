@extends('admin_template')

@section('judul')
<h1>
  Data Kelas
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Kelas</li>
</ol>
@endsection

@section('content')

<div class="box box-info">
  <div class="tombol" >
    <a href="{{ url('kelas/create') }}"><button type="button" class="btn btn-success btn-md " ><span class="glyphicon glyphicon-plus " ></span> Tambah Data </button></a>
  </div>
  <br>
<div class="table-responsive">
<table id="tabel-siswa" class="table table-striped table-bordered" cellspacing="0">
    <thead>
        <tr>
          <th>No</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Wali Kelas</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">1</td>
            <td>X IPA</td>
            <td>IPA</td>
            <td>Rahmat</td>
            <td style="text-align: center;">
            <a href="{{ url('kelas/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">2</td>
            <td>XI IPS</td>
            <td>IPS</td>
            <td>Muhtar</td>
            <td style="text-align: center;">
            <a href="{{ url('kelas/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">3</td>
            <td>XII BAHASA</td>
            <td>BAHASA</td>
            <td>Fahri</td>
            <td style="text-align: center;">
            <a href="{{ url('kelas/edit') }}" class="btn btn-warning">Edit</a>
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
