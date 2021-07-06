<!DOCTYPE html>
<html dir="ltr" lang="tr">


<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<title> Pastane & Cafe</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="upload/manset/favicon.png">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link rel="stylesheet" href="style/css/normalize.css">

        <link rel="stylesheet" href="style/css/validation.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="style/css/main.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="style/css/bootstrap.min.css">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="style/css/animate.min.css">

        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="style/css/font-awesome.min.css">

        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="style/vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="style/vendor/OwlCarousel/owl.theme.default.min.css">

        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="style/css/meanmenu.min.css">

        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="style/vendor/slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="style/vendor/slider/css/preview.css" type="text/css" media="screen" />

        <!-- Datetime Picker Style CSS -->
        <link rel="stylesheet" href="style/css/jquery.datetimepicker.css">

        <!-- Custom CSS -->


        <!-- Modernizr Js -->
        <script src="style/js/modernizr-2.8.3.min.js"></script>


    <link rel="stylesheet" href="style/css/color/red.css" id="color" />

    <!--<link rel="stylesheet" href="Theme/StyleAll.css" />-->


<meta name="google-site-verification" content="F-7YJLnVfzR7fdp3E4Hxte3DwyxS93STA_2l8wRkrrM" />

</head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="wrapper">




            <!-- Header Area Start Here -->
            <header>
                <div class="header1-area">
                    <div class="header-bottom-area" id="sticker">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="logo-area">
                                        <a href="index.html">
                                        <img alt="" src="upload/manset/logo_2.png" class="img-responsive"  />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="main-menu-area">
                                        <nav>
                                            <ul>


                <li class="">
					<a href="{{route('anasayfa')}}">ANA SAYFA</a>
					     <ul></ul></li><li class=""><a href="#">KURUMSAL</a>
					     <ul><li class="has-child-menu"><a href="{{ route('aboutus') }}">Hakkımızda</a>
                            <ul class="thired-level"></ul></li><li class="has-child-menu"><a href={{ route('mission') }}>Misyonumuz</a>
                            <ul class="thired-level"></ul></li><li class="has-child-menu"><a href="{{ route('vision') }}">Vizyonumuz</a>
                            <ul class="thired-level"></ul></li><li class="has-child-menu"><a href="{{ route('comment') }}">Müşteri Yorumları</a>
                            <ul class="thired-level"></ul></li></ul></li><li class=""><a href="{{ route('menuler') }}">MENÜLERİMİZ</a>
					     <ul></ul></li><li class=""><a href="{{ route('reservationShow') }}">REZERVASYON</a>
					     <ul></ul></li><li class=""><a href="#">MULTİ MEDYA</a>
					     <ul><li class="has-child-menu"><a href="{{ route('imageGalery') }}">RESİM GALERİSİ</a>
                            <ul class="thired-level"></ul></li><li class="has-child-menu"><a href={{ route('videoGalery') }}>VİDEO GALERİSİ</a>
                            <ul class="thired-level"></ul></li></ul></li><li class=""><a href="{{ route('contactShow') }}">İLETİŞİM</a>
					     <ul><li class="has-child-menu"><a href="{{ route('contactShow') }}">İletişim Bilgileri</a><ul class="thired-level"></ul></li><li class="has-child-menu"><a href="{{ route('hrShow') }}">İnsan Kaynakları</a>
                            <ul class="thired-level"></ul></li></ul></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">



                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                               <nav id="dropdown">


                                    <a href='index.html' class='logo-mobile-menu new-style'>
<img alt="" src="upload/manset/logo_2.png" style="max-height:50px;"  />




</a>


 <ul>

<li>
					<a href="{{route('anasayfa')}}">ANA SAYFA</a>
					     <ul></ul></li><li>
					<a href="#">KURUMSAL</a>
					     <ul><li class="has-child-menu">
					<a href="{{ route('aboutus') }}">Hakkımızda</a>
                            <ul class="thired-level"></ul></li><li class="has-child-menu">
					<a href="{{ route('mission') }}">Misyonumuz</a>
                            <ul class="thired-level"></ul></li><li class="has-child-menu">
					<a href="{{ route('vision') }}">Vizyonumuz</a>
                            <ul class="thired-level"></ul></li><li class="has-child-menu">
					<a href="{{ route('comment') }}">Müşteri Yorumları</a>
                            <ul class="thired-level"></ul></li></ul></li><li>
					<a href="{{ route('menuler') }}">MENÜLERİMİZ</a>
					     <ul></ul></li><li>
					<a href="{{ route('reservationShow') }}">REZERVASYON</a>
					     <ul></ul></li><li>
					<a href="#">MULTİ MEDYA</a>
					     <ul><li class="has-child-menu">
					<a href="{{ route('imageGalery') }}>RESİM GALERİSİ</a>
                            <ul class="thired-level"></ul></li><li class="has-child-menu">
					<a href="{{ route('videoGalery') }}">VİDEO GALERİSİ</a>
                            <ul class="thired-level"></ul></li></ul></li><li>
					<a href="iletisim.html">İLETİŞİM</a>
					     <ul><li class="has-child-menu">
					<a href="{{ route('contactShow') }}">İletişim Bilgileri</a>
                            <ul class="thired-level"></ul></li><li class="has-child-menu">
					<a href="{{ route('hrShow') }}">İnsan Kaynakları</a>
                            <ul class="thired-level"></ul></li></ul></li>

 </ul>




			   </nav>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- Mobile Menu Area End -->



            </header>
            <!-- Header Area End Here -->
