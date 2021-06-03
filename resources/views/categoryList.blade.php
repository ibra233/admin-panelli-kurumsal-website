@extends('thema.adminThema')
@section('title','Kategori Liste')

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
                <th>Kategori Adı</th>
                <th>Kategori Açıklaması</th>
               
                <th style="width: 130px"> İşlem</th>
                
              </tr>
            </thead>
            <tbody>

        @foreach ($query as  $firstValue => $item )
   
           
              <tr>
                <td class="align-middle">{{$firstValue+1}}</td>
                <td class="align-middle first{{$item->kategori_id}}">{{$item->kategori_ad}}</td>
                <td class="align-middle second{{$item->kategori_id}}">{{$item->kategori_aciklama}}</td>
              
                <td class="align-middle">
                    <a href="" class="btn btn-icon btn-outline-info btn-sm"> 
                      <i class="fas fa-eye"></i>
                    </a>
                    
                <button type="button" id="{{$item->kategori_id}}" class="btn btn-icon btn-outline-info btn-sm jsSelector" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                            <i class="fas fa-edit"></i>
                    </button>
                      
                   
                    <button id="{{$item->kategori_id}}" type="button" class="btn btn-icon btn-outline-info btn-sm jsevent" data-toggle="modal" data-target="#exampleModalCenter">
                        
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
          <h5 class="modal-title" id="exampleModalLabel">Kategori Düzenle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" enctype="multipart/form-data" id="updateForm">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Kategori Ad:</label>
              <input type="text" class="form-control first" id="recipient-name" name="name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Kategori Açıklama:</label>
              <input class="form-control second" id="message-text" name="description">
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
      let button=document.querySelector('.jsevent');
      button.addEventListener('click',function(){
         let id= this.getAttribute('id');
         
 document.querySelector('#deleteButon').setAttribute('href',`http://pastaneprojesi/deleteCategory/${id}`);
      });
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
           

 
 document.querySelector('.first').setAttribute('value', name);
 document.querySelector('.second').setAttribute('value', description);
 

 document.querySelector('#updateForm').setAttribute('action',`http://pastaneprojesi/updateCategory/${iduni}`);
 
         });

        } );

        </script>
@endsection