@extends('layouts/main')

@section('container')
<td width='911px' height='500px'>
<h1>Halaman Category</h1>
@foreach($models as $data)
<ul>
    <li>
        <a href="/shortby_category/{{$data->slug}}"><h4>{{$data->nama}}</h4></a>
    </li>
</ul>
@endforeach
</td>
@endsection