@extends('layouts.app')

@section('content')
    
    <div class="container mt-5" >
    <h1>Editar Produto </h1>

        <form action="{{ route('produtos.uptade', ['id' => $produtos->id]) }}" method="post">
        @csrf
        @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome"  class="form-control" value="{{$produtos->nome}}" placeholder="Digite um nome..." >
                </div>
                <br>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao"  class="form-control" value="{{$produtos->descricao}}" placeholder="Digite uma descrição..." >
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="number" name="preco"  class="form-control" value="{{$produtos->preco}}" placeholder="R$" >
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Atualizar" class="btn btn-outline-success">
                </div>
                
            </div>
        </form>
    </div>
    
@endsection
