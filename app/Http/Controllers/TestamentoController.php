<?php

namespace App\Http\Controllers;

use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Testamento::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //CREATE
    {
        $testamento = Testamento::create($request->all());
        if ($testamento) {
            return response()->json([
                'message' => 'Testamento Cadastrado com sucesso',
                'testamento' => $testamento
            ], 201);
        } else {
            return response()->json([
                'message' => 'Erro ao cadastrar testamento'
            ]);
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
        $testamento = Testamento::find($id);
        if ($testamento) {
            return $testamento;
        } else {
            return response()->json([
                'message' => 'Testamento não encontrado'
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
        $testamento = Testamento::find($id);
        if ($testamento) {
            $testamento->update($request->all());
            return $testamento;
        } else {
            return response()->json([
                'message' => 'Erro ao atualizar testamento'
            ]);
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
        $testamento = Testamento::find($id);
        if ($testamento) {
            Testamento::destroy($id);
            return response()->json([
                'message' => 'Testamento excluido com sucesso'
            ]);
        } else {
            return response()->json([
                'message' => 'Erro ao excluir testamento'
            ], 404);
        }
    }
}
