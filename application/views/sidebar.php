<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jqvmap/dist/jqvmap.min.css">

	
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/chosen/chosen.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	
	<!-- -->

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="?"><img src="<?php echo base_url() ?>assets/images/user.png" alt="Logo" width="" height="60px"></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url() ?>dashboard/beranda"> <i class="menu-icon fa fa-home"></i>Beranda </a>
                    </li>
					
                    <!--<h3 class="menu-title">Menu Aplikasi</h3>--><!-- /.menu-title -->
					<?php if($this->session->userdata('akses') == "LPM"){ ?>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Instumen Monev</a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-id-badge"></i><a href="<?php echo base_url() ?>pertanyaan_GPMP">Monev GPMP</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?php echo base_url() ?>pertanyaan_GPMF">Monev GPMF</a></li>
							
                        </ul>
                    </li>	
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data Instrumen Monev</a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-paste"></i><a href="<?php echo base_url() ?>hasilmonevGPMP">Hasil Monev GPMP</a></li>
							<li><i class="menu-icon fa fa-paste"></i><a href="<?php echo base_url() ?>hasilmonevGPMF">Hasil Monev GPMF</a></li>				
                        </ul>
                    </li>
					
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Laporan Temuan Monev</a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-paste"></i><a href="<?php echo base_url() ?>cetaktemuanGPMP">Hasil Temuan Monev GPMP</a></li><li><i class="menu-icon fa fa-paste"></i><a href="<?php echo base_url() ?>cetaktemuanGPMF">Hasil Temuan Monev GPMF</a></li>							
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Grafik</a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-paste"></i><a href="<?php echo base_url() ?>grafikGPMP">Grafik Monev GPMP</a></li><li><i class="menu-icon fa fa-paste"></i><a href="<?php echo base_url() ?>grafikGPMF">Grafik Monev GPMF</a></li>							
                        </ul>
                    </li>
					<li>
                        <a href="<?php echo base_url() ?>user"> <i class="menu-icon fa fa-user"></i>User </a>
                    </li>
					<?php } ?>
					<!--<li>
                        <a href="<?php echo base_url() ?>user"> <i class="menu-icon fa fa-user"></i>User </a>
                    </li>-->
					<?php if($this->session->userdata('akses') == "MHS" || $this->session->userdata('akses') == "PRODI"){ ?>
					<li>
                        <a href="<?php echo base_url() ?>instrumenmonevGPMP"> <i class="menu-icon fa fa-user"></i>Instrumen Monev GPMP </a>
                    </li>
					<?php } ?>
					<?php if($this->session->userdata('akses') == "WADEK"){ ?>
					<li>
                        <a href="<?php echo base_url() ?>instrumenmonevGPMF"> <i class="menu-icon fa fa-user"></i>Instrumen Monev GPMF </a>
                    </li>
					<?php } ?>
					<?php if($this->session->userdata('akses') == "GPMP"){ ?>
					<li>
                        <a href="<?php echo base_url() ?>hasilmonevGPMP"> <i class="menu-icon fa fa-user"></i>Data Monev GPMP</a>
                    </li>
					<li>
                        <a href="<?php echo base_url() ?>hasiltemuanGPMP"> <i class="menu-icon fa fa-list"></i>Temuan Monev GPMP</a>
                    </li>
					<li>
                        <a href="<?php echo base_url() ?>cetaktemuanGPMP"> <i class="menu-icon fa fa-print"></i>Cetak Temuan Monev</a>
                    </li>
					<li>
                        <a href="<?php echo base_url() ?>grafikGPMP"> <i class="menu-icon fa fa-print"></i>Grafik Monev GPMP</a>
                    </li>
					<?php } ?>
					<?php if($this->session->userdata('akses') == "GPMF"){ ?>
					<li>
                        <a href="<?php echo base_url() ?>hasilmonevGPMF"> <i class="menu-icon fa fa-user"></i>Data Monev GPMF</a>
                    </li>
					<li>
                        <a href="<?php echo base_url() ?>hasiltemuanGPMF"> <i class="menu-icon fa fa-list"></i>Temuan Monev GPMF</a>
                    </li>
					<li>
                        <a href="<?php echo base_url() ?>cetaktemuanGPMF"> <i class="menu-icon fa fa-print"></i>Cetak Temuan Monev</a>
                    </li>
					<li>
                        <a href="<?php echo base_url() ?>grafikGPMF"> <i class="menu-icon fa fa-print"></i>Grafik Monev GPMF</a>
                    </li>
					
					<?php } ?>
					
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    </aside><!-- /#left-panel -->

    <!-- Left Panel -->