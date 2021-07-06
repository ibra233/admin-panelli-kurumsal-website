@extends('Back.thema.adminThema')
@section('title','Onaylanmış rezervasyonlar')
@section('body')
<div class="card-body">

    @if(Session::get('succes'))
    <div class="alert alert-success">
        <p>{{Session::get('succes')}} </p>
        </div>
    @endif
    @isset($fail)
    <div class="alert alert-danger">
        <p>{{$fail}} </p>
        </div>
    @endisset
    @if ($query==null)
    <div class="alert alert-danger">
        <p>Hiç ürün yok </p>
        </div>
        @else
        <table class="table table-image">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Ad Soyad</th>
                <th>E-mail</th>
                <th>Telefon No</th>
                <th>Rezervasyon Tarih</th>
                <th>Mesaj</th>


              </tr>
            </thead>
            <tbody>

        @foreach ($query as  $firstValue => $item )


              <tr>
                <td class="align-middle">{{$firstValue+1}}</td>
                <td class="align-middle first">{{$item->ad_soyad}}</td>
                <td class="align-middle second">{{$item->email}}</td>
                <td class="align-middle third">
                    {{$item->telefon_no}}
                </td>
                <td class="align-middle fourth">{{$item->rezervasyon_tarih}}</td>
                <td class=" align-middle">
                    {{$item->mesaj}}

              </td>

              </tr>

        @endforeach
    </tbody>
</table>
</div>
{!! $query->links() !!}
<nav aria-label="...">

</nav>
    @endif

</div>


@endsection
