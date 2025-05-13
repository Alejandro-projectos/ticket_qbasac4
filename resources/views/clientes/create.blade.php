<x-layouts.app :title="__('Cliente')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
           
                <form action="{{ route('clientes.store') }}" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div>
                        <flux:input label="nombre" name="nombre"/>
                    </div>
                    <div>
                        <flux:input type="email" label="email" name="email"/>
                    </div>
                    <div>
                        <flux:input label="direccion" name="direccion"/>
                    </div>
                    <div>
                        <flux:input label="telefono" name="telefono"/>
                    </div>
                    <div class="flex justify-end">
                        <flux:button type="submit" class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500">
                            {{ __('Guardar') }}
                        </flux:button>
                    </div>
                </form>
        </div>
    </div>
</x-layouts.app>
