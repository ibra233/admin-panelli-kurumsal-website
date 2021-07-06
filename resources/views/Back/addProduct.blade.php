@extends('Back.thema.adminThema')
@section('title', 'Ürün ekle')

@section('body')

    @if (Session::get('succes'))

        <div class="alert alert-primary">
            {{ Session::get('succes') }}
        </div>
    @endif
    @if (Session::get('fail'))

        <div class="alert alert-danger">
            {{ Session::get('fail') }}
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
                            <h3 class="card-title">Ürün Ekle</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form method="post" action="{{ route('addProduct') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ürün Adı</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Ürün Adı Giriniz" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ürün Açıklama</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Ürün Açıklaması Giriniz" name="description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ürün fiyatı</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1"
                                        placeholder="Ürün Açıklaması Giriniz" name="price">
                                </div>
                                <div class="form-group">
                                    <label>Kategoriler</label>
                                    <select class="form-control select2" style="width: 100%;" name="category">

                                        @if ($data == null)


                                        @else
                                            @foreach ($data as $item)
                                                <option value="{{ $item->kategori_id }}">{{ $item->kategori_ad }}</option>
                                            @endforeach
                                        @endif



                                    </select>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Resim</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                                    name="image">
                                                <label class="custom-file-label" for="exampleInputFile">Dosya
                                                    Seçiniz</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Yükle</span>
                                            </div>
                                        </div>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });

        </script>

    @endsection
