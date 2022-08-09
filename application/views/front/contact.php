
    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg py-5  w3l-inner-page-breadcrumb">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">Contact Us</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="<?= base_url('Front/index') ?>">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
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
  <!--/contact-->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="contact-grids d-grid">
        <div class="contact-left">
          <?php 
            $contact = $this->Contact_m->select();
            foreach ($contact as $row) {
          ?>
          <h3 class="title-w3l mb-2">Contact</h3>
            <p><?= $row->deskripsi;  ?></p>
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker"></span>
              </div>
              <div class="cont-right">
                <h6>Alamat</h6>
                <p><?= $row->alamat;  ?></p>
              </div>
            </div>

            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="cont-right">
                <h6>Telp</h6>
                <p><a href="tel:<?= $row->telp;  ?>"><?= $row->telp;  ?></a></p>
              </div>
            </div>
            
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-life-ring"></span>
              </div>
              <div class="cont-right">
                <h6>Customer Support</h6>
                <p><a href="mailto:<?= $row->email;  ?>" class="mail"><?= $row->email;  ?></a></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

        <div class="contact-right">

          <?php 
            if($this->session->userdata('sukses')){
          ?>
              <div class="alert alert-dismissible fade show" role="alert" style="background-color:var(--font-color);">
                  <p style="color:var(--bg-color);"><?= $this->session->userdata('sukses') ?></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
              </div>
          <?php } ?>

          <form action="<?= base_url('Pesan/insert') ?>" method="post" class="signin-form">
            <div class="input-grids">

              <input type="text" name="nama" id="w3lName" placeholder="Nama" class="contact-input"
                required="">

              <input type="email" name="email" id="w3lSender" placeholder="Email" class="contact-input"
                required="">

              <input type="text" name="subject" id="w3lSubect" placeholder="Subject" class="contact-input"
                required="">

            </div>

            <div class="form-input">
              <textarea name="pesan" id="w3lMessage" placeholder="Type your messege" required=""></textarea>
            </div>

            <div class="w3l-submit text-lg-right">
            <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>

      </div>
  </section>
  <!-- /map-->
  <div class="map-iframe">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.527983078251!2d110.4463974145094!3d-7.83967508006393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5765d4d95351%3A0x5175f045ca1816c!2sPT%20Lauwba%20Techno%20Indonesia!5e0!3m2!1sen!2sid!4v1658376090121!5m2!1sen!2sid"
      width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen="">
    </iframe>
  </div>
  <!-- //map-->
  <!-- /contact -->

  