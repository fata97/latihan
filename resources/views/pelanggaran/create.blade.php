
@extends('admin_template')

@section('judul')
<h1>
  Form Tambah Data Kelas
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Tambah Data Kelas</li>
</ol>
@endsection

@section('content')
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Data Kelas</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-5">
          <form action="{{ url('/kelas') }}" method="POST" >
							<div class="form-group">
								<label>Nama Kelas*</label>
								<input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas" value="{{old('nama_kelas')}}">
								@if($errors->has('nama_kelas'))
									<p>
										*Nama Kelas tidak boleh kosong
									</p>
								@endif
							</div>
              <div class="form-group">
								<label>Jurusan*</label>
                <select name="jurusan" class="form-control" >
                  <option value="IPA">IPA</option>
                  <option value="IPS">IPS</option>
                  <option value="BAHASA">BAHASA</option>
                </select>
							</div>
              <div class="form-group">
								<label>Wali Kelas*</label>
                <select name="wali_kelas" class="form-control" >
                  <option value="Rahmar">Rahmat</option>
                  <option value="Muhtar">Muhtar</option>
                  <option value="Fahri">Fahri</option>
                </select>
							</div>
            </div>
          </div>

          <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
          <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
          <a href="{{ url('/kelas') }}" class="btn btn-success" >Simpan</a>
          <a href="{{ url('/kelas') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
        </form>
      </div>
    </div>
@endsection
