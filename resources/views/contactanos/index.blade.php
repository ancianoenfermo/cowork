<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="        https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
<body>
    <x-flash-message/>
    <div>
        <button class="mt-3 ml-10 bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
        onclick="window.location='{{route('home')}}'"
        >
            <i class="fas fa-arrow-left"></i> Volver
        </button>
    </div>
    <div class="pt-3">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" action="{{route('contactanos.store')}}">
                            @csrf
                            <div class="bg-pink-400 h-6">
                               <p class="text-white text-center">FORMULARIO DE CONTACTO</p>
                            </div>
                            <div class="mt-4">
                                <x-form-input name="name" label="Nombre y apellidos" />
                            </div>
                            <div class="grid grid-cols-3 gap-2">
                                <div class="col-span-2">
                                    <x-form-input type="email"  name="correo" label="Correo electrónico" />
                                </div>
                                <div >
                                    <x-form-input name="telefono" label="Teléfono" />
                                </div>
                            </div>

                            <div class="mt-4">
                                <x-form-textarea name="mensaje" label="Mensaje" rows="7" />
                            </div>
                            <div class="flex items-end justify-end mt-4 ">

                                <x-form-submit class="bg-pink-400">Enviar</x-form-submit>
                            </div>
                        </form>



                </div>

            </div>
        </div>
    </div>



</body>
</html>







