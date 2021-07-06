@extends('Front.thema.thema')

@section('body')
<link rel="stylesheet" href="style/Magnific-Popup/magnific-popup.css" />    <!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Video Galerisi</h2>
            <ul>
                <li><a href="index.html">Ana Sayfa</a> > </li>
    <li><a href="videolar.html">Video Galerisi</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="food-menu2-area">
    <div class="container" id="inner-isotope">

        @foreach ($query as $item )

        @endforeach
        <div class="row featuredContainer">

<div class="col-md-4 item image-popup-list">
<div class="fluid-video-wrapper">
<a class="btn btn-default popup-youtube" href="/images/{{ $item->video }}"><img src="/images/{{ $item->videoresmi}}" class="img-responsive" alt="" /></a>
<h4 class="heading-title"><center>Web Sitesi Demo Video</center></h4></div>
</div>


        </div>
    </div>
</div>
@endsection
