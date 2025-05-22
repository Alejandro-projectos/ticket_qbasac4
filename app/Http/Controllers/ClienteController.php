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
        
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        
        $rules = [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'direccion' => 'string|max:255',
            'telefono' => 'string|max:15',
        ];
        $messages = [
            'nombre.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El formato del correo electrónico no es válido.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'direccion.string' => 'La dirección debe ser una cadena de texto.',
            'telefono.string' => 'El teléfono debe ser una cadena de texto.',
        ];
        $request->validate($rules, $messages);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'direccion' => 'string|max:255',
            'telefono' => 'string|max:15',
        ];
        $messages = [
            'nombre.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El formato del correo electrónico no es válido.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'direccion.string' => 'La dirección debe ser una cadena de texto.',
            'telefono.string' => 'El teléfono debe ser una cadena de texto.',
        ];
        $request->validate($rules, $messages);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    public function destroy($id)
    {
        {
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();
        
            return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
        }
    }
}
