@extends('Back.thema.adminThema')
@section('title', 'Kullanıcı ekle')

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
                <h3 class="card-title">Kullanıcı Ekle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form method="post" action="{{route('addUser')}}"  >
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kullanıcı Adı Giriniz" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kullanıcı E-mail</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kullanıcı E-mail Giriniz" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kullanıcı Şifre</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kullanıcı Şifre Giriniz" name="password">
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
@endsection