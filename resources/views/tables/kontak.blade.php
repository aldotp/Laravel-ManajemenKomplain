@extends('layouts.app')
@if(checkPermission(['admin']))
@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nomer Hp</th>
                <th scope="col">Nama</th>
                <th scope="col">Id Jenis Kontak</th>
                <th scope="col">Is Active</th>

                
            </tr>
        </thead>

        <tbody>
        @foreach($kontak as $value)
            <tr>
                
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->no_hp}}</td>
                <td>{{$value->nama}}</td>
                @foreach($idjeniskontak as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ url('/home') }}" class="btn bg-success my-3">Back</a>
    <a href="/kontak/create" class="btn btn-secondary">Insert</a>
</div>
@endsection
@endif
