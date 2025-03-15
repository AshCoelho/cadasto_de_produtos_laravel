@extends('layouts.app')

@section('content')
    
    <div class="container mt-5" >
    <h1>Adicionar Produtos</h1>

        <form action="{{ route('produtos.store')}}" method="post">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome"  class="form-control" placeholder="Digite um nome..." >
                </div>
                <br>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao"  class="form-control" placeholder="Digite uma descrição..." >
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="number" name="preco"  class="form-control" placeholder="R$" >
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Adicionar" name="submit"
                    class="btn btn-outline-success">
                </div>
                
            </div>
        </form>
    </div>
    
@endsection
