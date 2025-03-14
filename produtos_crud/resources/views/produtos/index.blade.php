@extends('layouts.app')

@section('content')
    
    <div class="container mt-5" >
        <div class="row">
            <div class="col-sm-10">
                <h1>Lista</h1>
            </div>
            <div class="col-sm-2">
                <a href="#" class="btn btn-outline-success">
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
                        <td> {{$produto->nome}} </td>
                        <td> {{$produto->descricao}} </td>
                        <td> {{$produto->preco}} </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
