
    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg  w3l-inner-page-breadcrumb py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5"><?= $program['program'] ?></h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="<?= base_url('Front/index') ?>">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> <a href="<?= base_url('Front/program')?>"> Program </a></li>
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
<!--/Blog-Posts-->
<section class="w3l-blog page-blogw3 py-5" id="blog">
  <div class="container">
      <div class="inner-sec-w3ls py-lg-5 py-md-3">
          <!--/services-grids-->
		  <div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
    </div>
		  
        <div class="row blog-sec no-gutters">
            <div class="blog-single-post">

                <div class="single-post-image mb-5">
                    <img src="<?= base_url('./assets/images/program/'.$program['gambar'])?>" class="img-fluid w-100 radius-image"
                        alt="blog-post-image">
                </div>

                <div class="single-post-content">
                    <p class="mb-4"><?= $program['deskripsi'] ?></p>
                </div>
    
                <ul class="share-post mb-5 text-right">
                    <?php 
                    $media = $this->Media_m->select();
                    foreach ($media as $row) {
                    ?>
                    <li class="<?= $row->nama ?>">
                        <a href="<?= $row->link ?>" title="#">
                            <span class="fa fa-<?= $row->nama ?>" aria-hidden="true"></span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>

            </div>
        </div>
    </div>
</section>
<!--//Blog-Posts-->
  <div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
  