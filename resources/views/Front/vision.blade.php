@extends('Front.thema.thema')

@section('body')
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Kurumsal</h2>
            <ul>
 <li><a href="index.html">Ana Sayfa</a> > </li>
    <li><a href="sayfa-vizyonumuz-52.html">Kurumsal</a> > </li>
    <li class="active">Vizyonumuz</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Single Recipe Area Start Here -->
<div class="single-recipe-area section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

<img class="pull-left mr-15 thumbnail" src="/images/{{ $query->resim }}" style="max-width:300px;" alt="Vizyonumuz">
<p>   <h4>Vizyonumuz</h4>
<p style="text-align: justify;">{{ $query->paragraf }} </p>
</p>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="rc-sidebar">

                    <div class="categories margin-bottom-sidebar">
                        <h2 class="title-sidebar title-bar-sidebar">Kurumsal</h2>
                        <ul>

                            <li><a href="{{ route('aboutus') }}"><i class="fa fa-chevron-right"
                                aria-hidden="true"></i>Hakkımızda</a></li>
<li><a href="{{ route('mission') }}"><i class="fa fa-chevron-right"
                                aria-hidden="true"></i>Misyonumuz</a></li>
<li><a href="{{ route('vision') }}"><i class="fa fa-chevron-right"
                                aria-hidden="true"></i><b>Vizyonumuz</b></a></li>


                        </ul>
                    </div>

                    <div class="categories margin-bottom-sidebar">
<h2 class="title-sidebar title-bar-sidebar">İLETİŞİM BİLGİLERİ</h2>
                        <ul>

            <ul>
                <li><i class="fa fa-phone"></i> <b>{{ $contact->telefon1 }}</b></li>
                <li><i class="fa fa-tablet"></i>  <b>{{ $contact->telefon2 }}</b></li>
                <li><i class="fa fa-print"></i>  <b>{{ $contact->web_adres }}</b></li>
                <li><i class="fa fa-envelope-o"></i>  <b>{{ $contact->mail }}</b></li>
            </ul>



                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
