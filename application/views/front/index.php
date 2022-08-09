
  <!--/w3l-banner-content-->
  <div class="banner-w3l-main">
    <div class="w3l-banner-content">
      <div class="container">
        <div class="bannerhny-info text-center">
          <h6 class="title-subhny mb-2">Lauwba</h6>
          <h3 class="">Berani berbuat baik</h3>
          <a class="btn btn-style btn-white mt-sm-5 mt-4" href="<?= base_url('Front/about')?>">
            Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!--//w3l-banner-content-->

  <!-- banner bottom shape -->
  <div class="position-relative">
    <div class="shape overflow-hidden">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- banner bottom shape -->

  <!--/w3l-content-1-->
  <div class="w3l-content-1 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="row w3l-content-inf mt-lg-5 pt-lg-5">
        <?php 
          $about = $this->About_m->select();
          foreach ($about as $row) {
        ?>
        <div class="col-lg-5 w3l-content-left mt-lg-4">
          <h6 class="title-subhny mb-2">LAUWBA</h6>
          <h3 class="title-w3l mb-4"><?= $row->judul ?></h3>
          <div class="pl-5"><img src="<?= base_url('./assets/images/about/'.$row->gambar)?>" alt="" class="radius-image img-fluid" width="150px"></div>
        </div>
        <div class="col-lg-7 w3l-content-right pl-lg-5 mt-lg-4">
          <p class="para-sub pr-lg-5 mt-md-3 mt-3 mx-auto">
            <?= substr($row->deskripsi,0,499).'...' ?>
          </p>
          <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="<?= base_url('Front/about') ?>">Read More</a>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!--//w3l-content-1-->

  <!-- /w3l-content-4-->
  <section class="w3l-content-4 py-5" id="layanan">
    <div class="content-4-main py-lg-5 py-md-4">
      <div class="container">
        <div class="title-content text-center">
          <h3 class="title-w3l mb-sm-5 mb-4 pb-lg-2">Layanan Kami</h3>
        </div>
        <div class="content-info-in row">
          <div class="content-left col-lg-12 d-inline justify-content-center">
              <?php 
                $layanan = $this->Layanan_m->select();
                foreach ($layanan as $row){
              ?>
            <div class="row content4-right-grids mb-sm-5 mb-4">
              <div class="col-lg-1 col-1 content4-right-icon "  >
                <div class="content4-icon icon-clr1">
                  <img src="<?= base_url('./assets/images/layanan/'.$row->gambar) ?>" alt="" style="width:60px;">
                </div>
              </div>
              <div class="col-lg-11 col-11 content4-right-info pl-4">
                <h6><a href="<?= $row->link ?>" target="_blank"><?= $row->layanan ?></a></h6>
                <p><?= $row->deskripsi ?></p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
          <div class="text-center">
                  <p><?= wordwrap('Donasi yang telah anda berikan akan kami kumpulkan dan akan disalurkan ke beberapa',80,'<br>') ?> <a href="<?= base_url('Front/program') ?>">program yang kami miliki</a> </p>
          </div>
      </div>
    </div>
  </section>
  <!-- //w3l-content-4-->

  <!--/Berita-Posts-->
  <section class="w3l-blog py-5" id="blog" style="background: var(--bg-color);">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="title-content text-center">
        <h6 class="title-subhny text-center">Latest News</h6>
        <h3 class="title-w3l pb-sm-o pb-2 text-center">Berita</h3>
      </div>
      <div class="row inner-sec-w3ls">
        <!--/services-grids-->
        <?php  
          $berita = $this->Berita_m->select_3();
          foreach ($berita as $row){
        ?>
        <div class="col-lg-4 col-md-6 about-in blog-grid-info text-left mt-5">
          <div class="card img">
            <div class="card-body img">
              <a href="<?= base_url('Front/detail_berita/'.$row->id_berita) ?>" class="d-block">
                <img src="<?= base_url('./assets/images/berita/'.$row->gambar)?>" alt="" class="img-fluid radius-image">
              </a>
              <div class="blog-des mt-4">
                <!-- <h6 class="card-cap mb-2"><a href="<?= base_url('Front/detail_berita/'.$row->id_berita) ?>">Investigations</a></h6> -->
                <h5 class="card-title mb-2"><a href="<?= base_url('Front/detail_berita/'.$row->id_berita) ?>"><?= $row->berita ?></a>
                </h5>
                <ul class="admin-post mb-3">
                  <li>
                    <p><span class="fa fa-clock-o"></span> <?= $row->tanggal ?></p>
                  </li>
                  <!-- <li>
                    <a href="#comments"><span class="fa fa-comments-o"></span> 3</a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="<?= base_url('Front/all_berita') ?>" class="btn btn-info ">view all</a>
    </div>
  </section>
  <!--//Berita-Posts-->

    <!-- /w3l-content-4-->
    <section class="w3l-content-4 py-5" id="donasi">
    <div class="content-4-main py-lg-5 py-md-4">
      <div class="container">
        <div class="title-content text-center">
          <h3 class="title-w3l mb-sm-5 mb-4 pb-lg-2" style="font-size:25px;">Donasi</h3>
        </div>
        <div class="content-info-in row">

        <div class="col-lg-2"></div>
          <div class="content-left col-lg-8 d-inline justify-content-center">
            <h5 style="text-align:center" >Donasi Masuk Bulan Ini</h5>
            <?php 
              $donasi = $this->Donasi_m->select();
              $total = 0;
              foreach ($donasi as $row){
                $total += $row->donasi;
              }
              ?>
              <div class="progress mt-3 mb-2">
                <div class="progress-bar bg-success" role="progressbar" style="width:<?=($total / 100000000) * 100 ?>%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <medium>Rp. <?= number_format($total)  ?></medium>
              <div class="text-center mt-4">
                  <p><?= wordwrap('Donasi yang telah anda berikan akan kami kumpulkan dan akan disalurkan ke beberapa',80,'<br>') ?> <a href="<?= base_url('Front/program') ?>">program yang kami miliki</a> </p>
              </div> 
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- //w3l-content-4-->
  <!-- testimonials section -->
  <!-- <section class="w3l-clients w3l-test pb-5" id="testimonials">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-4 pt-2 pb-lg-5">
        <div class="title-content text-center">
          <h6 class="title-subhny text-center">Happy Clients</h6>
          <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">What Our Clients Say</h3>
        </div>
        <div id="owl-demo2" class="owl-carousel owl-theme mt-4 py-md-2 mb-md-4">
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Pellen tesque libero ut justo</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team1.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>Johnson william</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Lorem ipsum dolor sit amet</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team2.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>Alexander sakura</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Pellen tesque libero ut justo</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>John wilson</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Lorem ipsum dolor sit amet</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team2.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>Julia sakura</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Pellen tesque libero ut justo</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>John wilson</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Lorem ipsum dolor sit amet.</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus.Vivamus a ligula quam tesque et libero ut justo, ultrices in. </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team2.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>Julia sakura</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- //testimonials section -->

  