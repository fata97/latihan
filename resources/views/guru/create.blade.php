
@extends('admin_template')

@section('judul')
<h1>
  Form Tambah Data Guru
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Tambah Data Guru</li>
</ol>
@endsection

@section('content')
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Data Guru</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-5">
          <form action="{{ url('/guru') }}" method="POST" >
							<div class="form-group">
								<label>Nama Guru*</label>
								<input type="text" class="form-control" name="nama_guru" placeholder="Nama Guru" value="{{old('nama_guru')}}">
								@if($errors->has('nama_guru'))
									<p>
										*Nama Guru tidak boleh kosong
									</p>
								@endif
							</div>
              <div class="form-group">
								<label>Status*</label>
                <select name="status" class="form-control" >
                  <option value="Wali Kelas">Wali Kelas</option>
                  <option value="Guru BK">Guru BK</option>
                </select>
							</div>
            </div>
          </div>
          <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
          <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
          <a href="{{ url('/guru') }}" class="btn btn-success" >Simpan</a>
          <a href="{{ url('/guru') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
        </form>
      </div>
    </div>
@endsection
