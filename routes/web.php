<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EvaluacionController;
use App\Http\Controllers\UserProfileController;
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
    return view('auth.login');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[HomeController::class, 'AdminIndex']);
});

Route::post('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

        // Ruta para actualizar el perfil del usuario
        Route::put('/user/profile', [UserProfileController::class, 'update'])
        ->name('profile.update');

Route::get('/edit-profile', [HomeController::class, 'editProfile'])->name('editProfile');

//Rutas de usuarios
Route::get('/admin/evaluacion', [EvaluacionController::class, 'index'])->name('admin.evaluacion.index');

//Ruta de evaluacion
Route::get('/admin/evaluar', [EvaluacionController::class, 'evaluacionUsuario'])->name('admin.evaluacion.evaluar');

Route::get('/evaluacion/evaluacion-usuario/{rut}', [EvaluacionController::class, 'evaluacionUsuario'])->name('admin.evaluacion.evaluacionUsuario');

// Ruta para guardar las respuestas del formulario
Route::post('/evaluacion/guardarRespuestas', [EvaluacionController::class, 'guardarRespuestas'])->name('admin.evaluacion.guardarRespuestas');

//Controlador para exportar a excel
Route::get('users/export/', [EvaluacionController::class, 'export'])->name('users.export');;