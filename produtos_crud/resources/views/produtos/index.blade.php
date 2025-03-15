@extends('layouts.app')

@section('content')
    
    <div class="container mt-5" >
        <div class="row">
            <div class="col-sm-10">
                <h1>Lista</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('produtos.create')}}" class="btn btn-outline-success">
                Adicionar Produto</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                </tr>
            </thead>

            <tbody>
               @foreach ($produtos as $produto)
               
                    <tr>
                        <th> {{$produto->id}} </th>
                        <th> {{$produto->nome}} </th>
                        <th> {{$produto->descricao}} </th>
                        <th> {{$produto->preco}} </th>
                    </tr>
                        <th class="d-flex">  
                            <a href="{{ route('produtos.edit', ['id' => $produto->id]) }}"> Editar</a>


                            <form action="#">
                            <button>
                            </button>
                            </form>
                        </th>

                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
