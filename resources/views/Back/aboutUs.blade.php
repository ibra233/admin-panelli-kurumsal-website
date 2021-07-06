@extends('Back.thema.adminThema')
@section('title', 'Hakkımızda')

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


    <div class="page-header text-center m-3">
        <h1>Hakkımızda Güncelleme</h1>
    </div>

    <div class="row justify-content-center">
        <form action="{{ route('updateAboutUs') }}" method="post" enctype="multipart/form-data">
            @csrf
            <table class='table table-hover table-responsive table-bordered'>

                <tr>
                    <td>Resim</td>
                    <td><img class="pull-left mr-15 thumbnail" src="/images/{{ $query->resim }}" style="max-width:300px;"
                            alt="Hakkımızda"> <input type="file" name="resim" /></td>
                </tr>
                <tr>
                    <td>Paragraf 1</td>
                    <td><textarea name='paragraf1' class='form-control'>{{ $query->paragraf1 }}</textarea></td>
                </tr>
                <tr>
                    <td>Paragraf 2</td>
                    <td><textarea name='paragraf2' class='form-control'>{{ $query->paragraf2 }}</textarea></td>
                </tr>

                <tr>
                    <td>Paragraf 3</td>
                    <td><textarea name='paragraf3' class='form-control'>{{ $query->paragraf3 }}</textarea></td>
                </tr>


                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class='btn btn-primary'><span class="glyphicon glyphiconok"></span>
                            Kaydet</button>

                    </td>
                </tr>
            </table>
        </form>
    </div>




@endsection
