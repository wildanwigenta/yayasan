<!-- footer -->
<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <?php 
            $info = $this->Info_m->select();
            foreach ($info as $row) {
          ?>
          <div class="col-lg-6 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="navbar-brand" href="<?= base_url('Front/index')?>"><img src="<?= base_url('./assets/images/info/'.$row->gambar)?>" alt="">&nbsp;Lauwba</a>
            </div>
            <p><?= $row->alamat; ?></p>
            
          </div>
          
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

            <ul>
             <h6 class="footer-title-29">History</h6>
              <li><a href="<?= base_url('Front/index')?>">Home</a></li>
              <li><a href="<?= base_url('Front/program')?>">Program</a></li>
              <li><a href="<?= base_url('Front/all_berita')?>">Berita</a></li>
              <li><a href="#layanan">Layanan</a></li>
              <li><a href="#donasi">Donasi</a></li>
              <li><a href="<?= base_url('Front/about')?>">Tentang Kami</a></li>
              <li><a href="<?= base_url('Front/contact')?>">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
              <ul class="mt-3">
                <li><a href="tel:<?= $row->telp; ?>"><span class="fa fa-phone"></span><?= $row->telp; ?></a></li>
                <li><a href="mailto:<?= $row->email; ?>" class="mail"><span class="fa fa-envelope-open-o"></span>
                <?= $row->email; ?></a></li>
              </ul>
          </div>
          <?php 
            }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- //footer -->

  <!-- copyright -->
  <section class="w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© 2021 Lauwba. All rights reserved. Design by 
          <a href="http://wildan.enricko.com/" target="_blank">
            Wildan
          </a>
        </p>

        <div class="col-lg-4 main-social-footer-29">
          <?php 
            $media = $this->Media_m->select();
            foreach($media as $row){
          ?>
          <a href="<?= $row->link; ?>" class="<?= $row->nama; ?>"><span class="fa fa-<?= $row->nama; ?>"></span></a>
          <?php
            }
          ?>
        </div>

      </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
  <!--//footer-->
  
  <!-- Template JavaScript -->
  <script src="<?= base_url('assets/front/')?>js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('assets/front/')?>js/theme-change.js"></script>
  <!-- owl carousel -->
  <script src="<?= base_url('assets/front/')?>js/owl.carousel.js"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo2").owlCarousel({
        loop: true,
        nav: false,
        margin: 50,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          991: {
            items: 2,
            margin: 30,
            nav: false
          },
          1080: {
            items: 3,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="<?= base_url('assets/front/')?>js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/front/')?>js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->


  <script src="<?= base_url('assets/front/')?>js/bootstrap.min.js"></script>
  
</body>

</html>
