@extends('adminlte::page')

@section('title', 'Informações do Produto')

@section('content_header')
    <h1>Informações do Produto</h1>
@stop

@section('content')
<div class="card">

    <div class="container">
            <div class="row" style="margin-top: 10px">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <h3 style="text-align:center;">Informações do Produto</h3>
                </div>
                <div class="col-sm">
                    <a class="btn btn-danger" style="float:right; color:white;" href="/admin/product/list/"><i class="fa fa-list"></i> Lista de produtos</a>
                </div>
            </div>
            <p><b>Nome:</b> {{$product['0']->name}}</p>
            <p><b>Ingredientes:</b> {{$product['0']->ingredients}}</p>
            <p><b>Valor:</b> {{$product['0']->value}}</p>
            <p><b>Tipo:</b> {{$product['0']->type}}</p>
            <p><b>Data de criação:</b> {{$product['0']->created_at}}</p>
            <p><b>Data da ultima atualização:</b> {{$product['0']->updated_at}}</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
