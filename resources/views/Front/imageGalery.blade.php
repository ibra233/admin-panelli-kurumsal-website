@extends('Front.thema.thema')

@section('body')
    <link rel="stylesheet" href="style/Magnific-Popup/magnific-popup.css" />
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="pagination-area">
                <h2>Resim Galerisi</h2>
                <ul>
                    <li><a href="index.html">Ana Sayfa</a> ></li>
                    <li class="active">Resim Galerisi</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="food-menu2-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                </div>
            </div>

            @foreach ($query as $item)


            <div class="row featuredContainer">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 item image-popup-list lunch drinks">
                    <div class="food-menu2-box">

                        <a href="/images/{{ $item->resim }}"><img class="img-responsive"
                                src="/images/{{ $item->resim }}" alt="dish"></a>


                    </div>
                </div>

                @endforeach


            </div>
            {!! $query->links() !!}

        </div>

    </div>
    </div>
    </div>
@endsection
