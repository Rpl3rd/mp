
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sekolahkoding.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:11:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Sekolah Koding - Belajar web design, web development dan programming</title>
		<meta charset="UTF-8">
		<meta name="description" content="Sekolah Koding - Belajar web design, web development dan programming online dalam bahasa Indonesia. Belajar sekarang dan mulai berkarya">
		<meta name="keywords" content="belajar, webdesign, web development, tutorial, bahasa, indonesia, sekolah, koding">
    <!-- for facebook graph-->
		<meta property="og:title" content="SekolahKoding">
    <meta property="og:type" content="Website">
		<meta property="og:image" content="<?php echo base_url('assets/asset/blue-logo.png');?>">
		<meta property="og:description" content="Tutorial online belajar Web Programming dan Design dalam bahasa Indonesia di SekolahKoding">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('/assets/user/css/homepage.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/user/css/animate.css') ?>">
    <script src="<?php echo base_url('/assets/user/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/user/js/wow.min.js') ?>"></script>

    <link href="<?php echo base_url('/assets/login/css/nunito.css') ?>" rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('/assets/login/css/pt-mono.css') ?>" rel='stylesheet' type='text/css'>
    <style media="screen">
    h1{ font-family: 'Nunito', sans-serif; }
    h2, h3 {font-family: 'PT Mono', cursive;}

    .section_partner a, .section_media a{
      display: block;
      float: left;
      width: 22%;
      margin: 0 1.5%;
      text-align: center;
    }

    .section_media a{
      width: 18%;
      margin: 0 1%;
    }

     .media_cp, .media_ds{ margin-top: 15px !important }
      .media_ds img{ width: 200px; }
      .media_m img{ width: 190px; }

      .partner_cp, .partner_pp{
        padding-top: 20px;
      }
    /*---------------------------------*/
    /*------ smartphone size  ---------*/
    /*---------------------------------*/
    @media only screen and (max-width : 768px){

    }
    @media only screen and (max-width : 480px){
        .section_partner a, .section_media a{
            float: none;
            width: 80%;
            margin: 8px auto;
        }

        .partner_cp, .partner_pp{
          padding-top: 0px;
        }
    }
    </style>
</head>
<body>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '389996164532722',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "<?php echo base_url('/assets/user/js/sdk.js') ?>";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  </script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','<?php echo base_url('/assets/user/js/analytics.js') ?>','ga');

  ga('create', 'UA-59878621-1', 'auto');
  ga('send', 'pageview');

