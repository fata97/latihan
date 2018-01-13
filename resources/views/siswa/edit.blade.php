@extends('admin_template')

@section('judul')
<h1>
  Form Edit Data Siswa
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Edit Data Siswa</li>
</ol>
@endsection

@section('content')
<form action="{{ url('/siswa') }}" method="POST" >
  <div class="panel panel-primary">
    <div class="panel-heading" style="font-size: 18px;">Basic Information</div>
    <div class="panel-body">
    <div class="row">
      <div class="col-sm-5 col-md-5">
            <div class="form-group">
              <label>Nomor Induk Siswa*</label>
              <input type="text" class="form-control" name="nis" placeholder="Nomor Induk Siswa" value="10115313">
              @if($errors->has('nomor_induk'))
                <p>
                  *Nomor Induk Siswa tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Nama Lengkap*</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="Andi">
              @if($errors->has('nama'))
                <p>
                  *Nama Lengkap tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Tempat dan Tgl Lahir*</label>
              <input type="text" class="form-control" name="ttl" placeholder="Tempat & Tgl Lahir" value="Bandung, 20 Maret 1997">
              @if($errors->has('ttl'))
                <p>
                  *TTL tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Jenis Kelamin*</label>
              <br>
              <input type="radio" class="radio-inline" name="jk" value="Laki-Laki" checked>Laki-Laki
              <input type="radio" class="radio-inline" name="jk" value="Perempuan">Perempuan
            </div>
            <div class="form-group">
              <label>Agama*</label>
              <select name="agama" class="form-control" >
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
              </select>
            </div>
          </div>
          <div class="col-sm-5 col-sm-offset-2 col-md-5 col-md-offset-2">
            <div class="form-group">
              <label>Foto</label>
              <input type="file" name="foto">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat*</label>
              <textarea class="form-control" name="alamat" rows="5" >Jl. Ir. H. Juanda Dago Bandung</textarea>
              @if($errors->has('alamat'))
                <p>
                  *Alamat tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>No. Hp*</label>
              <input type="text" class="form-control" name="nohp" placeholder="No. Hp" value="087822555784">
              @if($errors->has('nohp'))
                <p>
                  *No. Hp tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Kewarganegaraan*</label>
              <select name="kewarganegaraan" class="form-control" >
                <option value="WNI">WNI</option>
                <option value="WNA">WNA</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Student Information</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-5">
              <div class="form-group">
                <label>Kelas*</label>
                <select name="kelas" class="form-control" >
                  <option value="XA">XA</option>
                  <option value="XB">XB</option>
                  <option value="XI IPA">XI IPA</option>
                  <option value="XI IPS">XI IPS</option>
                  <option value="XII IPA">XII IPA</option>
                  <option value="XII IPS">XII IPS</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tahun Angkatan*</label>
                <input type="text" class="form-control" name="tahun_angkatan" placeholder="Tahun Angkatan" value="2015">
                @if($errors->has('tahun_angkatan'))
                  <p>
                    *Tahun Angkatan tidak boleh kosong
                  </p>
                @endif
              </div>
            </div>
            <div class="col-sm-5 col-sm-offset-2 col-md-5 col-md-offset-2">
              <div class="form-group">
                <label>Username*</label>
                <input type="text" class="form-control" name="username" placeholder="Username" value="andi97">
                @if($errors->has('username'))
                  <p>
                    *Username tidak boleh kosong
                  </p>
                @endif
              </div>
              <div class="form-group">
                <label>Password*</label>
                <input type="text" class="form-control" name="password" placeholder="Password" value="bismillah">
                @if($errors->has('password'))
                  <p>
                    *Password tidak boleh kosong
                  </p>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading" style="font-size: 18px;">Parent Information</div>
        <div class="panel-body">
        <div class="row">
          <div class="col-sm-5 col-md-5">
                <div class="form-group">
                  <label>Nama Ayah*</label>
                  <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" value="Budi">
                  @if($errors->has('nama_ayah'))
                    <p>
                      *Nama Ayah tidak boleh kosong
                    </p>
                  @endif
                </div>
                <div class="form-group">
                  <label>Tempat & Tanggal Lahir Ayah*</label>
                  <input type="text" class="form-control" name="ttl_ayah" placeholder="tempat & Tgl Lahir" value="Bandung, 10 Oktober 1970">
                  @if($errors->has('ttl_ayah'))
                    <p>
                      *Tempat & Tanggal Lahir tidak boleh kosong
                    </p>
                  @endif
                </div>
                <div class="form-group">
                  <label>Pekerjaan Ayah*</label>
                  <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="Wiraswasta">
                  @if($errors->has('pekerjaan_ayah'))
                    <p>
                      *Pekerjaan Ayah tidak boleh kosong
                    </p>
                  @endif
                </div>
                <div class="form-group">
                  <label>Penghasilan Ayah*</label>
                  <input type="text" class="form-control" name="penghasilan_ayah" placeholder="Penghasilan Ayah" value="Rp. 1.000.000">
                  @if($errors->has('penghasilan_ayah'))
                    <p>
                      *Penghasilan Ayah tidak boleh kosong
                    </p>
                  @endif
                </div>
              </div>
              <div class="col-sm-5 col-sm-offset-2 col-md-5 col-md-offset-2">
                <div class="form-group">
                  <label>Nama Ibu*</label>
                  <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" value="Susi">
                  @if($errors->has('nama_ibu'))
                    <p>
                      *Nama Ibu tidak boleh kosong
                    </p>
                  @endif
                </div>
                <div class="form-group">
                  <label>Tempat & Tanggal Lahir Ibu*</label>
                  <input type="text" class="form-control" name="ttl_ibu" placeholder="tempat & Tgl Lahir Ibu" value="Bandung, 5 Maret 1972">
                  @if($errors->has('ttl_ibu'))
                    <p>
                      *Tempat & Tanggal Lahir Ibu tidak boleh kosong
                    </p>
                  @endif
                </div>
                <div class="form-group">
                  <label>Pekerjaan Ibu*</label>
                  <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="Guru">
                  @if($errors->has('pekerjaan_ibu'))
                    <p>
                      *Pekerjaan Ibu tidak boleh kosong
                    </p>
                  @endif
                </div>
                <div class="form-group">
                  <label>Penghasilan Ibu*</label>
                  <input type="text" class="form-control" name="penghasilan_ibu" placeholder="Penghasilan ibu" value="Rp. 1000.000">
                  @if($errors->has('penghasilan_ibu'))
                    <p>
                      *Penghasilan Ibu tidak boleh kosong
                    </p>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
        <a href="{{ url('/siswa') }}" class="btn btn-success" >Simpan</a>
        <a href="{{ url('/siswa') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
      </form>
@endsection
