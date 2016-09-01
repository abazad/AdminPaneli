<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $query['title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="icon" href="<?php echo base_url('assets/favicon.png'); ?>">
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/pages/dashboard.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/pages/faq.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/pages/plans.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/pages/signin.css"); ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url("assets/js/message.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/work.js"); ?>"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        	<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </a>
    	<a class="brand" href="<?php echo "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""; ?>"><?php echo $query['title']; ?></a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="icon-cog"></i> Yönetici <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url("management/newUser") ?>"><i class="icon-plus-sign"></i> Yeni Ekle</a></li>
              <li><a href="<?php echo base_url() ?>management"><i class="icon-wrench"></i> Ayarlar</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
          	<i class="icon-user"></i> <?php echo $this->session->userdata('username') ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url("profile/".$this->session->userdata('username')) ?>"><i class="icon-user"></i> Profil</a></li>
              <li><a href="<?php echo base_url("logout") ?>"><i class="icon-signin"></i> Çıkış Yap</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Ürünlerde ara">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
		<li class="<?php if(@$query['status']==1){echo 'active';} ?>">
        <a href="<?php echo base_url(); ?>"><i class="icon-dashboard"></i><span>Ana Sayfa</span></a></li>
        <li class="<?php if(@$query['status']==2){echo 'active';} ?>">
        <a href="<?php echo base_url(); ?>sitesetting"><i class="icon-wrench"></i><span>Site Ayarları</span></a></li>
        <li class="<?php if(@$query['status']==3){echo 'active';} ?>">
        <a href="<?php echo base_url(); ?>product"><i class="icon-inbox"></i><span>Ürünler</span></a></li>
        <li class="<?php if(@$query['status']==4){echo 'active';} ?>">
        <a href="<?php echo base_url(); ?>analize"><i class="icon-bar-chart"></i><span>İstatistik</span></a></li>
        <li class="<?php if(@$query['status']==5){echo 'active';} ?>">
        <a href="<?php echo base_url(); ?>categories"><i class="icon-list"></i><span>Kategoriler</span></a></li>
        <li class="<?php if(@$query['status']==6){echo 'active';} ?>">
        <a href="<?php echo base_url(); ?>groups"><i class="icon-list-alt"></i><span>Gruplar</span></a></li>
        <li class="dropdown <?php if(@$query['status']==7){echo 'active';} ?>">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-long-arrow-down"></i>
                <span>Diğer</span>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>socialmedia">Sosyal Medya</a></li>
                <li><a href="<?php echo base_url(); ?>management">Yönetici İşlemleri</a></li>
                <li><a href="<?php echo base_url(); ?>help">Yardım</a></li>
              </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<div class="main">
	
	<div class="main-inner">

	    <div class="container">