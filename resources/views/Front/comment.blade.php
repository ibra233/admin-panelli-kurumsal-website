@extends('Front.thema.thema')

@section('body')
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="pagination-area">
                <h2>Müşterİ Yorumları</h2>
                <ul>
                    <li><a href="index-2.html">Ana Sayfa</a></li>
                    <li><a href="yorumlar-1.html">Müşterİ Yorumları</a></li>
                    <li class="active">Sİzde Yazın</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Food Menu 2 Area Start Here -->
    <div class="food-menu2-area">
        <div class="container">

            <div class="row featuredContainer">
                <h4>Müşterİ Yorumları ({{ $query->count() }})</h4>

                @foreach ($query as $item)


                    <img class="pull-left mr-15 thumbnail" src="style/css/color/img/yok.png" style="max-width:75px;"
                        alt="Samet Hınçlı">
                    <p>
                    <h5>{{ $item->adsoyad }}</h5>
                    <ul>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i><span> {{$item->created_at  }}</span></li>
                    </ul>
                    {{ $item->mesaj }}</p>
                    <hr />

                @endforeach





                <nav class="text-center">
                    <ul class="pagination m-t-30">
                        <li><a aria-label="Previous" href="yorumlar-1.html">|<i class="fa fa-angle-left"
                                    aria-hidden="true"></i></a></li>
                        <li><a aria-label="Previous" href="javascript:onClick=alert('İlk Sayfadasınız!')"><i
                                    class="fa fa-angle-left" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
                        <li class="active"><span>1</span></li>
                        <li><a aria-label="Next" href="javascript:onClick=alert('Son Sayfadasınız!')"> <i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li><a aria-label="Next" href="yorumlar-1.html"> <i class="fa fa-angle-right"
                                    aria-hidden="true"></i>|</a></li>
                    </ul>
                </nav>

                <hr class="hr m-t-50" />

                <h3 class="m-b-30">Sizde Yazın</h3>
                @if (Session::get('success'))
                    <p>
                    <h4 style="color:red;">Formunuz Başarıyla Gönderilmiştir. Teşekkürler</h4>
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
                <form action="{{ route('addComment') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required name="adsoyad"
                                    placeholder="Adınız Soyadınız" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="E-Mail" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea rows="6" class="form-control" required name="mesaj"
                                    placeholder="Mesajınız"></textarea>
                            </div>
                            <input name="telefon" type="hidden" value="0">
                            <input type="hidden" name="onay" value="0">
                            <button type="submit" class="ghost-on-hover-btn">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
