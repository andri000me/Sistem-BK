<?php
// Mengambil waktu awal proses
$mtime = microtime(true);
$tstart = $mtime;
?>
<DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php echo "$title";?>
  <!-- Bootstrap core CSS-->
  <link href="theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="lib/js/jquery-pack.js"></script>
	<script type="text/javascript" src="lib/js/jquery.imgareaselect.min.js"></script>

  <!-- Custom fonts for this template-->
  <link href="theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="theme/css/sb-admin.css" rel="stylesheet">
  <link href="theme/css/tabelku.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="theme/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="theme/vendor/bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="theme/css/bootstrap-datepicker3.css"/>
      <link href="theme/css/datepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="lib/css/default.css">

  <style type="text/css">

  .table-container {
	overflow: auto;
}
   ya{
     width: 210px;
     height: 310px;
     float: left;
     margin: 20px;
     text-align: center;
   }
   qr{
     width: 4cm;
     height: 4cm;
     float: center;
     margin: 0px;
     text-align: left;
   }
   .foto { border: 5px inset green; }
   .qr { border: 5px inset green; }
</style>
        <link rel="stylesheet" href="lib/css/default.css" />

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Nilai">
        <a class="nav-link nav-link-collapse" data-toggle="collapse" href="#Nilai" data-parent="#exampleAccordion" aria-expanded="true">
        <i class="fa fa-fw fa-list-alt"></i>
        <span class="nav-link-text">Nilai</span>
      </a>
      <ul class="sidenav-second-level collapse" id="Nilai" style="">
            <li>
              <a href="add_1.php">Tambah Nilai</a>
            </li>
            <li>
              <a href="lihat_nilai.php">Lihat Nilai</a>
            </li>
      </ul>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Biodata">
<a class="nav-link nav-link-collapse" data-toggle="collapse" href="#Bio" data-parent="#exampleAccordion" aria-expanded="true">
<i class="fa fa-fw fa-address-card"></i>
<span class="nav-link-text">Biodata</span>
</a>
<ul class="sidenav-second-level collapse" id="Bio" style="">
  <li>
    <a href="foto.php">Tambah/Update Foto</a>
  </li>
    <li>
      <a href="biodata.php">Tambah/Ubah Biodata</a>
    </li>
    <li>
      <a href="lihat_biodata.php">Lihat Biodata</a>
    </li>
</ul>
</li>


<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Biodata">
<a class="nav-link nav-link-collapse" data-toggle="collapse" href="#universitas" data-parent="#exampleAccordion" aria-expanded="true">
<i class="fa fa-fw fa-university"></i>
<span class="nav-link-text">Rencana</span>
</a>
<ul class="sidenav-second-level collapse" id="universitas" style="">
<li>
<a href="univ.php">Pilih Universitas/Politeknik</a>
</li>
<li>
  <a href="data_u.php">Cari Universitas</a>
</li>
<li>
  <a href="data_p.php">Cari Politeknik</a>
</li>
</ul>
</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Opsi">
  <a class="nav-link" href="ubah_password.php">
    <i class="fa fa-fw fa-gear"></i>
    <span class="nav-link-text">Opsi</span>
  </a>
</li>


      </ul>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="http://localhost/ulti/login/logout.php?nisn=<?php echo "$nisn"; ?>">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
