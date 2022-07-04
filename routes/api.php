<?php

use App\Http\Controllers\TestamentoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\VersiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// TESTAMENTOS
// Route::get('/testamento', [TestamentoController::class, 'index']);
// Route::get('/testamento/{id}', [TestamentoController::class, 'show']);
// Route::post('/testamento', [TestamentoController::class, 'store']);
// Route::put('/testamento/{id}', [TestamentoController::class, 'update']);
// Route::delete('/testamento/{id}', [TestamentoController::class, 'destroy']);

// Route::apiResource('testamento', TestamentoController::class);

// LIVROS
// Route::get('/livro', [LivroController::class, 'index']);
// Route::get('/livro/{id}', [LivroController::class, 'show']);
// Route::post('/livro', [LivroController::class, 'store']);
// Route::put('/livro/{id}', [LivroController::class, 'update']);
// Route::delete('/livro/{id}', [LivroController::class, 'destroy']);

// Route::apiResource('livro', LivroController::class);

//  VERSICULOS
// Route::get('/versiculo', [VersiculoController::class, 'index']);
// Route::get('/versiculo/{id}', [VersiculoController::class, 'show']);
// Route::post('/versiculo', [VersiculoController::class, 'store']);
// Route::put('/versiculo/{id}', [VersiculoController::class, 'update']);
// Route::delete('/versiculo/{id}', [VersiculoController::class, 'destroy']);

// Route::apiResource('versiculo', VersiculoController::class);


Route::apiResources([
    'testamento' => TestamentoController::class,
    'livro' => LivroController::class,
    'versiculo' => VersiculoController::class,
]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