</script>

  <div class="section section_landing">
    <div class="wrapper">
        <header class="clearfix">
          <div id="logo"><img src="<?php echo base_url();?>assets/asset/homepage/sk_white_transparent.png" alt="logo-sekolahkoding"></div>
          <nav>
            <div id="toggle_menu">Menu</div>
            <div id="menu_wrap">
              <a href="kelas/index.html">Kelas</a>
              <a href="forum.html">Forum</a>
              <a href="perjalanan.html">Perjalanan</a>
              <a href="tentang.html">Tentang</a>
            </div>
          </nav>
        </header>

        <div id="main_text">
          <h1 class="wow bounceInUp">Sekolah Koding</h1>
          <h2>Belajar Web development dan programming</h2>
          <h3>Luaskan ilmu, luaskan manfaat</h3>
        </div>

        <div id="tombol_wrapper">
          <a class="tombol" href="<?php echo site_url('main/masuk'); ?>">Masuk</a>
          <a class="tombol" href="<?php echo site_url('main/daftar'); ?>">Daftar</a>
        </div>
    </div>
  </div>

  <div class="section section_testimoni">
    <div class="wrapper">
          <h4><span> Apa Kata Mereka </span></h4>
          <div class="each_testimoni clearfix wow flipInX">
            <img src=" <?php echo base_url();?>assets/asset/homepage/peter_jack.jpg" alt="foto peter komunitas php">
            <p>"Sebagai sebuah komunitas programming terbesar di indonesia, PHP Indonesia memiliki kewajiban moral untuk bersinergi dengan organisasi manapun yang memiliki tujuan yang sama yakni pengembangan SDM TI yang berkualitas bagi Indonesia. Setelah berdiskusi panjang lebar dengan Founder Sekolah Koding, saya sangat yakin Sekolah Koding adalah sebuah institusi pengembangan skill programming yang memiliki visi dan misi yang hebat untuk kemajuan TI di Indonesia dan dunia, oleh karena itu menjalin hubungan yang baik dengan Sekolah Koding adalah sebuah aliansi strategis demi mencapai tujuan bersama. Sukses untuk Sekolah Koding, mari BERSAMA kita BERKARYA, dan bersama kita BERJAYA!!!!.... "</p>
            <div id="testimoni_oleh"><a href="http://phpindonesia.or.id/">Peter J. Kambey, <span>Head of Executive | PHP Indonesia Community</span></a></div>
          </div>
          <div class="each_testimoni clearfix wow flipInX">
            <img src="<?php echo base_url();?>assets/asset/homepage/oriza.jpg" alt="foto ahmad oriza co founder codepolita">
            <p class="testimoni_mini">"Penyampaian materi yang lugas disertai semangat berbagi menjadi hal yang sangat luar biasa. Good job Sekolah Koding."</p>
            <div id="testimoni_oleh"><a href="http://codepolitan.com/">Ahmad Oriza, <span>Co-Founder Codepolitan</span></a></div>
          </div>
          <div class="each_testimoni clearfix wow flipInX">
            <img src="<?php echo base_url();?>assets/asset/homepage/fajar.jpg" alt="foto fajar founder startupmengajar">
            <p class="testimoni_mini">"Sekolah Koding tempat yang tepat untuk belajar programming. Tutorial yang banyak & lengkap serta berbahasa Indonesia loh! Buruan belajar bersama-sama dengan pelajar lainnya di seluruh penjuru Indonesia hanya di SekolahKoding.com"</p>
            <div id="testimoni_oleh"><a href="http://leanskill.com/"> Fajar, <span>Founder leanskill.com</span></a></div>
          </div>
      </div>
    </div>

  <div class="section section_highlight">
    <div class="wrapper">
        <div id="col_video" class="wow rollIn">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/Y7oZU3T867M" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="short_menu" class="wow slideInRight">
          <p>Tidak tahu apa-apa? Mau mulai dari 0? jangan khawatir!</p>
          <a href="kelas/index.html"><img src="<?php echo base_url('assets/asset/homepage/sm_nonton.png');?>" alt="belajar web development logo">Nonton ratusan kelas yang terus diupdate</a>
          <a href="forum.html" class="short_menu_child"><img src="<?php echo base_url('assets/asset/homepage/sm_forum.png');?>" alt="forum web developer indonesia logo">Diskusi dengan ribuan member lain</a>
          <a href="perpustakaan.html" class="short_menu_child"><img src="<?php echo base_url('assets/asset/homepage/sm_perpus.png');?>" alt="belajar membuat website logo">Baca referensi pelajaran di perpustakaan</a>
          <a href="perjalanan.html" class="short_menu_child"><img src="<?php echo base_url('assets/asset/homepage/sm_peta.png');?>" alt="belajar cara membuat website logo">Lihat peta pelajaran untuk memulai</a>
        </div>
    </div>
  </div>

  <div class="section section_media">
    <div class="wrapper">
        <h4><span>Media</span></h4>
        <div id="media_wrapper" class="wow flipInY">
          <a class="media_net" target="_blank" href="https://www.youtube.com/watch?v=Om28d-snPkI"><img height="65" src="<?php echo base_url('assets/asset/homepage/net_tv.png');?>" alt="logo net tv"></a>
          <a class="media_cp" target="_blank" href="http://www.codepolitan.com/belajar-koding-di-sekolahkoding-com/"><img src="<?php echo base_url('assets/asset/homepage/codepolitan_logo.png');?>" alt="logo codepolitan" /></a>
          <a class="media_ds" target="_blank" href="https://dailysocial.net/post/sekolahkoding/"><img src="<?php echo base_url('assets/asset/homepage/dailysocial_logo.png');?>" alt="logo dailysocial"></a>
          <a class="media_m" target="_blank" href="http://marketeers.com/article/belajar-coding-sulit-datanglah-ke-sekolah-koding.html"><img src="<?php echo base_url('assets/asset/homepage/marketers.jpg');?>" alt="logo marketeers"></a>
          <a class="media_tel" target="_blank" href="http://blog.telkomsel.com/gadgetapps/Profil-Finalis-The-NextDev-2015:-SekolahKoding"><img src="<?php echo base_url('assets/asset/homepage/Telkomsel_2013.png');?>" alt="logo telkomsel"></a>
        </div>
    </div>
  </div>

  <div class="section section_perjalanan">
    <div class="wrapper">
        <h4><span>Perjalanan</span></h4>
        <div class="each_perjalanan each_perjalanan_fe wow slideInDown">
          <a href="perjalanan/frontend.html">
          <div class="perjalanan_wrapper">
            <div class="each_perjalanan_title"> Front End </div>
            <img src="<?php echo base_url('assets/asset/cover/css3.png');?>" alt="cara menjadi web developer">
            <div class="each_perjalanan_desc">
              Pintu pertama yang harus kita buka untuk mulai belajar cara membuat website, yaitu front-end (bagian depan).
            </div>
          </div>
          </a>
        </div>

        <div class="each_perjalanan each_perjalanan_folio wow slideInDown">
          <a href="perjalanan/portofolio.html">
          <div class="perjalanan_wrapper">
            <div class="each_perjalanan_title"> Membuat Portofolio </div>
            <img src="<?php echo base_url('assets/asset/cover/tema_wp.png');?>" alt="">
            <div class="each_perjalanan_desc">
              Seri kelas mulai dari mendesain website, mengubah menjadi HTML, CSS dan Javascript.
              Tidak ketinggalan cara untuk mengubah website menjadi responsive.
            </div>
          </div>
          </a>
        </div>

        <div class="each_perjalanan each_perjalanan_php wow slideInDown">
          <a href="perjalanan/php.html">
          <div class="perjalanan_wrapper">
            <div class="each_perjalanan_title"> PHP </div>
            <img src="<?php echo base_url('assets/asset/cover/php-oop.png');?>" alt="belajar php cover">
            <div class="each_perjalanan_desc">
              Bahasa program yang sangat populer untuk membuat website dinamis dan berinteraksi dengan database.
              Komponen utama untuk menjadi ahli back-end.
             </div>
          </div>
          </a>
        </div>
    </div>
  </div>

  <div class="section section_donasi">
    <div class="wrapper">
        <p>Anda yang menentukan sendiri berapa biaya belajar di sekolah koding.
          Jangan ragu investasi untuk diri sendiri, wujudkan ide dan kejar cita-cita sekarang.
          Lebih detail kunjungi halaman <a href="https://sekolahkoding.com/syarat">syarat</a>.
        </p>
    </div>
  </div>

  <div class="section section_statistik">
    <div class="wrapper">
        <h4><span>Statistik</span></h4>
        <div id="statistik_box_wrapper" class="wow lightSpeedIn">
          <div class="statistik_box"> 11740<span>member</span> </div>
          <div class="statistik_box"> 488 <span>video tutorial</span> </div>
          <div class="statistik_box">  3751 <span>aktivitas forum</span> </div>
        </div>
    </div>
  </div>

  <div class="section section_partner">
    <div class="wrapper">
        <h4><span>Partner Kami</span></h4>
        <a class="partner_cs" target="_blank" href="http://codesaya.com/"><img id="ri" src="<?php echo base_url('assets/asset/homepage/codesaya_logo_blue.png');?>" alt=""></a>
        <a class="partner_cp" target="_blank" href="http://codepolitan.com/"><img id="ri" src="<?php echo base_url('assets/asset/homepage/codepolitan-logo_small.png');?>" alt=""></a>
        <a class="partner_php" target="_blank" href="http://www.phpindonesia.or.id/"><img id="ri" src="<?php echo base_url('assets/asset/homepage/php_indonesia.png');?>" alt=""></a>
        <a class="partner_pp" target="_blank" href="http://pondokprogrammer.com/"><img id="ri" src="<?php echo base_url('assets/asset/homepage/Logo-PP1.png');?>" alt=""></a>
    </div>
  </div>

  <div class="section section_action">
    <div class="wrapper">
        <p class="wow bounceInDown">Buka pintu ilmu dan luaskan manfaat dengan sekolah koding</p>
        <div id="tombol_wrapper_action" class="clearfix">
          <div class="tombol_action"><a href="user/daftar.html">Daftar Sekarang</a></div>
          <div class="tombol_action"><a href="kelas/index.html">Lihat Kelas</a></div>
        </div>
        <p id="extra_action">Ada pertanyaan? Hubungi kami di <a href="mailto:tanyaadmin@sekolahkoding.com">tanyaadmin@sekolahkoding.com</a></p>
    </div>
  </div>

  <div class="section section_footer">
    <div class="wrapper">
        <div id="footer_main_info">
          <h5>Sekolah Koding</h5>
          <p>Video tutorial web development dan programming dalam bahasa Indonesia.
