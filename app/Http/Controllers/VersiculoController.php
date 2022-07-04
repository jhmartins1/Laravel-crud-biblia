<?php

namespace App\Http\Controllers;

use App\Models\Versiculo;
use Illuminate\Http\Request;

class VersiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Versiculo::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $versiculo = Versiculo::create($request->all());
        if ($versiculo) {
            return response()->json([
                'message' => 'Versiculo criado com sucesso!',
                'versiculo' => $versiculo
            ], 201);
        } else {
            return response()->json([
                'message' => 'Erro ao criar versiculo'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $versiculo = Versiculo::find($id);
        if ($versiculo) {
            return $versiculo;
        } else {
            return response()->json([
                'message' => 'Versiculo não encontrado'
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
        $versiculo = Versiculo::find($id);
        if ($versiculo) {
            $versiculo->update($request->all());
            return $versiculo;
        } else {
            return response()->json([
                'message' => 'Erro ao atualizar versiculo'
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
        $versiculo = Versiculo::find($id);
        if ($versiculo) {
            Versiculo::destroy($id);
            return response()->json([
                'message' => 'Versiculo excluido com sucesso!'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Erro ao excluir versiculo'
            ], 404);
        }
    }
}
