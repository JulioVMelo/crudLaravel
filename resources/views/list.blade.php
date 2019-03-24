@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <h3>Listagem de bebidas</h3>
      </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover">
                <thead class="thead-light ">
                    <tr>
                        <th >ID</th>
                        <th >Nome</th>
                        <th >Marca</th>
                        <th >Preço</th>
                        <th >Quantidade</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($beers as $beer)
                <tr>
                  <td>{{ $beer->id }}</td>
                  <td>{{ $beer->nome }}</td>
                  <td>{{ $beer->marca }}</td>
                  <td>{{ $beer->preco }}</td>
                  <td>{{ $beer->quantidade }}</td>
                  <td class="actions">
                    <a href="/editar/{{$beer->id}}" class="mr-3 fa fa-pencil"></a>
                    <a href="/deletar/{{$beer->id}}" class="fa fa-trash-o"></a>
                  </td>
                </tr>
                @endforeach 
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection




