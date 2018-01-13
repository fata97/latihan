<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" >

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">


    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">

      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{ url('/beranda') }}" style="color:black;"  ><i class="fa fa-home"></i> <span>Beranda</span></a></li>
      <li class="treeview">
        <a href="#" style="color:black;"><i class="fa fa-bars"></i> <span>Master Data</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" >
          <li><a href="{{ url('/siswa') }}" style="color:black"><i class="fa fa-user-o"></i><span>Data Siswa</span></a></li>
          <li><a href="{{ url('/guru') }}" style="color:black"><i class="fa fa-book"></i>Data Guru</a></li>
          <li><a href="{{ url('/kelas') }}" style="color:black"><i class="fa fa fa-building-o"></i>Data Kelas</a></li>
          <li><a href="#" style="color:black"><i class="fa fa-calendar-check-o"></i>Data Absensi</a></li>
          <li><a href="#" style="color:black"><i class="fa fa-file-text"></i>Data Pelanggaran</a></li>
          <li><a href="{{ url('/skill') }}" style="color:black"><i class="fa fa-star-o"></i>Data Skill</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" style="color:black;" ><i class="fa fa-cog"></i> <span>Pengaturan</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" >
          <li><a href="#" style="color:black"><i class="fa fa-user-circle-o"></i><span>Pengaturan Pengguna</span></a></li>
          <li><a href="#" style="color:black"><i class="fa fa-check-square-o"></i>Pengaturan Menu</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
