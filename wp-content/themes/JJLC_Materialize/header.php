<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
  <meta property="og:title" content="<?php bloginfo( 'name' ); ?> - Jakarta Japan Lunatic Club"/>
  <meta property="og:site_name" content="Jakarta Japan Lunatic Club"/>
  <meta property="og:description" content="Jakarta Japan Lunatic CLub (JJLC) merupakan komunitas Japan culture yang sering beraktivitas di lingkungan Universitas Negeri Jakarta."/>
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta property="og:url" content="http://jjlc-unj.com" />
  <title><?php bloginfo( 'name' ); ?></title>

  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?=get_template_directory_uri(); ?>/assets/css/icon.css" type="text/css" rel="stylesheet">
  <link href="<?=get_template_directory_uri(); ?>/assets/css/materialize.min.css" rel="stylesheet" media="screen,projection">
  <link href="<?=get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- Website Icon -->
  <link rel="SHORTCUT ICON" href="<?=get_template_directory_uri(); ?>/favicon-96x96.png" type="image/x-icon" />
  <link rel="ICON" href="<?=get_template_directory_uri(); ?>/favicon-96x96.png" type="image/ico" />
</head>
<body>

  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <div class="container">
          <a href="<?=site_url();?>" class="brand-logo center"><img alt="JJLC" class="nav-logo" src="<?=get_template_directory_uri();?>/assets/img/logojjlc.png"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="<?=site_url();?>">Home</a></li>
            <li><a href="<?=site_url("/artikel");?>">Artikel</a></li>
            <li><a href="<?=site_url("/kontak");?>">Kontak</a></li>
            <li><a class="dropdown-button" href="#!" data-target="divisi">Divisi<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="<?=site_url("/profil");?>">Profil</a></li>
            <li><a href="<?=site_url("/galeri");?>">Galeri</a></li>
          </ul>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?=site_url("/Panel/Auth");?>">Masuk</a></li>
            <li><a href="<?=site_url("/Panel/Auth/register");?>">Daftar</a></li>
            <li><a href="<?=site_url("/about");?>">About</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Dropdown Desktop -->
  <ul id="divisi" class="dropdown-content">
    <li><a href="<?=site_url("/divisi/animanga/");?>"><img src="<?=get_template_directory_uri(); ?>/assets/img/animanga.png">Animanga</a></li>
    <li class="divider"></li>
    <li><a href="<?=site_url("/divisi/budaya/");?>"><img src="<?=get_template_directory_uri(); ?>/assets/img/budaya.png">Budaya</a></li>
    <li class="divider"></li>
    <li><a href="<?=site_url("/divisi/cosplay/");?>"><img src="<?=get_template_directory_uri(); ?>/assets/img/cosplay.png">Cosplay</a></li>
    <li class="divider"></li>
    <li><a href="<?=site_url("/divisi/games/");?>"><img src="<?=get_template_directory_uri(); ?>/assets/img/games.png">Games</a></li>
  </ul>

    <!-- Dropdown Mobile -->
  <ul id="mobile-divisi" class="dropdown-content">
    <li><a href="<?=site_url("/divisi/animanga/");?>"><img src="<?=get_template_directory_uri(); ?>/assets/img/animanga.png">Animanga</a></li>
    <li class="divider"></li>
    <li><a href="<?=site_url("/divisi/budaya/");?>"><img src="<?=get_template_directory_uri(); ?>/assets/img/budaya.png">Budaya</a></li>
    <li class="divider"></li>
    <li><a href="<?=site_url("/divisi/cosplay/");?>"><img src="<?=get_template_directory_uri(); ?>/assets/img/cosplay.png">Cosplay</a></li>
    <li class="divider"></li>
    <li><a href="<?=site_url("/divisi/games/");?>"><img src="<?=get_template_directory_uri(); ?>/assets/img/games.png">Games</a></li>
  </ul>

  <ul class="sidenav" id="mobile-demo" >
    <li><a href="<?=site_url();?>">Home</a></li>
    <li><a href="<?=site_url("/artikel");?>">Artikel</a></li>
    <li><a href="<?=site_url("/kontak");?>">Kontak</a></li>
    <li><a class="dropdown-mobile" href="#!" data-target="mobile-divisi">Divisi<i class="material-icons right">arrow_drop_down</i></a></li>
    <li><a href="<?=site_url("/profil");?>">Profil</a></li>
    <li><a href="<?=site_url("/galeri");?>">Galeri</a></li>
    <li class="divider"></li>
    <li><a href="<?=site_url("/Panel/Auth");?>">Masuk</a></li>
    <li><a href="<?=site_url("/Panel/Auth/register");?>">Daftar</a></li>
    <li><a href="<?=site_url("/about");?>">About</a></li>
  </ul>