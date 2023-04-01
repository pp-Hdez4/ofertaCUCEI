<div>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @if(count ($vacantes)>0 )



        @foreach ($vacantes as $vacante )
        <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
            <div class="leading-10">
                <a href="#" class="text-xl">
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

                <a
                href="#"
                class=" py-2 px-4 rounded-lg text-xs font-bold uppercase"

                >Elimkinar</a>
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

@push('scripts')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
 Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
</script>
    
@endpush

