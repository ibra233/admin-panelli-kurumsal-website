@extends('Back.thema.adminThema')
@section('title', 'Anasayfa')

@section('body')
    @if (Session::get('Succes'))
        <div class="alert alert-success">
            <p>{{ Session::get('Succes') }} </p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-4">
            <!-- Form Element sizes -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Çalışma Saatleri</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('workTimeUpdate') }}" method="POST">
                        <div class="form-row justify-content-center">
                            @csrf
                            <div class="col-md-6"><label>Hafta içi başlangıç </label>
                                <input class="form-control form-control-lg" type="time"
                                    value="{{ date('H:i', strtotime($query->haftaici_baslangic)) }}"
                                    name="haftaici_baslangic">
                            </div>
                            <div class="col-md-6"><label>Hafta içi bitiş </label>
                                <input class="form-control form-control-lg" type="time"
                                    value="{{ date('H:i', strtotime($query->haftaici_bitis)) }}" name="haftaici_bitis">
                            </div>
                            <div class="col-md-6"><label>Cumartesi başlangıç </label>
                                <input class="form-control form-control-lg" type="time"
                                    value="{{ date('H:i', strtotime($query->cumartesi_baslangic)) }}"
                                    name="cumartesi_baslangic">
                            </div>
                            <div class="col-md-6"><label>Cumartesi bitiş </label>
                                <input class="form-control form-control-lg" type="time"
                                    value="{{ date('H:i', strtotime($query->cumartesi_bitis)) }}" name="cumartesi_bitis">
                            </div>
                            <div class="col-md-6"><label>Pazar başlangıç </label>
                                <input class="form-control form-control-lg" type="time"
                                    value="{{ date('H:i', strtotime($query->pazar_baslangic)) }}" name="pazar_baslangic">
                            </div>
                            <div class="col-md-6"><label>Pazar bitiş </label>
                                <input class="form-control form-control-lg" type="time"
                                    value="{{ date('H:i', strtotime($query->pazar_bitis)) }}" name="pazar_bitis">
                            </div>
                            <button type="submit" class="btn btn-primary mt-1">Çalışma Saatlerini Güncelle </button>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-4">
            <!-- Form Element sizes -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">İletişim Bilgileri</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('contactUpdate') }}" method="POST">
                        <div class="form-row justify-content-center">
                            @csrf
                            <label>Telefon 1 </label>
                            <input class="form-control form-control-lg" type="text"
                                value="{{ $queryContact->telefon1 }}"
                                name="telefon1">
                            <label>Telefon 2 </label>
                            <input class="form-control form-control-lg" type="text"
                                value="{{ $queryContact->telefon2 }}"
                                name="telefon2">

                            <label>Web Adres </label>
                            <input class="form-control form-control-lg" type="text"
                                value="{{ $queryContact->web_adres }}"
                                name="web_adres">
                            <label>E-mail Fax </label>
                            <input class="form-control form-control-lg" type="text"
                                value="{{ $queryContact->mail }}"
                                name="mail">
                                <label>Facebook </label>
                                <input class="form-control form-control-lg" type="text"
                                    value="{{ $queryContact->facebook }}"
                                    name="facebook">
                                    <label>Twitter </label>
                                    <input class="form-control form-control-lg" type="text"
                                        value="{{ $queryContact->twitter }}"
                                        name="twitter">
                                        <label>Youtube </label>
                                        <input class="form-control form-control-lg" type="text"
                                            value="{{ $queryContact->youtube }}"
                                            name="youtube">
                                            <label>Instagram </label>
                                        <input class="form-control form-control-lg" type="text"
                                            value="{{ $queryContact->instagram }}"
                                            name="instagram">


                            <button type="submit" class="btn btn-primary mt-1">İletişim Bilgilerini Güncelle </button>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>


@endsection
