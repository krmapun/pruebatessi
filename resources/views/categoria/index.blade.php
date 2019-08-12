@extends('layouts.app')
@section('title','Categorias')
@section('content')
    @foreach ($categorias as $categoria)
        <p>{{$categoria->nombre}}</p>
    @endforeach
@endsection