<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Medick Responsive web template, Bootstrap Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <title>Dompet Lauwba</title>
  <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/front/')?>css/style-starter.css">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('./assets/images/logo/logo.png') ?>" />
</head>

<body>
  <div class="header-w3l">
  <!--header-->
  
  <header id="site-header" class="header-w3l fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <a class="navbar-brand" href="<?= base_url('Front/index')?>">
          <?php 
            $info = $this->Info_m->select();
            foreach ($info as $row) {
          ?>
         <img src="<?= base_url('./assets/images/info/'.$row->gambar) ?>" alt="">&nbsp;<small>Dompet</small> Lau<span class="sub-logo">w</span>ba</span>
          <?php } ?>
        </a>
        <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">

            <li class="nav-item <?= ($active == "home") ? "active" : "" ?>">
              <a class="nav-link" href="<?= base_url('Front/index')?>">Home</a>
            </li>

            <li class="nav-item <?= ($active == "program") ? "active" : "" ?> ">
              <a class="nav-link" href="<?= base_url('Front/program')?>">Program</a>
            </li>

            <li class="nav-item <?= ($active == "berita") ? "active" : "" ?> ">
              <a class="nav-link" href="<?= base_url('Front/all_berita')?>">Berita</a>
            </li>

            <li class="nav-item <?= ($active == "about") ? "active" : "" ?> ">
              <a class="nav-link" href="<?= base_url('Front/about')?>">About</a>
            </li>          
            
            <li class="nav-item <?= ($active == "contact") ? "active" : "" ?> ">
              <a class="nav-link" href="<?= base_url('Front/contact')?>">Contact</a>
            </li>

          </ul>

        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
</div>
  <!-- //header -->