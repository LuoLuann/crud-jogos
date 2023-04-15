<?php

use App\Http\Controllers\JogosController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//criar um grupo de rotas
Route::prefix('jogos')->group(function() {
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    //garantindo que o id eh um numero natural positivo
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->name('jogos-destroy');
    });

Route::fallback(function() {
    return "Erro";
});

// // Route::get('/', function () {
// //     return view('welcome');
// // });
// // //essas duas formas recuperam uma view

// // Route::get('/jogos', function () {
// //     return view('jogos' );
// // });
// // Route::view('/jogos', 'jogos');

// //essa forma retorna um texto
// Route::get('/texto', function() {
//     return "curso de laravel";
// });

// //passsando parametros estaticos
// //passando valor gta para a variavel name
// // Route::view('/jogos', 'jogos', ['name' => 'GTA']);

// //parametros dinamicos
// // Route::get('/jogos/{name}', function($name) {
// //     //agr passo o return da view passando a variavel
// //     //nome jogo eh o nome da variavel na view que ira receber
// //     return view('jogos', ['nomeJogo' => $name]);
// // });

// //condicao que o parametro seja apenas com letras
// // Route::get('/jogos/{name?}', function($name = null) {
// //     return view('jogos', ['name' => $name]);
// // })->where('name', '[A-za-z]+');

// //fazendo com que uma rota leve a outra com um botao
// Route::get('/jogos', [JogosController::class, 'index']);
// //dessa forma eu chamarei a rota pela nomeclatura definida ali embaixo
// //basta chamar ela na view com: <a href="{{ route('home-index') }}">
// Route::get('/', function() {
//     return view('welcome');
// })->name('home-index');

// //forma de exibir um erro caso a rota n seja encontrada
// //posso retornar outra view personalida tmb
// Route::fallback(function () {
//     return "erro ao localizar página";
// }); 
