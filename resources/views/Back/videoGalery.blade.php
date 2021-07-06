@extends('Back.thema.adminThema')
@section('title', 'Vide Galerisi')

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
<form action="{{ route('videoGaleryAdd') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">

        <div class="row">
                <div class="col-md-6">
        <label for="exampleInputFile">Video Ekle</label>
        <div class="input-group">
          <div class="custom-file">

            <input type="file" class="custom-file-input" id="exampleInputFile" name="video">
            <label class="custom-file-label" for="exampleInputFile">Video Seçiniz</label>
          </div>


        </div>
      </div>
      <div class="col-md-6">
        <label for="exampleInputFile">Video Resmi Ekle</label>
        <div class="input-group">
          <div class="custom-file">

            <input type="file" class="custom-file-input" id="exampleInputFile" name="videoresim">
            <label class="custom-file-label" for="exampleInputFile">Video Resmi Seçiniz</label>
          </div>

          <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Ekle</button>
          </div>
        </form>
        </div>
      </div>
        </div>





    </div>
    <!-- /.card-body -->


  </form>
  <div class="row" >
@foreach ($query as $item )
<div class="card mr-5 resimsil" style="width: 18rem;">
  <a href="{{ route('deleteVideoGalery',$item->id) }}">  <i class="fas fa-trash ikonsil"></i> </a>

  <video class="card-img-top" alt="Video Sil"  controls>
    <source src="/images/{{ $item->video }}" type="video/mp4">
    <source src="/images/{{ $item->video }}" type="video/ogg">
  Your browser does not support the video tag.
  </video>


  </div>
@endforeach
  </div>


@endsection
