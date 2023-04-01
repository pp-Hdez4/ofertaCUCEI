<form class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante'>
    <div>
        <x-input-label for="titulo" :value="__('Titulo de la vacante')" />
        <x-text-input id="titulo" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="titulo"
        :value="old('titulo')" 
        placeholder="Titulo de la vacante"
    />
    @error('titulo')
        <livewire:mostrar-alerta :message="$message" />

    @enderror


    </div>

    <div>
        <x-input-label for="salario" :value="__('salario')" />
        <select
                id="salario"
                wire:model="salario"
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
        >
        <option>--selecciones</option>
        @foreach ( $salarios as $salario)
        <option value="{{$salario->id}}">{{$salario->salario}}</option>
            
        @endforeach

        </select>

        @error('salario')
        <livewire:mostrar-alerta :message="$message" />

    @enderror
    
    </div>

    <div>
        <x-input-label for="categoria" :value="__('categoria')" />
        <select
                id="categoria"
                wire:model="categoria"
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
        >
        <option>--selecciones</option>
        @foreach ( $categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            
        @endforeach

        </select>
        @error('categoria')
        <livewire:mostrar-alerta :message="$message" />

    @enderror
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="empresa" 
        :value="old('empresa')" 
        placeholder="Nombre de la empresa"
    />
    @error('empresa')
        <livewire:mostrar-alerta :message="$message" />

    @enderror
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Fecha limite para postulacion')" />
        <x-text-input id="ultimo_dia" 
        class="block mt-1 w-full" 
        type="date" 
        wire:model="ultimo_dia" 
        :value="old('ultimo_dia')" 
    />
    @error('ultimo_dia')
        <livewire:mostrar-alerta :message="$message" />

    @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripcion puesto')" />
       <textarea
        wire:model="descripcion" 
        placeholder="Descripcion del puesto"
        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full h-72"
        ></textarea>
        @error('descripcion')
        <livewire:mostrar-alerta :message="$message" />

    @enderror
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" 
        class="block mt-1 w-full" 
        type="file" 
        wire:model="imagen_nueva" 
        accept="image/*"
    />

    <div class="my-5 w-60>
        <x-input-label for="imagenA" :value="__('Imagen')" />

        <img src="{{ asset('storage/vacantes/' . $imagen)}}" alt="{{ 'Imagen Vacante' . $titulo}}"

    </div>

    <div class="my-5 w-60">
        @if($imagen_nueva)
        imagen_nueva:
        <img src="{{$imagen_nueva->temporaryUrl()}}">

        @endif


    </div>

    @error('imagen_nueva')
        <livewire:mostrar-alerta :message="$message" />

    @enderror
    </div>
    <x-primary-button class=" justify-center">
        {{ __('Guardar cambios') }}
    </x-primary-button>
 


    
</form>
