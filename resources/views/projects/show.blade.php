@extends('layout')
@section('title', 'Portfolio')
@section('contenido')

<h1>{{$projects->title}}</h1>
<h1>{{$projects->description}}</h1>
<h1>{{$projects->created_at}}</h1>
<h1></h1>


@endsection