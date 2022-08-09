
    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg w3l-inner-page-breadcrumb py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">About</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="<?= base_url('Front/index') ?>">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About </li>
        </ul>
      </div>
    </div>
  <!--//breadcrumb-bg-->
  <!-- banner bottom shape -->
  <div class="position-relative">
    <div class="shape overflow-hidden">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- banner bottom shape -->
  <!-- //w3l-inner-page-breadcrumb-->
  <section class="w3l-about-ab" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <div class="imgw3l-ab mb-md-5 mb-3">
          <img src="assets/images/banner2.jpg" alt="" class="radius-image img-fluid">
        </div>
        <?php 
          $about = $this->About_m->select();
          foreach ($about as $row) { 
        ?>
        <div class="row">
          <div class="col-lg-4 left-wthree-img">
            <h6 class="title-subhny">Tentang Kami</h6>
            <h3 class="title-w3l mb-4"><?= $row->judul ?></h3>
            <img src="<?= base_url('./assets/images/about/'.$row->gambar)?>" alt="" class="radius-image img-fluid" width="300px">

          </div>
          <div class="col-lg-8 pl-lg-5 align-self">
            <p class="mt-5">
              <?= wordwrap(substr($row->deskripsi,0,1294),1320) ?>
            </p>
            <!-- <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">Read More</a> -->
          </div>
        </div>
          <p class="">
            <?= wordwrap(substr($row->deskripsi,1294,2500),1320) ?>
          </p>
          <?php } ?>
      </div>
    </div>
  </section>
  <!-- /w3l-content-2-->

  <!-- home page block grids -->
  <section class="w3l-two-servicses py-5" id="services2" style="background: var(--bg-grey);">
    <div class="container py-lg-5 py-md-4 py-2" >
     
      <div class="row bottom-ab-grids">
        <div class="col-lg-12 bottom-ab-left align-self">
          <!-- <h6 class="title-subhny">What We Offer</h6> -->
          <h3 class="title-w3l mb-4 text-center">Visi & Misi</h3>
        </div>
        <?php 
          $visimisi = $this->Visimisi_m->select();
          foreach ($visimisi as $row) { 
        ?>
        <div class="col-lg-6 bottom-right-grids pl-lg-5 mt-lg-0 mt-5" style="border-right:2px solid black;">

          <h4 class="title-w3l mb-4" style="font-size:30px;">Visi</h4>
          <p class="">
              <?= $row->visi ?>
          </p>

        </div>
        <div class="col-lg-6 bottom-right-grids pl-lg-5 mt-lg-0 mt-5">
        <h4 class="title-w3l mb-4" style="font-size:30px;">Misi</h4>
          <p class="">
          <?= $row->misi ?>
          </p>

            <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- //home page block grids -->

  <!-- /w3l-content-5-->
  <!-- <section class="w3l-content-5 py-5">
    <div class="content-4-main py-lg-5 py-md-4">
      <div class="container pb-5">
        <div class="title-content text-left">
          <h6 class="title-subhny">Here & Now, Every Day</h6>
          <h3 class="title-w3l two mb-sm-5 mb-4">Healing Experiences- For Everyone <br> All The Time</h3>
        </div>
        <div class="content-info-in row">
          <div class="content-left col-lg-6">
            <p class=""> We focus on the needs of every small to middle market businesses to improve and grow
              their return. lacinia id erat eu
              ullam corper. Nunc id ipsum fringilla, gravida felis vitae. lacinia id, sunt in
              culpa quis lacinia. Lorem ipsum dolor, sit amet init elit. Eos,
              debitis doler et in.lacinia id, sunt in culpa quis. </p>
            <a href="#discover" class="btn btn-style btn-primary mt-md-5 mt-4">Get in touch</a>
          </div>
          <div class="content-right col-lg-6 mt-lg-0 mt-5">
            <p> We focus on the needs of every small to middle market businesses to improve and grow
              their return. lacinia id erat eu
              ullam corper. Nunc id ipsum fringilla, gravida felis vitae. lacinia id, sunt in
              culpa quis lacinia. Lorem ipsum dolor, sit amet init elit. Eos,
              debitis. gravida felis vitae. lacinia id, sunt in
              culpa quis. Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- /w3l-content-5-->

  <!-- /team-sec-->
  <!-- <section class="w3l-team">
    <div class="team py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="title-content text-center">
          <h6 class="title-subhny text-center">Leading Team</h6>
          <h3 class="title-w3l mb-sm-3 text-center">Meet Our Team</h3>
        </div>
        <div class="row team-row">
          <div class="col-lg-3 col-6 team-wrap mt-4 pt-lg-2">
            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="assets/images/team1.jpg" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Jennifer Foster
                </a></h3>
                <p>Associate Dentist</p>
                <div class="social">
                  <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- end team member -->


          <!-- <div class="col-lg-3 col-6 team-wrap mt-4 pt-lg-2">
            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="assets/images/team2.jpg" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Dhony Abraham</a></h3>
                <p>Orthodontist</p>
                <div class="social">
                  <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>

          </div> -->
          <!-- end team member -->

          <!-- <div class="col-lg-3 col-6 team-wrap mt-4 pt-lg-2">

            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="assets/images/team3.jpg" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Marko Dugonji</a></h3>
                <p>Health Therapist</p>
                <div class="social">
                  <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 team-wrap mt-4 pt-lg-2">
            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="assets/images/team4.jpg" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Rhoda Byrd</a></h3>
                <p>Implantologist</p>
                <div class="social">
                  <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- end team member -->
        <!-- </div>
      </div>
    </div>
  </section> -->
  <!--//team-sec -->
  
  