<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación de cliente
    }

    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo cliente
    }

    public function show($id)
    {
        // Lógica para mostrar un cliente específico
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición de cliente
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un cliente existente
    }

    public function destroy($id)
    {
        // Lógica para eliminar un cliente
    }
}
