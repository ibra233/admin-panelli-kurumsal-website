@extends('Back.thema.adminThema')
@section('title', 'İş başvuruları')

@section('body')
    <table class="table table-image">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Ad Soyad</th>
                <th>Telefon </th>
                <th>E-Mail</th>
                <th>Cv</th>


            </tr>
        </thead>
        <tbody>

            @foreach ($query as  $item)


                <tr>
                    <td class="align-middle">{{ $item->id }}</td>
                    <td class="align-middle">{{ $item->adsoyad }}</td>
                    <td class="align-middle ">{{ $item->telefon }}</td>
                    <td class="align-middle "> {{ $item->email }} </td>
                    <td id="" class="align-middle"> <a href="/images/{{ $item->cv }}" download><i class="fas fa-file-download"></i> </a></td>


                </tr>

            @endforeach
        </tbody>
    </table>
    </div>
    {!! $query->links() !!}
@endsection
