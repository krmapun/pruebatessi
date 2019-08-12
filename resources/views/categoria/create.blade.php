@extends('layouts.app')
@section('title','crear')
@section('content')
    <form class="form-group" method="POST" action="/categoria">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="">Nombre Categoria</label>
                <input type="text" name="NomCategoria" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection