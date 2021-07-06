@extends('Front.thema.thema')

@section('body')
 <!-- Inner Page Banner Area Start Here -->
 <div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Menülerimiz</h2>
            <ul>
<li><a href="index-2.html">Ana Sayfa</a> > </li>
    <li><a href="urunler-1.html">Menülerimiz</a> > </li>
    <li class="active">Tümünü Görüntüle</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Food Menu 2 Area Start Here -->
<div class="food-menu2-area">
    <div class="container" id="inner-isotope">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="isotop-classes-tab myisotop">
                    <a href="#" data-filter="*" class="current">Tümü</a>
@foreach ($category as $item )
<a href="#" data-filter=".{{ $item->kategori_id }}">{{ $item->kategori_ad }}</a>
@endforeach




                </div>
            </div>
        </div>
        <div class="row featuredContainer">

            @foreach ($query as $menu )


        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 {{ $menu->kategori }} ">
                <div class="food-menu2-box">
                    <div class="food-menu2-img-holder">
                        <div class="food-menu2-more-holder">
                            <ul>
                                <li><a href=""><i class="fa fa-link" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <a href=""><img class="img-responsive" src="/images/{{ $menu->resim }}" alt=""></a>
                    </div>
                     <div class="food-menu2-title-holder">
                        <span>{{ $menu->urun_fiyat }} <i class="fa fa-try" aria-hidden="true"></i></span>
                        <h3><a href="">{{ $menu->urun_ad }}</a></h3>
                    </div>
                </div>
            </div>

@endforeach














        </div>
    </div>
</div>
@endsection
