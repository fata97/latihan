@extends('admin_template')

@section('judul')
<h1>
  Data Guru
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Guru</li>
</ol>
@endsection

@section('content')

<div class="box box-info">
  <div class="tombol" >
    <a href="{{ url('guru/create') }}"><button type="button" class="btn btn-success btn-md " ><span class="glyphicon glyphicon-plus " ></span> Tambah Data </button></a>
  </div>
  <br>
<div class="table-responsive">
<table id="tabel-siswa" class="table table-striped table-bordered" cellspacing="0">
    <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Status</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">1</td>
            <td>Rahmat</td>
            <td>X IPA</td>
            <td>Wali Kelas</td>
            <td style="text-align: center;">
            <a href="{{ url('guru/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">2</td>
            <td>Muhtar</td>
            <td>XI IPS</td>
            <td>Wali Kelas</td>
            <td style="text-align: center;">
            <a href="{{ url('guru/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">3</td>
            <td>Sinta</td>
            <td>-</td>
            <td>Guru BK</td>
            <td style="text-align: center;">
            <a href="{{ url('guru/edit') }}" class="btn btn-warning">Edit</a>
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
