@extends('layouts.app')

@section('titulo')
    Pagina principal
@endsection

@section('contenido')
   <x-listar-post :posts="$posts" /> {{--  viene de listar-post.balde.php que tiene una clase del mismo ListarPost.php--}}
@endsection

