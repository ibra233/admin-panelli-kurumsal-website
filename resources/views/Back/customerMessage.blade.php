@extends('Back.thema.adminThema')
@section('title','Mesajlar')

@section('body')
<table class="table table-image">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Ad Soyad</th>
            <th>Telefon </th>
            <th>E-Mail</th>
            <th>Konu</th>
            <th>Mesaj</th>


        </tr>
    </thead>
    <tbody>

        @foreach ($query as  $item)


            <tr>
                <td class="align-middle">{{ $item->id }}</td>
                <td class="align-middle">{{ $item->adsoyad }}</td>
                <td class="align-middle ">{{ $item->telefon }}</td>
                <td class="align-middle "> {{ $item->email }} </td>
                <td class="align-middle "> {{ $item->konu }} </td>
                <td class="align-middle "> {{ $item->mesaj }} </td>


            </tr>

        @endforeach
    </tbody>
</table>
</div>
{!! $query->links() !!}

@endsection


