<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacante ->titulo}}
        </h3>
    </div>

        <div class="md:grid md:grid-cols-2">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">Empresa
                <span class="normal-case font-normal">{{$vacante->empresa}}</span>
            </p>


            <p class="font-bold text-sm uppercase text-gray-800 my-3">Ultimo dia para postularse: 
                <span class="normal-case font-normal">{{$vacante->ultimo_dia}}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">Categoria: 
                <span class="normal-case font-normal">{{$vacante->categoria->categoria}}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">Salario: 
                <span class="normal-case font-normal">{{$vacante->salario->salario}}</span>
            </p>
        </div>
    </div>
    <div class="md:grid md:grid-cols6 gap-4">
        <div class="md:col-span-2">
            <img src="{{ asset('storage/vacantes/'. $vacante->imagen )}}" alt="{{'Imagen vacante' . $vacante->titulo}}">
        </div>

        <div class="md:col-span-4">
            <h2 class="text-2xl font bold m-5"> Descripcion del puesto:</h2>
            <p>{{$vacante->descripcion}}</p>


        </div>
    </div>

    @guest
        <div class="mt-5 bg-gray-50 border-dashed p-5 text-center">
            <p>
                Interesado en esta vcacante?<a class="font-bold text-red-600 " href="{{ route('register')}}">Crea una cuenta para aplicar a esta vacante</a>
            </p>


        </div>
        
    @endguest

     @cannot('create', App\Models\Vacante:class)
        <Livewire:postular-vacante :vacante="$vacante" />

     @endcannot

    
    



</div>
