<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

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

Route::get('/', function () {
    return view('index');
});


//Rotas para a pagina Index.blade.php

Route::get('/',[TarefaController::class,'index'])->name('Index');

// Rotas dedicadas para a página Criar
Route::get('/Criar',[TarefaController::class,'Mostrar_Criar'])->name('Criar');
Route::post('/CreateRowTarefa',[TarefaController::class,'Cadastrar_Tarefa'])->name('Cadastro-tarefa');