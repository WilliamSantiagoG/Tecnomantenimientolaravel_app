<?php

use App\Http\Controllers\UsuariosControlador;
use App\Http\Controllers\GestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para Usuarios
Route::resource('/Usuarios', UsuariosControlador::class);

// Rutas para las gestiones de un usuario específico
Route::get('Usuarios/{userId}/gestiones', [GestionController::class, 'index'])->name('Usuarios.gestiones');
Route::get('Usuarios/{userId}/gestiones/create', [GestionController::class, 'create'])->name('Usuarios.gestiones.create');
Route::post('Usuarios/{userId}/gestiones', [GestionController::class, 'store'])->name('Usuarios.gestiones.store');

// Si necesitas una ruta para mostrar detalles de una gestión específica, puedes agregar algo como esto:
Route::get('Usuarios/{userId}/gestiones/{gestionId}', [GestionController::class, 'show'])->name('Usuarios.gestiones.show');
