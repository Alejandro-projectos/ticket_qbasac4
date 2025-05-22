<x-layouts.app :title="__('Editar Cliente')">
    <h1 class="text-2xl font-bold mb-6">Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="flex flex-col gap-4">
        @csrf
        @method('PUT')
    
        <div>
            <flux:input
                label="nombre" name="nombre"
                value="{{ old('nombre', $cliente->nombre) }}"/> 
        </div>
        <div>
            <flux:input
                type="email" label="email" name="email"
                value="{{ old('email', $cliente->email) }}"/> 
        </div>
        <div>
            <flux:input
                label="direccion" name="direccion"
                value="{{ old('direccion', $cliente->direccion) }}" />
           </div>
    
        <div>
            <flux:input
                label="telefono" name="telefono"
                value="{{ old('telefono', $cliente->telefono) }}"/>
           </div>
    
        <div class="flex items-center gap-4 justify-end">
            <flux:button type="submit" class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500">
                {{ __('Guardar') }}
            </flux:button>
            <a href="{{ route('clientes.index') }}" class="text-sm text-gray-600 hover:underline">
                ← Volver a la lista
            </a>
        </div>
    </form>
    
</x-layouts.app>
