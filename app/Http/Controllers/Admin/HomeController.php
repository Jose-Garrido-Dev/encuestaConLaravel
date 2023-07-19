<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function AdminIndex()
    {
        $perfilUsuario = Auth::user()->perfil;
    
        if ($perfilUsuario === 'Evaluado') {
            return view('admin.evaluado');
        } elseif ($perfilUsuario === 'Evaluador') {
            return view('admin.evaluador');
        } elseif ($perfilUsuario === 'Admin') {
            return view('admin.admin');
        } else {
            return redirect('/'); // Redirigir a una ruta por defecto en caso de perfil desconocido
        }
    }

    public function editProfile()
    {
         $user = Auth::user(); // Obtiene el usuario autenticado

         return view('profile.show', compact('user')); // Reemplaza 'profile.edit' con la ruta o nombre de la vista de edición de perfil
    }

}
