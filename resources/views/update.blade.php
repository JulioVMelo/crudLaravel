@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <h3>Atualizar bebida</h3>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <form  class="row" action="/atualizar/{{$beer->id}}" method="get">
            {{ csrf_field() }}
                <div class="form-group col-md-3">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" value="{{$beer->nome}}" name="nome" id="inputNome" placeholder="Nome">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputMarca">Marca</label>
                    <input type="text" class="form-control" value="{{$beer->marca}}" name="marca" id="inputMarca" placeholder="Marca">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPreco">Preço</label>
                    <input type="number" class="form-control" value="{{$beer->preco}}" name="preco" id="inputPreco" placeholder="Preço">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputQuantidade">Quantidade</label>
                    <input type="number" class="form-control" value="{{$beer->quantidade}}" name="quantidade" id="inputQuantidade"
                        placeholder="Quantidade">
                </div>
                <div class="form-group col-md-3">
                  <button class="btn btn-primary" type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
