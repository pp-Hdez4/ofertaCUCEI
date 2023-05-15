<div>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @if(count ($vacantes)>0 )



        @foreach ($vacantes as $vacante )
        <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
            <div class="leading-10">
                <a href="{{ route('vacantes.show', $vacante->id) }}" class="text-xl">
                    {{ $vacante->titulo }}
                </a>
                <p class="text-sm text-gray-600 font-bold">{{$vacante->empresa}}</p>
                <p class="text-sm text-gray-500 font-bold">Ultimo dia para aplicar: {{ $vacante->ultimo_dia }}</p>
            </div>

            <div class="flex gap-3 items-center mt-5 md:mt-0.5">
                <a
                href="#"
                class="bg-slate-800 py-2 px-4 rounded-lg text-xs font-bold uppercase"

                >Candidatos</a>

                <a
                href="{{ route('vacantes.edit',$vacante->id) }}"
                class="bg-blue-600 py-2 px-4 rounded-lg text-xs font-bold uppercase"

                >Editar</a>

                <button
                wire:click="$emit('MostrarAlerta',{{ $vacante->id }})"
                class=" py-2 px-4 rounded-lg text-xs font-bold uppercase"

                >Eliminar</button>
            </div>

        </div>
        @endforeach

        @else
        <p class="p-3 text-center text-sm text-gray-600" > No hay vacantes que mostrar</p>

        @endif
    </div>

    <div  class="flex justify-center mt-10">
        {{$vacantes->links()}}
    </div>
  </div>
</div>

@push('scripts')

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>

        Livewire.on('MostrarAlerta', vacanteId=>{
              Swal.fire({
              title: 'Eliminar vacante?',
              text: "Se eliminara la vacante!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'si, eliminalo!',
              cancelButtonText: 'Cancelar'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      //Elimianr vacante
                      Livewire.emit('eliminarVacante', vacanteId)


                      Swal.fire(
                          'Eliminado!',
                          'La vacante de ha elimiado.',
                          'success'
                      )
                    }
                  })
          })


       

  </script>
  
@endpush




