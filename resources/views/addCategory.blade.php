@extends('thema.adminThema')
@section('title','Kategori ekle')

@section('body')

@if (Session::get('succes'))
 
 <div class="alert alert-primary">
{{Session::get('succes')}}
</div>
@endif
@if (Session::get('fail'))
 
 <div class="alert alert-danger">
{{Session::get('fail')}}
</div>
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
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <!-- <div class="col-md-10 "> -->
          <div class="container ">
            <!-- general form elements -->
            <div class=" align-items-center">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kategori Ekle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form method="post" action="{{route('addCategory')}}" enctype="multipart/form-data" >
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Adı</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kategori Adı Giriniz" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori Açıklama</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kategori Açıklaması Giriniz" name="description">
                  </div>
                  
                  </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ekle</button>
                </div>
              </form>
              </div>
            </div>
            </div>
            </div>
            
            <!-- <script>
document.querySelector('.custom-file-input').addEventListener('change',function(e){
  var fileName = document.getElementById("exampleInputFile").files[0].name;
  var nextSibling = e.target.nextElementSibling
  nextSibling.innerText = fileName
});
            </script> -->

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
          $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endsection