@extends('layout')

@section('contenido')
    <h1>Contactos</h1>
    <h1>Escríbeme.</h1>
    @if (session()->has('info'))
        <h3>{{ session('info')}}</h3>
    @else
    
<form action="{{route('mensajes.store')}}" method="POST">
        {!! csrf_field() !!}
    
        <p><label for="nombre">
            Nombre
            <input type="text" name="nombre" value="{{ old('nombre') }}">
            {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
        </label></p>

        <p><label for="email">
            Email
            <input type="text" name="email" value="{{ old('email') }}">
            {!! $errors->first('email', '<span class=error>:message</span>') !!}
        </label></p>

        <p><label for="mensaje">
            Mensaje
            <textarea name="mensaje" value="{{ old('mensaje') }}"></textarea>
            {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
        </label></p>

        <input type="submit" value="Enviar">

</form>
    @endif
@stop