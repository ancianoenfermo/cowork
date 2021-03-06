<x-app-layout>
    @if (session('ìnfo'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif
    @slot('header')

            <header>
                <div class="bg-cover" style="background-image: url({{asset('/img/portada/Portada2.jpg')}})">
                    <div class ="grid grid-cols-1 md:grid-cols-3 h-72 my-auto">
                        <div class="md:col-span-2 pt-10 mx-14 my-auto">
                            <p class=" text-white text-xl md:text-4xl text-opacity-100"><strong>CoWorking en Santiago</strong> de Quelqum</p>

                        </div>
                        <div class="items-center  mx-auto my-auto">
                            <img class="w-30 md:w-72" src="{{asset('/img/logo/PerroAmigo.png')}}" alt="logo petfriendly">

                        </div>
                    </div>
                </div>
            </header>
    @endslot

    <article>

        <div class="mx-auto text-base md:text-xl leading-normal text-justify px-2 md:px-32">

            <h1 class="tituloH2Co text-2xl md:text-3xl ">Coworking en Santiago de Compostela</h1>
            <p class="h2parrafo px-5 text-lg md:text-xl pb-2">
                <span class="text-lg md:text-3xl text-pink-700">C</span>onoce nuestro <strong>coworking en Santiago de Compostela</strong>, con puestos de trabajo compartidos, fijos o nómadas
            </p>
            <img class="float-left w-36 md:w-72 mr-4 " src="{{asset('/img/resto/MesaCompartida.jpg')}}" alt="Puesto de coworking en Santiago de Compostela">
            <img class="float-right w-36 md:w-72 ml-4 " src="{{asset('/img/resto/Despacho.jpg')}}" alt="Despacho de coworking en Santiago de Compostela">

            <p class="h2parrafo text-lg md:text-xl pb-1">
            <span class="text-3xl text-pink-700">D</span>espachos privados: Disponemos de oficinas y despachos privados para tu proyecto.
            </p>
            <p class="h2parrafo text-lg md:text-xl pb-1">
            <span class="text-3xl text-pink-700">A</span>lquiler de salas de reuniones de diferentes tamaños, incluida una de 90 metros cuadrados, con el equipamiento audiovisual necesario
            </p>
            <p class="h2parrafo text-lg md:text-xl pb-10">
            <span class="text-3xl text-pink-700">A</span>ulas de formación homologadas, equipadas con Conexión wifi, Televisión, Equipo audiovisual, Pizarra interactiva, Rotafolio, Mobiliario confortable
            </p>

        </div>



            <div class="mx-auto text-xl leading-normal text-justify px-2 md:px-32  bg-gray-50">

                <h2 class="tituloH2Co text-2xl md:text-3xl">Servicios</h2>
                <p class="h2parrafo text-lg md:text-xl "><span class="text-3xl text-pink-700">U</span>na nueva forma de trabajar y relacionarse, en la que por fin los profesionales pueden compartir un espacio de trabajo y desarrollar nuevas fórmulas de colaboración.</p>
                <p class="h2parrafo text-lg md:text-xl"><span class="text-3xl text-pink-700">N</span>uestras instalaciones de coworking en Santiago de Compostela están pensadas para facilitar el desarrollo de la actividad profesional en óptimas condiciones y con un máximo rendimiento, con buena ubicación, luz natural, mobiliario funcional y dotadas de servicios de calefacción, fibra óptica, limpieza, microondas y máquinas de vending, reduciendo su inversión inicial.
                <p class="h2parrafo text-lg md:text-xl"><span class="text-3xl text-pink-700">E</span>l local reúne las condiciones higiénicas, acústicas, de habitabilidad y de seguridad adecuadas y dispone de los medios necesarios para facilitar la accesibilidad universal, de forma que no exista discriminación para las personas con discapacidad.<p>
                <p class="h2parrafo text-lg md:text-xl pb-10"><span class="text-3xl text-pink-700">E</span>s un espacio de coworking en Santiago de Compostela concebido para trabajar en las mejores condiciones, por lo que, desde la pandemia, establecimos un Plan de contingencias, que contempla, entre otros, distancia social, con 2m de distancia entre cada puesto de trabajo, alfombras desinfectantes, dispensadores de gel, desinfección diaria o termómetros para control de temperatura.</p>
                <div class="container grid grid-cols-3 gap-2 mx-auto pb-10">
                    <div class="w-full rounded">
                        <img src="{{asset('/img/resto/Instalaciones1.jpg')}}"
                            alt="Recepcion coworking en Santiago de compostela">
                    </div>
                    <div class="w-full rounded">
                        <img src="{{asset('/img/resto/Instalaciones2.jpg')}}" alt="Puestos de coworking en Santiago de compostela">
                    </div>
                    <div class="w-full rounded">
                        <img src="{{asset('/img/resto/Instalaciones3.jpg')}}" alt="Aulas de formación coworking en Santiago de compostela">
                    </div>
                </div>
            </div>




            <div class="mx-auto text-xl leading-normal md:text-justify px-2 md:px-32" >

                <h2 class="tituloH2Co text-2xl md:text-3xl">Tarifas de espacios de coworking</h2>
                <div class="pb-24">
                    <table class="mx-auto ">
                        <thead>
                        <tr class="text-base md:text-xl">
                            <th class="border border-pink-900 px-4 py-2 bg-pink-400 text-white">Servicio</th>
                            <th class="border border-pink-900 px-4 py-2 bg-pink-400 text-white">Precio (sin iva)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-base md:text-xl">
                            <td class="border border-pink-900 px-4 py-2">Mesa fija </td>
                            <td class="border border-pink-900 px-4 py-2">120€</td>
                        </tr>
                        <tr class=" text-base md:text-xl">
                            <td class="border border-pink-900 px-4 py-2">Mesa fija Media jornada</td>
                            <td class="border border-pink-900 px-4 py-2">80€</td>
                        </tr>
                        <tr class="text-base md:text-xl">
                            <td class="border border-pink-900 px-4 py-2">Nómada </td>
                            <td class="border border-pink-900 px-4 py-2">12€/h</td>
                        </tr>
                        <tr class="text-base md:text-xl">
                            <td class="border border-pink-900 px-4 py-2">Despacho fijo al mes</td>
                            <td class="border border-pink-900 px-4 py-2">250€</td>
                        </tr>
                        <tr class="text-base md:text-xl">
                            <td class="border border-pink-900 px-4 py-2">Despacho Horas sueltas </td>
                            <td class="border border-pink-900 px-4 py-2">20€</td>
                        </tr>

                        <tr class="text-base md:text-xl">
                            <td class="border border-pink-900 px-4 py-2">Aulas formación</td>
                            <td class="border border-pink-900 px-4 py-2">25€/h</td>
                        </tr>
                        <tr class="text-base md:text-xl">
                            <td class="border border-pink-500 px-4 py-2">Oficina virtual:
                                <ul class="h2ul list-disc list-inside px-4 text-xs">
                                    <li class="h3li text-base md:text-xl">Uso de la dirección como domicilio comercial, social y fiscal.</li>
                                    <li class="h3li text-base md:text-xl">Uso de la dirección en sus espacios web, sus documentos y tarjetas..</li>
                                    <li class="h3li text-base md:text-xl">Perfil visible en nuestra web.</li>
                                    <li class="h3li text-base md:text-xl">Rótulo exterior, visibilidad en la entrada</li>
                                </ul>
                            </td>
                            <td class="border border-pink-500 px-4 py-2">25€</td>
                        </tr>
                        <tr class="text-base md:text-xl">
                            <td class="border border-pink-500 px-4 py-2">Oficina virtual:
                                <ul class="h2ul list-disc  list-inside px-4 text-xs">
                                    <li class="h3li text-base md:text-xl">Uso de la dirección como domicilio comercial, social y fiscal.</li>
                                    <li class="h3li text-base md:text-xl">Uso de la dirección en sus espacios web, sus documentos y tarjetas.</li>
                                    <li class="h3li text-base md:text-xl">Perfil visible en nuestra web.</li>
                                    <li class="h3li text-base md:text-xl">Rótulo exterior, visibilidad en la entrada</li>
                                    <li class="h3li text-base md:text-xl">Recepción de correspondencia.</li>
                                    <li class="h3li text-base md:text-xl">Servicio de recepción de paquetería</li>
                                    <li class="h3li text-base md:text-xl">Aviso de recepción de cartas certificadas o urgentes.</li>
                                    <li class="h3li text-base md:text-xl">Servicio de recepción de paquetería</li>
                                    <li class="h3li text-base md:text-xl">Uso de nuestra sala de reuniones (consultar las horas a disposición).</li>
                                </ul>
                            </td>
                            <td class="border border-pink-500 px-4 py-2">60€</td>
                        </tr>
                    </tbody>
                    </table>

                </div>
            </div>




            <div class="mx-auto text-xl leading-normal text-justify px-2 md:px-32  bg-gray-50 pb-10">

                <h2 class="tituloH2Co text-2xl md:text-3xl">Ventajas</h2>
                <ul class="h2ul list-disc">
                    <li class="h2li">
                        <p class="h2parrafo text-lg md:text-xl"><span class="font-semibold text-pink-700">Ahorro: </span>Evita los altos costes de alquiler de un local, luz, agua, internet, etc.</p>
                    </li>
                    <li class="h2li">
                        <p class="h2parrafo text-lg md:text-xl"><span class="font-semibold text-pink-700">Sinergias: </span>Te permitirá colaborar con profesionales de otros sectores y establecer nuevas oportunidades de colaboración</p>
                    </li>
                    <li class="h2li">
                        <p class="h2parrafo text-lg md:text-xl"><span class="font-semibold text-pink-700">Amplia tus contactos: </span>Nuevos compañeros, nuevos círculos, nuevas oportunidades que como tu han optado por Quelqum para su espacio de Coworking en Santiago de Compostela.</p>
                    </li>
                    <li class="h2li">
                        <p class="h2parrafo text-lg md:text-xl"><span class="font-semibold text-pink-700">Ya no estás solo: </span>Tras casi dos años de aislamiento, la necesidad de contacto social parece que se hace cada vez más evidente. El teletrabajo no ha solucionado nuestra necesidad de relacionarnos y compartir. Aquí, no estarás solo. Podrás compartir cafés, ideas, problemas y alegrías. Todo lo que tú quieras.</p>
                    </li>
                    <li class="h2li">
                        <p class="h2parrafo text-lg md:text-xl"><span class="font-semibold text-pink-700">Formación: </span>Podrás acceder a precios especiales a nuestros talleres y cursos, así como proponernos todas aquellas actividades que redunden en el bienestar del grupo.</p>
                    </li>
                </ul>
            </div>





            <div class="mx-auto text-xl leading-normal text-justify px-2 md:px-32 " >

                <h2 class="tituloH2Co text-2xl md:text-3xl">Ubicación</h2>
                <p class="h2parrafo text-lg md:text-xl pb-2">
                    <span class="text-3xl text-pink-700">E</span>l centro es de fácil acceso y está bien comunicado. Se encuentra a 800 metros de la estación intermodal de <strong>Santiago de Compostela</strong>, a 4 minutos de la AP9 y de la AP53.
                </p>

                <p class="h2parrafo text-lg md:text-xl pb-1">
                <span class="text-3xl text-pink-700">C</span>uenta con parada de bus y taxi a escasos metros. Las líneas de autobús que llegan a esta zona son el número 6, 12, C5, C6 y P3.
                </p>
                <p class="h2parrafo text-lg md:text-xl pb-1">
                <span class="text-3xl text-pink-700">A</span>demás, se trata de una zona que cuenta con multitud de aparcamientos para poder asistir con el coche particular cómodamente
                </p>
                <div class="container pb-10">
                    <div class="w-full rounded items-center">
                        <img class="mx-auto pt-4" src="{{asset('/img/resto/Plano.jpg')}}"
                            alt="Ubicaciòn coworking en Santiago de Compostela">
                    </div>
                </div>
            </div>





            <div class="mx-auto text-xl leading-normal text-justify px-2 md:px-32  bg-gray-50">

                <h2 class="tituloH2Co text-2xl md:text-3xl">Sobre nosotros</h2>
                <img class="mx-auto" src="{{asset('/img/resto/Collage.jpg')}}" alt="Instalaciones de coworking en Santiago de Compostela">
                <p class="h2parrafo text-lg md:text-xl">
                <span class="text-3xl text-pink-700">E</span>n Quelqum, siempre hemos apostado decididamente por el empleo, con altos niveles de inserción de nuestros alumnos.
                </p>
                <p class="h2parrafo text-lg md:text-xl" >
                    <span class="text-3xl text-pink-700">A</span>hora queremos dar un paso más facilitando a emprendedores, profesionales independientes y pymes de <strong>Santiago de Compostela</strong>, compartir no solo el espacio, sino también el talento y los conocimientos, impulsando sinergias y colaboraciones y haciendo del trabajo una mejor experiencia.
                </p>
                <p class="h2parrafo text-lg md:text-xl pb-10">
                <span class="text-3xl text-pink-700">P</span>onemos a vuestra disposición un espacio de coworking en Santiago de Compostela que os permitirá abaratar los costes de estructura propios de una oficina tradicional.
                Puedes traer tu ordenador, o utilizar los nuestros (consultar condiciones)
                </p>
            </div>



            <div class="mx-auto text-xl leading-normal text-justify px-2 md:px-32 pb-10" >
                <a id="contactanos"></a>
                <h2 class="tituloH2Co text-xl md:text-3xl">Contacta con nosotros</h2>
                <div class="pt-3 pb-6 mb-6">

                    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                        <x-flash-message/>
                        <div class="bg-white  shadow-md sm:rounded-lg md:w-3/4 mx-auto">
                            <div class="p-6 bg-white border-b border-gray-200 ">
                                <form method="POST"  action="{{route('home.store')}}#contactanos">
                                    @csrf
                                    <div class="bg-pink-400 h-10">
                                    <p class="text-lg md:text-x2xl   text-white text-center ">FORMULARIO DE CONTACTO</p>
                                    </div>
                                    <div class="mt-4">
                                        <x-form-input name="name" label="Nombre y apellidos" />
                                    </div>
                                    <div class="md:grid md:grid-cols-3 md:gap-2">
                                        <div class="col-span-2">
                                            <x-form-input type="email"  name="correo" label="Correo electrónico" />
                                        </div>
                                        <div >
                                            <x-form-input name="telefono" label="Teléfono" />
                                        </div>
                                    </div>

                                    <div class="">
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
            </div>

    </article>


@slot('footer')
    <x-footer/>
@endslot
@push('js')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Coworking Quelqum",
      "description": "Coworking en Santiago de Compostela",
      "image": "https://coworking.quelqum.com/img/resto/Instalaciones1.jpg",
      "@id": "",
      "url": "https://coworking.quelqum.com/",
      "telephone": "981 939 061",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Severino Riveiro Tomé, 9-10 Bajo",
        "addressLocality": "Santiago de Compostela",
        "postalCode": "15702",
        "addressCountry": "ES"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 42.8638554,
        "longitude": -8.5440727
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday"
        ],
        "opens": "08:00",
        "closes": "00:00"
      }
    }
    </script>





@endpush

</x-app-layout>
{{--
  <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <img class="w-72" src="{{asset('/img/logo/PerroAmigo.png')}}" alt="">
            <div class="w-full md:w-3/4  p-6">
                <h1 class=" text-white font-bold text-4xl text-opacity-100">CoWorking en Santiago de Compostela</h1>
                <p class="h2parrafo text-lg md:text-xl text-white   mt-4">Comparte espacio, talento y  conocimientos, impulsando sinergias y colaboraciones y haciendo del trabajo una mejor experiencia.</p>
            </div>
        </div>
--}}
