<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = 
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
        ];
        
        return view("categorias.index", ["categorias" => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}