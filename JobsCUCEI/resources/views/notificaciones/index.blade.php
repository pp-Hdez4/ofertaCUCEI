<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notitficaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-4xl font-bold text-center mb-10">Notificaciones</h1>

                    @forelse ( $notificaciones as $notificacion )
                    <div class="p-5 border border-gray-200 flex justify-between">
                        <div>

                        
                            <p>Tienes un nuevo candidato
                                <span class="font-bold ">{{ $notificacion->data['nombre_vacante'] }}</span>
                            </p>

                            <p>
                                <span class="font-bold ">{{ $notificacion->created_at->diffForHumans }}</span>
                            </p>
                        </div>
                        <div>
                            <a href="#" class="bg-red-500 p-3 text-sm text-white">
                                Ver candidatos
                            </a>
                        </div>

                    </div>

                        
                    @empty
                        <p class="text-center text-gray-500">No hay nuevas notificaciones</p>
                    @endforelse
                
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>