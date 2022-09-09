@extends('layouts/main')

@section('container')
<td width='911px' height='500px'>
<h1>Halaman BLog</h1>
@foreach($models as $data)
<article>
<a href=""><h1>{{$data->title}}</h1></a>
<h4>Publisher : <a href="">{{$data->user->name}}</a></h4>
<h5> Category Berita :<a href="/shortby_category/{{$data->category->slug}}">{{$data->category->nama}}</a></h5>
<p>{{$data->exerp}}</p>
</article>
@endforeach
</td>
@endsection
<style>
    article{
    transition: .7s ease; 
    }
    article{
        border-bottom:1px solid black;
        margin-bottom:10px;
    }
    article:hover{
    background-color:rgba(0, 0, 0, 0.144);
    transition: .7s ease;
    }
</style>