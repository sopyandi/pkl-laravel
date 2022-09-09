@extends('layouts/main')

@section('container')
<td width='911px' height='500px'>
<h1>Halaman User Data</h1>
@foreach($models as $data)
<h4>{{$no++}} <a href=""> .{{$data->name}}</a></h4>
@endforeach
</td>
@endsection