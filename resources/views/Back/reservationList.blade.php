@extends('Back.thema.adminThema')
@section('title','Rezervasyon Listesi')

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
                <th style="width: 130px"> İşlem</th>

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
                <td class="align-middle">
                    <a href="{{route('reservationAccept',$item->rezervasyon_id ) }}" class="btn btn-icon btn-outline-info btn-sm">
                      <i class="fas fa-check primary"></i>
                    </a>

                <button id="{{ $item->rezervasyon_id }}" class="btn btn-icon btn-outline-info btn-sm jsSelector" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                  <i class="far fa-times-circle"></i>
                </button>



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

 <!-- Modal Form -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rezervasyon Ret</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" enctype="multipart/form-data" id="redForm">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Rezervasyon Reddetme Sebebiniz</label>
              <input type="text" class="form-control first" id="recipient-name" name="reason">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
          <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <script>
      let button=document.querySelectorAll('.jsSelector');
let form=document.querySelector('#redForm');
      button.forEach(item=>{

console.log(item);
          item.addEventListener('click',function(){
let id=this.getAttribute('id');
console.log(id);

form.setAttribute('action',`http://pastaneprojesi/reservationRejection/${id}`);



          });
      });
</script>
      <!-- Edit js -->

@endsection
