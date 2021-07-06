@extends('Front.thema.thema')

@section('body')
<script src='../../../www.google.com/recaptcha/api.js'></script>     <!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Rezervasyon</h2>
            <ul>
                <li><a href="index.html">Ana Sayfa -</a> /</li>
                <li>Online Rezervasyon</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Table reservation3 Area Start Here -->
<div class="table-reservation3-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                <div class="table-reservation3-left">
                    <img class="img-responsive" src="style/css/color/img/rezervasyonarka.png" alt="client">
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="table-reservation3-right wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    <span>Etkinliklerinizi İçin</span>
                    <h2>Özel Rezervasyon</h2>
                    <div id="validation"> </div>
                    <div class="row reservation-form3">
                     <form   id="rezervasyon">
                            <div class="reservation-input-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                 <input type="text" class="form-control" placeholder="Adınız Soyadınız" name="adsoyad" id="adsoyad" data-error="Zorunlu Alan" required />
                            </div>
                            <div class="reservation-input-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" placeholder="E-Mail" name="eposta" id="eposta" data-error="Zorunlu Alan" required/>
                            </div>
                            <div class="reservation-input-box col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <input type="text" class="form-control" placeholder="Telefon " name="telefon" id="telefon" data-error="Zorunlu Alan" required/>
                            </div>
                            <div class="reservation-input-box col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input type="text" class="form-control rt-date" placeholder="Rezervasyon Tarihi" name="gun" id="gun" data-error="Zorunlu Alan" required/>
                            </div>
                            <div class="reservation-input-box col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <input type="text" class="form-control rt-time" placeholder="Rezervasyon Saati" name="saat" id="saat" data-error="Zorunlu Alan" required/>
                            </div>
                             <div class="reservation-input-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" placeholder="Mesajınız" name="mesaj" rows="2" id="mesaj" data-error="Zorunlu Alan"></textarea>
                            </div>

                                </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <input  type="hidden" value="Belirtilmedi" name ="kisi">
                            <button type="submit" class="book-now-btn">Rezervasyonu Tamamla</button>
                                <div class='form-response'></div>
                            </div>
                        </form>
                    </div>

                </div><br/>
            </div>
        </div>
    </div>
</div>
<!-- Table reservation3 Area Start Here -->
    </div>
</div>
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
