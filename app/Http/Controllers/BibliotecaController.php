<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BibliotecaController extends Controller
{

    
     // Listar bibliotecas
     public function index()
     {
         $bibliotecas = Auth::user()->bibliotecas;
         return view('bibliotecas.index', compact('bibliotecas'));
     }
 
     // Mostrar formulario de creación de biblioteca
     public function create()
     {
         return view('bibliotecas.create');
     }
 
     // Guardar nueva biblioteca
     public function store(Request $request)
     {
         $request->validate([
             'nombre' => 'required|string|min:5|max:30|trim',
             'ubicacion' => 'required|string|min:20|max:125|trim',
             'descripcion' => 'nullable|string|max:500|trim',
         ]);
 
         $biblioteca = new Biblioteca([
             'nombre' => trim($request->input('nombre')),
             'ubicacion' => trim($request->input('ubicacion')),
             'descripcion' => trim($request->input('descripcion')),
         ]);
 
         Auth::user()->bibliotecas()->save($biblioteca);
 
         return redirect()->route('bibliotecas.index')->with('success', 'Biblioteca creada con éxito.');
     }
}
