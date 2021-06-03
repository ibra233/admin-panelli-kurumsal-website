@extends('thema.adminThema')
@section('title','Kategori ekle')

@section('body')

<div class="card-body">
  
    @isset($succes)
    <div class="alert alert-success">
        <p>{{$succes}} </p>
        </div>  
    @endisset
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
                <td class="align-middle">{{$firstValue+1}}</td>
                <td class="align-middle first{{$item->urun_id}}">{{$item->urun_ad}}</td>
                <td class="align-middle second{{$item->urun_id}}">{{$item->urun_aciklama}}</td>
                <td class="align-middle third{{$item->urun_id}}">
                    {{$item->urun_fiyat}} ₺
                </td>
                <td class="align-middle fourth{{$item->urun_id}}">{{$item->kategori}}</td>
                <td class=" p-3">
                  <img style="width: 65px;" src="images/{{$item->resim}}" class="img-fluid img-thumbnail fifth{{$item->urun_id}}" alt="Sheep">
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
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Ürün Ad:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Ürün Açıklama:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Ürün Fiyat:</label>
                <input type="number" class="form-control" id="message-text"></textarea>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Ürün Fiyat:</label>
                <input type="number" class="form-control" id="message-text"></textarea>
              </div>
              <select class="form-control select2" style="width: 100%;" name="category">
                   
                @if ($data==null)
                  @else
                  @foreach ($data as $item )
                  <option value="{{$item->kategori_id}}">{{$item->kategori_ad}}</option>
                  @endforeach
                @endif
            </select>
            <img style="width: 65px;" src="" class="img-fluid img-thumbnail" alt="Sheep">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
          <button type="button" class="btn btn-primary">Değişiklikleri Kaydet</button>
        </div>
      </div>
    </div>
  </div>
  <script>
      let button=document.querySelector('.jsevent');
      button.addEventListener('click',function(){
         let id= this.getAttribute('id');
         
 document.querySelector('#deleteButon').setAttribute('href',`http://pastaneprojesi/deleteList/${id}`);
      });
      </script>
      <!-- Edit js -->
       <script>
        let buttona=document.querySelector('.jsSelector');
        buttona.addEventListener('click',function(){
            
           let iduni= this.getAttribute('id');
        console.log(".first"+iduni);
           let name,description,preise,category,image;
           
           name=document.querySelector(".first"+iduni).innerHTML;
           description=document.querySelector(".second"+iduni).innerHTML;
           preise=document.querySelector(".third"+iduni).innerHTML;
           category=document.querySelector(".fourth"+iduni).innerHTML;
           image=document.querySelector(".fifth"+iduni).innerHTML;
   
        });
        </script>
@endsection