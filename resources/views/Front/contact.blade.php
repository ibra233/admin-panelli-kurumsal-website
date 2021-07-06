@extends('Front.thema.thema')

@section('body')
  <!-- Inner Page Banner Area Start Here -->
  <div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>İLETİŞİM BİLGİLERİ</h2>
            <ul>
                 <li><a href="index.html">Ana Sayfa</a></li>
    <li><a href="iletisim.html">İLETİŞİM BİLGİLERİ</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Contact Us Page Area Start Here -->
<div class="contact-us-page-area section-space-bottom">
    <div class="google-map-area">
        <div style="width:100%; height:420px;">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.4167778348074!2d27.898535815072865!3d39.64033387946301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b7004204a56ed5%3A0xe084731d0edbb654!2sG%C3%BCl+Pastanesi!5e0!3m2!1str!2str!4v1529671085278" width="100%" height="420" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="contact-us-left">
                    <h2 class="title-bar-medium-left inner-sub-title">İLETİŞİM BİLGİLERİ</h2>
                    <ul>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3>Telefon </h3>
     <p class="text-gray"> <a href="tel:{{ $contact->telefon1 }}">{{ $contact->telefon1 }} </a></p>
     <p class="text-gray"><a href="tel:{{ $contact->telefon2 }}">{{ $contact->telefon2 }}</a></p>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Web Adres</h3>
                            <a href="{{ $contact->facebook }}">{{ $contact->web_adres }}</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h3>E-Mail/Fax</h3>
                            <p><a href="mailto:{{ $contact->mail }}">{{ $contact->mail }}</a></p>

                        </li>
                        <li>
                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                            <h3>Sosyal Medya</h3>
                            <ul class="contact-social">
                             <li><a href="{{  $contact->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{ $contact->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="{{ $contact->youtube }}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="{{ $contact->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="contact-us-right">
                    <h2 class="title-bar-medium-left inner-sub-title">Sİzde Yazın</h2>
                    @if (Session::get('success'))
                    <p>
                    <h4 style="color:red;">{{ Session::get('success') }}</h4>
                    </p>

                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                    <div class="contact-form">
                    <form action="{{ route('customerMessage') }}" method="POST">
                        @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                     <input class="form-control" type="text" name="adsoyad" placeholder="Adınız Soyadınız " required="required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                            <input  class="form-control required email" type="email" name="email" placeholder="E-Mail"  required="required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                     <div class="col-sm-12">
                                        <div class="form-group">
                                    <input class="form-control required" type="text" name="telefon" placeholder="Telefon " required="required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                                  <div class="col-sm-12">
                                        <div class="form-group">
                                  <input class="form-control" type="text" name="konu" placeholder="Konu" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Mesajınız" class="textarea form-control" name="mesaj" rows="7" cols="20"  required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                                   <div class="col-sm-12">
                                        <div class="form-group">
<div class="g-recaptcha" data-sitekey="6LdR5RYUAAAAAK1eSZdEhH6y_LWd3uSdeYJERjH9"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                        <div class="form-group margin-bottom-none">
                                               <input type="hidden" name="okundu" value="0" />
                                            <button type="submit" class="ghost-on-hover-btn">Gönder</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                        <div class='form-response'></div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
