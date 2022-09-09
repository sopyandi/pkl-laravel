@extends('layouts/main')

@section('container')
<td width='911px' height='500px'>
<h1>Halaman User Data</h1>
@foreach($models as $data)
<ul>
    <li>
        <a href=""><h4>{{$data->name}}</h4></a>
    </li>
</ul>
@endforeach
</td>
@endsection