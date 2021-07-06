@extends('Back.thema.adminThema')
@section('title', 'Anasayfa')

@section('body')
@if (Session::get('succes'))

        <div class="alert alert-primary">
            {{ Session::get('succes') }}
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
<form action="{{ route('imageGaleryAdd') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">

      <div class="col-md-6">
        <label for="exampleInputFile">Resim Ekle</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="resim">
            <label class="custom-file-label" for="exampleInputFile">Resim Seçiniz</label>
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Ekle</button>
          </div>
        </div>
      </div>

    </div>
    <!-- /.card-body -->


  </form>
  <div class="row" >
@foreach ($query as $item )
<div class="card mr-5 resimsil" style="width: 18rem;">
  <a href="{{ route('deleteImageGalery',$item->id) }}">  <i class="fas fa-trash ikonsil"></i> </a>
    <img class="card-img-top" alt="Resmi Sil" src="/images/{{ $item->resim }}" alt="Card image cap">

  </div>
@endforeach
  </div>
@endsection
