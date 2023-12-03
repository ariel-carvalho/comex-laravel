<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\CategoriaFormRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$categorias = 
        [
            [
                "nome" => "CELULARES"
            ],
            [
                "nome" => "INFORMÁTICA"
            ],
            [
                "nome" => "MÓVEIS"
            ],
            [
                "nome" => "AUTOMOTIVA"
            ],
            [
                "nome" => "LIVROS"
            ],
            [
                "nome" => "BELEZA"
            ],
            [
                "nome" => "ESPORTE"
            ],
            [
                "nome" => "LUXO"
            ]
        ];*/
        
        $categorias = Categoria::orderBy("nome", "ASC")->get();
        return view("categorias.index", ["categorias" => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categorias.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriaFormRequest $request)
    {   
        Categoria::create(["nome" => $request->nome]);
        return to_route("categorias.index")->with("mensagem", "Categoria Adicionada Com Sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("categorias.edit", ["categoria" => Categoria::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriaFormRequest $request, string $id)
    {
        /**
        * @var Categoria $categoria
        */
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return to_route("categorias.index")->with("mensagem", "Categoria Atualizada");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) 
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return to_route("categorias.index")->with("mensagem", "Categoria Excluída");
    }
}