Luaskan ilmu, luaskan manfaat.</p>
        </div>

        <div id="footer_extra_info" class="clearfix">
          <div class="col_3_footer">
            <h6>Belajar</h6>
            <ul>
              <li><a href="kelas/index.html">Kelas</a></li>
              <li><a href="perjalanan.html">Perjalanan</a></li>
              <li><a href="perpustakaan.html">Perpustakaan</a></li>
            </ul>
          </div>
          <div class="col_3_footer">
            <h6>Diskusi</h6>
            <ul>
              <li><a href="upacara.html">Upacara</a></li>
              <li><a href="forum.html">Forum</a></li>
            </ul>
          </div>
          <div class="col_3_footer">
            <h6>Informasi</h6>
            <ul>
              <li><a href="blog/index.html">Blog</a></li>
              <li><a href="tentang.html">Tentang</a></li>
              <li><a href="syarat.html">Syarat</a></li>
              <li><a href="member.html">Member</a></li>
            </ul>
            <ul>
              <li><a href="user/login.html">Masuk</a></li>
              <li><a href="user/daftar.html">Daftar</a></li>
            </ul>
          </div>
        </div><!-- end footer extra info-->

        <div id="footer_social_media">
          <a target="_blank" href="https://facebook.com/sekolahkoding"><img src="<?php echo base_url('assets/asset/homepage/f_l.png');?>" alt="facebook sekolahkoding"></a>
          <a target="_blank" href="https://twitter.com/sekolahkoding"><img src="<?php echo base_url('assets/asset/homepage/t_l.png');?>" alt="twitter sekolahkoding"></a>
          <a target="_blank" href="https://youtube.com/sekolahkoding"><img src="<?php echo base_url('assets/asset/homepage/u_l.png');?>" alt="youtube sekolahkoding"></a>
        </div>

        <div id="footer_last">
          <div id="copyright">&copy;SekolahKoding 2016</div>
          <div id="made_in"> [ ] dengan <span>❤</span> di Berlin</div>
        </div>

    </div>
  </div>

  <script>
  jQuery(function($){

      //main nav toggle menu
      $('#toggle_menu').on('click', function(e) {
        $('#menu_wrap').toggleClass('show');
        e.preventDefault();
      });

  });

  //  new WOW().init();

</script>
</body>

<!-- Mirrored from www.sekolahkoding.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:11:47 GMT -->
</html>
