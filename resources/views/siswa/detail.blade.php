
@extends('admin_template')

@section('judul')
<h1>
  Detail Data Siswa
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Detail Data Siswa</li>
</ol>
@endsection
@section('content')
<center><img id="gambar" src="{{asset('gambar/doraemon.jpg')}}" >
  <h4 style="font-family: “Duru Sans”, Verdana, sans-serif;">Fata Hasan</h4>
  <h5 style="font-weight:normal; font-family: Courier, monospace;">XI IPA</h5>
</center>
<br>
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-primary" style="padding-bottom: 0px;">
      <div class="panel-heading" style="font-size: 18px;">Basic Information</div>
      <div class="panel-body">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item"><b>NIS</b>
                    <a href="#" style="float:right">10115313</a>
                </li>
                <li class="list-group-item"><b>Nama</b>
                    <a href="#" style="float:right">Andi</a>
                </li>
                <li class="list-group-item"><b>Tempat & Tanggal Lahir</b>
                    <a href="#" style="float:right">Bandung, 20 Maret 1997</a>
                </li>
                <li class="list-group-item"><b>Jenis Kelamin</b>
                    <a href="#" style="float:right">Laki-Laki</a>
                </li>
                <li class="list-group-item"><b>Agama</b>
                    <a href="#" style="float:right">Islam</a>
                </li>
                <li class="list-group-item"><b>Alamat</b>
                    <a href="#" style="float:right">Jl. Ir. H. Juanda Dago Bandung</a>
                </li>
                <li class="list-group-item"><b>No. Hp</b>
                    <a href="#" style="float:right">087822555784</a>
                </li>
                <li class="list-group-item"><b>Kewarganegaraan</b>
                    <a href="#" style="float:right">WNI</a>
                </li>
              </ul>
      </div>
    </div>
  </div>
  <div class="col-md-6 ">
      <div class="panel panel-primary">
        <div class="panel-heading" style="font-size: 18px;">Parent Information</div>
        <div class="panel-body">
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item"><b>Nama Ayah</b>
                <a href="#" style="float:right">Budi</a>
            </li>
            <li class="list-group-item"><b>Tempat & Tanggal Lahir Ayah</b>
                <a href="#" style="float:right">Bandung, 10 Oktober 1970</a>
            </li>
            <li class="list-group-item"><b>Pekerjaan Ayah</b>
                <a href="#" style="float:right">Wiraswasta</a>
            </li>
            <li class="list-group-item"><b>Penghasilan Ayah</b>
                <a href="#" style="float:right">Rp. 1.000.000</a>
            </li>
            <li class="list-group-item"><b>Nama Ibu</b>
                <a href="#" style="float:right">Susi</a>
            </li>
            <li class="list-group-item"><b>Tempat & Tanggal Lahir</b>
                <a href="#" style="float:right">Bandung, 5 Maret 1972</a>
            </li>
            <li class="list-group-item"><b>Pekerjaan Ibu</b>
                <a href="#" style="float:right">Guru</a>
            </li>
            <li class="list-group-item"><b>Penghasilan Ibu</b>
                <a href="#" style="float:right">Rp. 1.000.000</a>
            </li>
          </ul>
        </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Student Information</div>
      <div class="panel-body">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item"><b>Kelas</b>
                    <a href="#" style="float:right">XI IPA</a>
                </li>
                <li class="list-group-item"><b>Jurusan</b>
                    <a href="#" style="float:right">IPA</a>
                </li>
                <li class="list-group-item"><b>Tahun Angkatan</b>
                    <a href="#" style="float:right">2015</a>
                </li>
                <li class="list-group-item"><b>Email</b>
                    <a href="#" style="float:right">andi97@gmail.com</a>
                </li>
                <li class="list-group-item"><b>Password</b>
                    <a href="#" style="float:right">bismillah</a>
                </li>
              </ul>
      </div>
    </div>
  </div>
</div>
<a href="{{ url('/siswa') }}" class="btn btn-default" style="background-color:#fff;">Kembali</a>
@endsection
