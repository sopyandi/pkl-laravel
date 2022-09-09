@extends('layouts/main')

@section('container')
<td width='911px' height='500px'>
<h1>Halaman BLog</h1>
@foreach($models as $data)
<div class="wadah">
<article>
<a href=""><h1>{{$data->title}}</h1></a>
<h4>Publisher : <a href="">{{$data->user->name}}</a></h4>
<h5> Category Berita :<a href="/shortby_category/{{$data->category->slug}}">{{$data->category->nama}}</a></h5>
<p>{{$data->exerp}}</p>
</article>
</div>
@endforeach
</td>
@endsection
<style>
    article{
    margin-left:10px;
    transition: .7s ease; 
    }
    article{
        border-bottom:1px solid black;
        margin-bottom:1px;
    }
    .wadah:hover{
    background-color:rgba(0, 0, 0, 0.144);
    transition: .7s ease;
    }
</style>