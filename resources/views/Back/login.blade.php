<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <title>Document</title>

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>

</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       <!-- Horizontal Form -->


      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Giriş Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('doLogin')}}" method="POST">
                        @csrf
                      <div class="card-body">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Kullanıcı Adı</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Kullanıcı Adı" name="name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label" >Şifre</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Şifre" name="password">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2" name="remember">
                              <label class="form-check-label" for="exampleCheck2">Beni hatırla</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Giriş Yap</button>

                      </div>
                      <!-- /.card-footer -->
                    </form>
                  </div>
              </div>
          </div>
      </div>
</body>
</html>
