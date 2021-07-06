@extends('Front.thema.thema')

@section('body')
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="pagination-area">
                <h2>İnsan Kaynakları</h2>
                <ul>
                    <li><a href="index-2.html">Ana Sayfa</a> > </li>
                    <li class="active">İnsan Kaynakları</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Contact Us Page Area Start Here -->
    <div class="contact-us-page-area section-space">

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
                                <p>{{ $contact->web_adres }}</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <h3>E-Mail/Fax</h3>
                                <p><a href="mailto:bilgi@restorant.com">{{ $contact->mail }}</a></p>

                            </li>
                            <li>
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                <h3>Sosyal Medya</h3>
                                <ul class="contact-social">
                                    <li><a href="{{ $contact->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="{{ $contact->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="{{ $contact->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="{{ $contact->instagram }}"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="contact-us-right">
                        <h2 class="title-bar-medium-left inner-sub-title">İş Başvurusu Formu</h2>
                        @if (Session::get('success'))
                            <p>
                            <h4 style="color:red;">İş Başvurunuz Başarıyla Gönderilmiştir Size En Kısa Sürede Geri
                                Dönülecektir. Teşekkürler</h4>
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
                            <form action="{{ route('jobApplication') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="adsoyad" placeholder="Adınız Soyadınız..."
                                                    class="form-control" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="telefon" placeholder="Telefon ..."
                                                    class="form-control" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="E-Mail..."
                                                    class="form-control" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Cv Yükle (Pdf, Doc, Xls Formatlarında Cv Yükleyiniz)</label><br />
                                                <input name="cv" type="file" id="image1" class="form-control"
                                                    required="required">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="g-recaptcha"
                                                    data-sitekey="6LdR5RYUAAAAAK1eSZdEhH6y_LWd3uSdeYJERjH9"></div>
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
