<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Livro::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $livro = Livro::create($request->all());
        if ($livro) {
            return response()->json([
                'message' => 'Livro Cadastrado com sucesso',
                'livro' => $livro
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao cadastrar o livro'
        ], 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = Livro::find($id);
        if ($livro) {
            return $livro;
        } else {
            return response()->json([
                'message' => 'Livro não encontrado'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livro = Livro::find($id);
        if ($livro) {
            $livro->update($request->all());
            return $livro;
        } else {
            return response()->json([
                'message' => 'Livro não encontrado'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Livro::find($id);
        if ($livro) {
            $livro->destroy($id);
            return response()->json([
                'message' => 'Livro excluido com sucesso!'
            ]);
        } else {
            return response()->json([
                'message' => 'Livro não encontrado'
            ], 404);
        }
    }
}
