@extends('layouts/main')

@section('container')
<td width='911px' height='500px'>
<h1>single categor</h1>
@foreach($models as $data)
<a href=""><h2>{{$data->title}}</h2></a>
@endforeach
</td>
@endsection
<!-- <style>
    td{
        float:right;
    }
    a{
        text-decoration:none;
    }
</style> -->