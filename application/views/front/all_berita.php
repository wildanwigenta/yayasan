    
    <div class="breadcrumb-bg  w3l-inner-page-breadcrumb py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5" style="font-size:30px;" >Berita Terkini</h2>
      </div>
    </div>
    
  <!--/Berita-Posts-->
  <section class="w3l-blog py-5" id="blog">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="title-content text-center">
        <h6 class="title-subhny text-center">Latest News</h6>
        <h3 class="title-w3l pb-sm-o pb-2 text-center">Berita</h3>
      </div>
      <div class="row inner-sec-w3ls">
        <!--/services-grids-->
        <?php  
          $berita = $this->Berita_m->select();
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
  </section>
  <!--//Berita-Posts-->