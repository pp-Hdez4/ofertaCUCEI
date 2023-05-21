<div class=" bg-gray-100 p-5 mt-1- flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    @if (session()->has('mensaje'))
        <div class="uppercase border-green-600 bg-green-100 text-green-600 font-bold my-5">
            {{session('mensaje')}}
        </div>

        @else
        <form wire:submit.prevent="postularme" class="w-96 mt-5">
            <div>
                <x-label for="cv" :value="__ ('curriculum')" />
                <x-input id="cv" type="file" wire:model="cv" accept=".pdf" class="block mt-1 w-full"></x-input>
    
            </div>
            @error('cv')
            <livewire:mostrar-alerta :message="$message">
                
            @enderror
    
            <x-button class="my-5">
                {{__('Postularme')}}
    
            </x-button>
    
    
        </form>
        
    @endif

    


</div>
