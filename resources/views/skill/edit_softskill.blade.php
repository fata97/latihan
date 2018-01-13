
@extends('admin_template')

@section('judul')
<h1>
  Data Skill
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Skill</li>
</ol>
@endsection

@section('content')
<div class="col-sm-4 col-md-4">
<form class="form-inline" action="index.html" method="post" >
  <div class="form-group">
    <label>Nama Siswa :</label>
    <select name="jurusan" class="form-control" >
      <option value="Andi">Andi</option>
      <option value="Susi">Susi Pujiastuti</option>
      <option value="Bayu">Bayu</option>
    </select>
  </div>
</form>
</div>

<br>
<br>
<br>

<div class="col-sm-6 col-md-4" >
  <div class="panel panel-primary" style="height:540px">
    <div class="panel-heading" style="font-size: 18px;">Profile Siswa</div>
    <div class="panel-body">
    <center><img id="gambar" src="{{asset('gambar/doraemon.jpg')}}" >
      <h4 style="font-family: “Duru Sans”, Verdana, sans-serif;">Fata Hasan</h4>
      <h5 style="font-weight:normal; font-family: Courier, monospace;">XI IPA</h5>
    </center>
    <ul class="list-group list-group-unbordered">
      <li class="list-group-item"><b>Jenis Kelamin</b>
          <a href="#" style="float:right">Laki-Laki</a>
      </li>
      <li class="list-group-item"><b>Agama</b>
          <a href="#" style="float:right">Islam</a>
      </li>
      <li class="list-group-item"><b>TTL</b>
          <a href="#" style="float:right">Bandung, 20 Maret 1997</a>
      </li>
      <li class="list-group-item"><b>Alamat</b>
          <a href="#" style="float:right">Bandung</a>
      </li>
      <li class="list-group-item"><b>No. Telp</b>
          <a href="#" style="float:right">087822555784</a>
      </li>
      <li class="list-group-item"><b>Nama Ayah</b>
          <a href="#" style="float:right">Ehram</a>
      </li>
    </ul>
  </div>
</div>
</div>
<div class="col-sm-6 col-md-8 ">
<div class="box box-info" style="padding:8px 20px 15px 20px">

  <ul class="nav nav-tabs" style="float:right; " >
      <li ><a data-toggle="tab" href="#menu1" >Skill Karakter</a></li>
      <li class="active"><a data-toggle="tab" href="#menu2">Soft Skill</a></li>
  </ul>
  <p style="font-size: 25px; color:#337ab7; ">Data Skill</p>
  <br>

    <div class="tab-content" style="height:450px ">
      <div id="menu1" class="tab-pane fade ">
        <div class="tombol" >
          <a href="#" style="float:right;"><button type="button" class="btn btn-default " ><i class="fa fa-print" aria-hidden="true"></i> Print </button></a>
          <a href="{{ url('skill/create_skill') }}"><button type="button" class="btn btn-success btn-md " ><span class="glyphicon glyphicon-plus " ></span> Tambah Data </button></a>
        </div>
        <br>
        <canvas id="marksChart" height="200"></canvas>
      </div>
      <div id="menu2" class="tab-pane fade in active">
        <div class="col-sm-6 col-md-6 ">
          <form action="{{ url('/skill') }}" method="POST" >
            <div class="form-group">
              <label>Kemampuan Soft Skill*</label>
              <input type="text" class="form-control" name="ia" placeholder="Kemampuan Soft Skill" value="Pidato">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Grade*</label>
              <select name="grade" class="form-control" >
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
              </select>
            </div>
            <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <a href="{{ url('/skill') }}" class="btn btn-success" >Simpan</a>
            <a href="{{ url('/skill') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
          </form>
      </div>
    </div>
</div>

</div>
<!-- <div class="box box-info col-md-8 col-sm-8 col-xs-12" style=" display: block; width:550px; height:420px; padding-top: 0px;padding-right:
50px;padding-bottom: 30px;padding-left: 5px; position: overflow: hidden;relative;  ">
<center><h3 style="margin-left:60px;">Skill Karakter</h3>
<canvas id="marksChart" height="8" width="10"></canvas> -->

@endsection
@section('script')
    var marksCanvas = document.getElementById("marksChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var marksData = {
    labels: ["Intelegence", "Constituion", "Strength", "Charisma", "Dexterity", "Wisdom"],
    datasets: [{
    label: "Fata Hasan",
    backgroundColor: "transparent",
    borderColor: "rgba(200,0,0,0.6)",
    fill: false,
    radius: 1,
    pointRadius: 1,
    pointBorderWidth: 1,
    pointBackgroundColor: "orange",
    pointBorderColor: "rgba(200,0,0,0.6)",
    pointHoverRadius: 1,
    data: [5, 4, 4, 3, 5, 2]
    }]
    };

    var chartOptions = {
    scale: {
    ticks: {
      beginAtZero: true,
      min: 0,
      max: 5,
      stepSize: 1
    },
    pointLabels: {
      fontSize: 12
    }
    },
    legend: {
    position: 'right'
    }
    };

    var radarChart = new Chart(marksCanvas, {
    type: 'radar',
    data: marksData,
    options: chartOptions
    });
@endsection
