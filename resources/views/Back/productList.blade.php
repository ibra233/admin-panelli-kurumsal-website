@extends('Back.thema.adminThema')
@section('title','Kategori ekle')

@section('body')

<div class="card-body">

    @if(Session::get('Succes'))
    <div class="alert alert-success">
        <p>{{ Session::get('Succes') }} </p>
        </div>
 @endif
    @if ($query==null)
    <div class="alert alert-danger">
        <p>Hiç ürün yok </p>
        </div>
        @else
        <table class="table table-image">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Ürün Adı</th>
                <th>Ürün Açıklaması</th>
                <th>Fiyatı</th>
                <th>Kategorisi</th>
                <th>Resmi</th>
                <th style="width: 130px"> İşlem</th>

              </tr>
            </thead>
            <tbody>

        @foreach ($query as  $firstValue => $item )


              <tr>
                <td class="align-middle">{{$loop->iteration}}</td>
                <td class="align-middle first{{$item->urun_id}}">{{$item->urun_ad}}</td>
                <td class="align-middle second{{$item->urun_id}}">{{$item->urun_aciklama}}</td>
                <td class="align-middle third{{$item->urun_id}}">
                    {{$item->urun_fiyat}} ₺
                </td>
                <td id="{{$item->kategori}}" class="align-middle fourth{{$item->urun_id}}">{{$item->kategori_ad}}</td>
                <td class=" p-3">
                  <img style="width: 65px;" src="/images/{{ $item->resim }}" class="img-fluid img-thumbnail fifth{{$item->urun_id}}" alt="Sheep">
              </td>
                <td class="align-middle">
                    <a href="" class="btn btn-icon btn-outline-info btn-sm">
                      <i class="fas fa-eye"></i>
                    </a>

                <button type="button" id="{{$item->urun_id}}" class="btn btn-icon btn-outline-info btn-sm jsSelector" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                            <i class="fas fa-edit"></i>
                    </button>


                    <button id="{{$item->urun_id}}" type="button" class="btn btn-icon btn-outline-info btn-sm jsevent" data-toggle="modal" data-target="#exampleModalCenter">

                      <i class="fas fa-trash"></i>

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
<!-- Modal Confirm -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Silme Onayı</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Bu ürünü gerçekten silmek istiyor musunuz ? Bu işlem geri alınamaz.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
          <a id="deleteButon" href=""> <button type="button" class="btn btn-primary"> Sil </button><a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Form -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ürün Düzenle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" enctype="multipart/form-data" id="updateForm">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Ürün Ad:</label>
              <input type="text" class="form-control first" id="recipient-name" name="name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Ürün Açıklama:</label>
              <input class="form-control second" id="message-text" name="description">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Ürün Fiyat:</label>
                <input type="number" class="form-control third" id="message-text" name="preise"></textarea>
              </div>

              <select class="form-control select2" style="width: 100%;" name="category">

                @if ($data==null)
                  @else
                  @foreach ($data as $item )
                  <option class="options" id="" value="{{$item->kategori_id}}">{{$item->kategori_ad}}</option>
                  @endforeach
                @endif
            </select>

            <div class="form-group">

              <label for="exampleInputFile">Resim</label>
              <div class="input-group">
                <img style="width: 65px;" src="" class="img-fluid img-thumbnail fourth" alt="Sheep">
                <div class="custom-file">

                  <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                  <label class="custom-file-label" for="exampleInputFile">Dosya Seçiniz</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Yükle</span>
                </div>
              </div>
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
      let button=document.querySelectorAll('.jsevent');
button.forEach(x=>{

    x.addEventListener('click',function(){

        let id= this.getAttribute('id');

document.querySelector('#deleteButon').setAttribute('href',`http://pastaneprojesi/admin/deleteList/${id}`);

    })
})



      </script>
      <!-- Edit js -->
       <script>
        let buttona=document.querySelectorAll('.jsSelector');
        buttona.forEach(item=>{

          item.addEventListener('click',function(){

            let iduni= this.getAttribute('id');
         console.log(".first"+iduni);
            let name,description,preise,category,image;
            console.log(this);
            name=document.querySelector(".first"+iduni).innerHTML;
            description=document.querySelector(".second"+iduni).innerHTML;
            preise=document.querySelector(".third"+iduni).innerHTML;
           // category=document.querySelector(".fourth"+iduni).innerHTML;
            image=document.querySelector(".fifth"+iduni).innerHTML;
            preise=parseFloat( preise.substring(0, preise.length - 1));

 category = document.querySelector(".fourth" + iduni).getAttribute('id');
 image = document.querySelector(".fifth" + iduni).getAttribute('src');

 document.querySelector('.first').setAttribute('value', name);
 document.querySelector('.second').setAttribute('value', description);
 document.querySelector('.third').setAttribute('value', preise);
 document.querySelector('.fourth').setAttribute('src', image);
 console.log(category);
 var x, i;
 x = document.querySelectorAll(".options");
 for (i = 0; i < x.length; i++) {

   if(x[i].getAttribute('value')==category)
   {

     x[i].setAttribute('selected','');
   }

 }
 document.querySelector('#updateForm').setAttribute('action',`http://pastaneprojesi/admin/updateProduct/${iduni}`);

         });

        } );

        </script>
@endsection
