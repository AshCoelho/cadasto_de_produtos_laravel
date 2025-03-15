<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', ['produtos' => $produtos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    public function store(Request $request)
    {
        Produto::create($request->all());
        return redirect()->route('produtos.index');
    }

    
    public function edit($id)
    {
        $produtos = Produto::where('id', $id)->first();
        if(!empty($produtos)){
            return view('produtos.edit', ['produtos' => $produtos]);
        } else {
            return redirect()->route('produtos.index');
        }
    }
    

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request -> nome,
            'descricao' => $request -> descricao,
            'preco' => $request -> preco
        ];

        Produto::where('id', $id)->update($data);
        return redirect()->route('produtos.index');


    }

    /**
     * Remove the specified resource from storage.
     * 
     */
    public function destroy($id)
    {
        Produto::where('id', $id)->delete();
        return redirect()->route('produtos.index');
    }
}
