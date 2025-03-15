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
        Produto::created($request->all());
        redirect()->route('produtos.index');
    }

    
    public function edit($id)
    {
        $produtos = Produto::where('id', $id)->first();
        if(!empty($jogos)){
            return view('produtos.edit', ['produtos' => $produtos]);
        } else {
            redirect()->route('produtos.index');
        }
    }
    

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     */
    public function destroy($id)
    {
        //
    }
}
