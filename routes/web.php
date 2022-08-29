<?php

use App\Http\Controllers\BolsistaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [ 'users' => App\Models\User::all() ]);
});

// Lista bolsistas
Route::get('/bolsistas', [BolsistaController::class, 'list'])
    ->middleware(['auth'])
    ->name('bolsistas');

//Cadastro de bolsista
Route::get('/cadastro', [BolsistaController::class, 'cadastro'])
    ->middleware(['auth'])
    ->name('cadastro');
Route::post('/cadastro', [BolsistaController::class, 'create'])
    ->middleware(['auth'])
    ->name('cadastro');

// Edita bolsista
Route::get('/edit/{cpf}', [BolsistaController::class, 'edit'])
    ->middleware(['auth'])
    ->name('edit');
Route::post('/edit/{cpf}', [BolsistaController::class, 'update'])
    ->middleware(['auth'])
    ->name('edit');

// Detalhes de bolsista
Route::get('/bolsista/{cpf}', [BolsistaController::class, 'bolsista'])
    ->middleware(['auth'])
    ->name('bolsista');

// Deleta bolsista
Route::get('/delete/{cpf}', [BolsistaController::class, 'delete'])
    ->middleware(['auth'])
    ->name('delete');

require __DIR__.'/auth.php';