@yield('body')

<footer>

    <div class="footer-area-top section-space">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="footer-box">
                                        <h3 class="title-bar-footer">İLETİŞİM BİLGİLERİ</h3>
            <div class="footer-about">
                <ul class="list-inline mt-5">
                  <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray">{{ $contact->telefon1 }}</a> </li>
                   <li class="m-0 pl-10 pr-10"> <i class="fa fa-tablet text-theme-colored mr-5"></i> <a class="text-gray">{{ $contact->telefon2 }}</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray">{{ $contact->web_adres }}</a> </li>
                  <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray">{{ $contact->mail }}</a> </li>
                </ul>
            </div>
                <ul class="footer-social">
                    <li><a href="{{ $contact->facebook }}" ><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $contact->twitter }}" ><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $contact->youtube }}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $contact->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

        </div>


        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="footer-box">
                <h3 class="title-bar-footer">Sms Kampanyaları</h3>


                <div class="footer-blog-post">
Gelişmelerden haberdar olmak için Cep Numaranız İle kayıt olabilirsiniz.
                </div>
                 <div class="footer-blog-post">
                      <font color="#FFFFFF"><b><div id="sonuc"></div></b></font>
    <font color="#FFFFFF"><b><div id="sonuc2"></div></b></font>
        <form action="" method="get" class="newsletter-form mt-20"  id="hesapform">
          <div class="input-group">
            <input type="Gsm" value="" name="Gsm" placeholder="Cep Numaranız" class="form-control input-lg" data-height="42px" style="height: 42px;">
            <span class="input-group-btn">
              <input  type="hidden" name="sonuc" id="sonuc" value="Cep Numaranız kaydedilmiştir.Teşekkürler">
                <input  type="hidden" name="sonuc2" id="sonuc2" value="Daha önce kayıt olmuşsunuz.">
            <input  type="hidden" name="isim" id="isim" value="0">
              <button data-height="45px" class="btn btn-default text-uppercase mt-0 mt-sm-10 pt-10 pb-10" type="submit">Gönder</button>
            </span>
          </div>
        </form>

                </div>

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="footer-box">
                <h3 class="title-bar-footer">Çalışma Saatleri</h3>
                <ul class="opening-schedule">
                    <li> Hafta İçi<span> {{ date('H:i', strtotime($workTime->haftaici_baslangic)) }} - {{date('H:i', strtotime( $workTime->haftaici_bitis ))}}</span></li>
                    <li>Cumartesi <span> {{date('H:i', strtotime( $workTime->cumartesi_baslangic)) }} -{{date('H:i', strtotime( $workTime->cumartesi_bitis)) }}</span></li>
                    <li>Pazar <span> {{ date('H:i', strtotime($workTime->pazar_baslangic)) }}- {{ date('H:i', strtotime($workTime->pazar_bitis)) }}</span></li>
                </ul>
            </div>

        </div>
    </div>
</div>
</div>





<div class="footer-area-bottom">
<div class="container">
    <p>Copyright ©2021  <a href="#">Marka Press</a> mTüm Hakları Saklıdır.</p>
</div>
</div>
</footer>
<!-- Footer Area End Here -->

<!-- Preloader End Here -->
<!-- jquery-->
<script src="style/js/jquery-2.2.4.min.js" type="text/javascript"></script>

<!-- Plugins js -->
<script src="style/js/plugins.js" type="text/javascript"></script>

<!-- Bootstrap js -->
<script src="style/js/bootstrap.min.js" type="text/javascript"></script>

<!-- WOW JS -->
<script src="style/js/wow.min.js"></script>
<script src="style/Magnific-Popup/jquery.magnific-popup.min.js"></script>
<!-- Nivo slider js -->
<script src="style/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="style/vendor/slider/home.js" type="text/javascript"></script>

<!-- Owl Cauosel JS -->
<script src="style/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>

<!-- Meanmenu Js -->
<script src="style/js/jquery.meanmenu.min.js" type="text/javascript"></script>

<!-- Srollup js -->
<script src="style/js/jquery.scrollUp.min.js" type="text/javascript"></script>

<!-- jquery.counterup js -->
<script src="style/js/jquery.counterup.min.js"></script>
<script src="style/js/waypoints.min.js"></script>

<!-- Date Time Picker Js -->
<script src="style/js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
<!-- Isotope js -->
<script src="style/js/isotope.pkgd.min.js" type="text/javascript"></script>

<!-- Switch js -->
<script src="style/js/switch-style.js" type="text/javascript"></script>
<!-- Validator js -->
<script src="style/js/validator.min.js" type="text/javascript"></script>

<!-- Custom Js -->
<script src="style/js/main.js" type="text/javascript"></script>

</div>
<!-- Preloader Start Here -->
</body>

</html>
