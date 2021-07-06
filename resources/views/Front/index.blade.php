@extends('Front.thema.thema')

@section('body')
<!-- Slider 1 Area Start Here -->
            <div class="slider1-area">
                <div class="bend niceties preview-1">
                    <div id="ensign-nivoslider-3" class="slides">

					<img src="upload/manset/1.jpg" alt="" title="#slider-direction-1"/>

					<img src="upload/manset/2.jpg" alt="" title="#slider-direction-2"/>

                    </div>


                    <div id="slider-direction-1" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-1">
                            <div class="title-container s-tb-c">
                                <h1 class="title1">ELİT ve FERAH ORTAM</h1>
                                <p>Siz Ve Sevdiklerinizi İçin Elit ve Ferah Bir Ortam - Tüm Organizasyonalrınızda Yanınızdayız</p>
                                <div class="slider-btn-area">
                                    <a href="{{ route('imageGalery') }}" class="ghost-btn">Galerimizi İnceleyiniz</a>
                                </div>
                            </div>
                        </div>
                    </div>

					<div id="slider-direction-2" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-2">
                            <div class="title-container s-tb-c">
                                <h1 class="title1">Muhteşem Lezzetler</h1>
                                <p>70 Çeşitten Fazla Ürünümüz İle Sizlere Günlük Taze Lezzetler Sunuyoruz</p>
                                <div class="slider-btn-area">
                                    <a href="{{ route('menuler') }}" class="ghost-btn">Ürünlerimizi İnceleyeiniz</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Slider 1 Area End Here -->

               <!-- Table Reservation 2 Area Start Here -->
               <div class="table-reservation2-area">
                <div class="container">
                    <div class="table-reservation2-inner">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="table-reservation2-left wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="reservation-form2">
                                    <span>Etkinlikleriniz İçin</span>
                                    <h2>Özel Rezervasyon</h2>
                                    <ul id="validation">
                                    </ul>
                                     <form  action="" method="" id="rezervasyon">
                                        <div class="reservation-input-box">
                                            <input type="text" class="form-control" placeholder="Adınız Soyadınız" name="adsoyad" id="adsoyad" data-error="Zorunlu Alan" required />
                                        </div>
                                        <div class="reservation-input-box">
                                            <input type="text" class="form-control" placeholder="E-Mail" name="eposta" id="eposta" data-error="Zorunlu Alan" required/>
                                        </div>
                                        <div class="reservation-input-box">
                                            <input type="text" class="form-control" placeholder="Telefon " name="telefon" id="telefon" data-error="Zorunlu Alan" required/>
                                        </div>
                                        <div class="reservation-input-box">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <input type="text" class="form-control rt-date" placeholder="Rezervasyon Tarihi" name="gun" id="gun" data-error="Zorunlu Alan" required/>
                                        </div>
                                        <div class="reservation-input-box">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <input type="text" class="form-control rt-time" placeholder="Rezervasyon Saati" name="saat" id="saat" data-error="Zorunlu Alan" required/>
                                        </div>
                                         <div class="reservation-input-box">
                                            <textarea class="form-control" placeholder="Mesajınız" name="mesaj" rows="2" id="mesaj" data-error="Zorunlu Alan" required></textarea>
                                        </div>

                                        <button type="" class="book-now-btn">Rezervasyonu Tamamla</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 wow fadeInLeft">
                             <div class="table-reservation2-right" style="text-align:justify;">
							 <!-- Section: Services -->
									<h2>Hakkımızda</h2>
													   <p>{{ $query->paragraf1 }}</p>
                           <a href="{{ route('aboutus') }}" class="ghost-color-btn">Devamı<i class="fa fa-chevron-right" aria-hidden="true"></i></a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table Reservation 2 Area End Here -->
             <!-- Food Menu 2 Area Start Here -->
             <div class="food-menu2-area special-dish-area">
                <div class="container" id="inner-isotope">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title">Ürün Gruplarımız</h2>
                        </div>
                    </div>
                    <div class="row featuredContainer">
                        @foreach ($categories as $item)


                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href=""><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href=""><img class="img-responsive" src="images/{{$item->resim}}" alt=""></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <h3><a href="">{{$item->kategori_ad}}</a></h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                </div>

            </div>
            <!-- Food Menu 2 Area End Here -->
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    let button=document.querySelector('.book-now-btn');
button.addEventListener('click',(e)=>{
    e.preventDefault();
    let form=$('#rezervasyon').serialize();

    $.ajax({
        type: "post",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        url: "{{route('reservation') }}",
        data: form,
        success: function (response) {
if(response=="succes"){
    document.querySelector('#validation').innerHTML='';

    swal({
  title: "Rezervasyonuz iletildi!",
  text: "Rezervasyon hakkında e-mail ile geri dönüş sağlanacaktır!",
  icon: "success",
  button: "Kapat",
});
}else{
    swal("Rezervasyon iletilemedi!", "Rezervasyon için restorantla görüşünüz", "error");
}
        },error: function (err){
            if (err.status==422){
                document.querySelector('#validation').innerHTML='';
              var validation=err.responseJSON.errors;
              Object.keys(validation).forEach(key => {
  console.log(key, validation[key]);
  document.querySelector('#validation').innerHTML+=`<li> ${validation[key]} </li>`
});


            }
        }
    });
});

    </script>
@endsection
