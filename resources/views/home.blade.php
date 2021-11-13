<x-app-layout>
    @if (session('ìnfo'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif
    <section class="bg-cover" style="background-image: url({{asset('storage/img/portada/Portada2.png')}})">
        <div class ="grid grid-cols-3 h-72 my-auto">
            <div class="col-span-2 pt-10 mx-14 my-auto">
                <h1 class=" text-white  font-extrabold text-4xl text-opacity-100">CoWorking en Santiago de Compostela</h1>
                <p class="h2parrafo text-white font-extrabold  text-xl mt-4">Comparte espacio, talento y  conocimientos, impulsando sinergias y colaboraciones y haciendo del trabajo una mejor experiencia.</p>
            </div>
            <div class="items-center  mx-auto my-auto">
                <img class="w-36" src="{{asset('storage/img/logo/PerroAmigo.png')}}" alt="">
            </div>
        </div>

    </section>
    <section class="w-full p-0">
        <div class="mx-auto text-xl leading-normal text-justify px-32 w-screen bg-pink-50">
            <a name="sobre-nosotros"></a>
            <h2 class="tituloH2Co font-bold">Sobre nosotros</h2>
            <img class="float-left w-72 mr-4" src="{{asset('storage/img/resto/Collage.png')}}" alt="">
            <p class="h2parrafo">
            <span class="text-3xl text-pink-700">E</span>n Quelqum, siempre hemos apostado decididamente por el empleo, con altos niveles de inserción de nuestros alumnos.
            </p>
            <p class="h2parrafo" >
                <span class="text-3xl text-pink-700">A</span>hora queremos dar un paso más facilitando a emprendedores, profesionales independientes y pymes compartir, no solo el espacio, sino también el talento y los conocimientos, impulsando sinergias y colaboraciones y haciendo del trabajo una mejor experiencia.
            </p>
            <p class="h2parrafo pb-10">
            <span class="text-3xl text-pink-700">P</span>onemos a vuestra disposición un coworking que os permitirá abaratar los costes de estructura propios de una oficina tradicional.
            Puedes traer tu ordenador, o utilizar los nuestros (consultar condiciones)
            </p>
        </div>
        <hr class="bg-pink-700 h-2 opacity-25">
        <div class="mx-auto text-xl leading-normal text-justify px-32  bg-pink-100">
            <a name="nuestros-espacios"></a>
            <h2 class="tituloH2Co font-bold ">Nuestros Espacios </h2>
            <p class="h2parrafo pb-2">
                <span class="text-3xl text-pink-700">C</span>onoce nuestros <strong>puestos de trabajo compartidos</strong> en Coworking, <strong>fijos o nómadas</strong>.
                </p>
            <img class="float-left w-72 mr-4 " src="{{asset('storage/img/resto/MesaCompartida.jpg')}}" alt="">
            <img class="float-right w-72 ml-4 " src="{{asset('storage/img/resto/Despacho.jpg')}}" alt="">

            <p class="h2parrafo pb-1">
            <span class="text-3xl text-pink-700">D</span>espachos privados: Disponemos de oficinas y <strong>despachos privados</strong> para tu proyecto.
            </p>
            <p class="h2parrafo pb-1">
            <span class="text-3xl text-pink-700">A</span>lquiler de salas de reuniones de diferentes tamaños, incluida una de 90 metros cuadrados, con el equipamiento audiovisual necesario
            </p>
            <p class="h2parrafo pb-10">
            <span class="text-3xl text-pink-700">A</span>ulas de formación homologadas, equipadas con Conexión wifi, Televisión, Equipo audiovisual, Pizarra interactiva, Rotafolio, Mobiliario confortable
            </p>

        </div>
        <hr class="bg-pink-700 h-2 opacity-25">
        <div class="mx-auto text-xl leading-normal text-justify px-32  bg-pink-50">
            <a name="servicios"></a>
            <h2 class="tituloH2Co font-bold">Servicios</h2>
            <p class="h2parrafo"><span class="text-3xl text-pink-700">U</span>na nueva forma de trabajar y relacionarse, en la que por fin los profesionales pueden compartir un espacio de trabajo y desarrollar nuevas fórmulas de colaboración.</p>
            <p class="h2parrafo"><span class="text-3xl text-pink-700">N</span>uestras instalaciones están pensadas para facilitar el desarrollo de la actividad profesional en óptimas condiciones y con un máximo rendimiento, con buena ubicación, luz natural, mobiliario funcional y dotadas de servicios de calefacción, fibra óptica, limpieza, microondas y máquinas de vending, reduciendo su inversión inicial.
            <p class="h2parrafo"><span class="text-3xl text-pink-700">E</span>l local reúne las condiciones higiénicas, acústicas, de habitabilidad y de seguridad adecuadas y dispone de los medios necesarios para facilitar la accesibilidad universal, de forma que no exista discriminación para las personas con discapacidad.<p>
            <p class="h2parrafo pb-10"><span class="text-3xl text-pink-700">E</span>s un espacio concebido para trabajar en las mejores condiciones, por lo que, desde la pandemia, establecimos un Plan de contingencias, que contempla, entre otros, distancia social, con 2m de distancia entre cada puesto de trabajo, alfombras desinfectantes, dispensadores de gel, desinfección diaria o termómetros para control de temperatura.</p>
            <div class="container grid grid-cols-3 gap-2 mx-auto pb-10">
                <div class="w-full rounded">
                    <img src="{{asset('storage/img/resto/Instalaciones1.jpg')}}"
                        alt="image">
                </div>
                <div class="w-full rounded">
                    <img src="{{asset('storage/img/resto/Instalaciones2.jpg')}}" alt="">
                </div>
                <div class="w-full rounded">
                    <img src="{{asset('storage/img/resto/Instalaciones3.jpg')}}" alt="">
                </div>
            </div>




        </div>
        <hr class="bg-pink-700 h-2 opacity-25">
        <div class="mx-auto text-xl leading-normal text-justify px-32  bg-pink-100">
            <a name="tarifas"></a>
            <h2 class="tituloH2Co font-bold">Tarifas</h2>
            <div class="pb-24">
                <table class="mx-auto ">
                    <thead>
                    <tr>
                        <th class="border border-pink-900 px-4 py-2 bg-pink-400 text-white">Servicio</th>
                        <th class="border border-pink-900 px-4 py-2 bg-pink-400 text-white">Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border border-pink-900 px-4 py-2">Mesa fija </td>
                        <td class="border border-pink-900 px-4 py-2">120€</td>
                    </tr>
                    <tr class="bg-emerald-200">
                        <td class="border border-pink-900 px-4 py-2">Mesa fija Media jornada</td>
                        <td class="border border-pink-900 px-4 py-2">80€</td>
                    </tr>
                    <tr>
                        <td class="border border-pink-900 px-4 py-2">Nómada </td>
                        <td class="border border-pink-900 px-4 py-2">12€/h</td>
                    </tr>
                    <tr>
                        <td class="border border-pink-900 px-4 py-2">Despacho fijo al mes</td>
                        <td class="border border-pink-900 px-4 py-2">220€</td>
                    </tr>
                    <tr>
                        <td class="border border-pink-900 px-4 py-2">Despacho Horas sueltas </td>
                        <td class="border border-pink-900 px-4 py-2">20€</td>
                    </tr>

                    <tr>
                        <td class="border border-pink-900 px-4 py-2">Aulas formación</td>
                        <td class="border border-pink-900 px-4 py-2">25€/h</td>
                    </tr>
                    <tr>
                        <td class="border border-pink-500 px-4 py-2">Oficina virtual:
                            <ul class="h2ul list-disc list-inside px-4 text-xs">
                                <li class="h3li">Uso de la dirección como domicilio comercial, social y fiscal.</li>
                                <li class="h3li">Uso de la dirección en sus espacios web, sus documentos y tarjetas..</li>
                                <li class="h3li">Perfil visible en nuestra web.</li>
                                <li class="h3li">Rótulo exterior, visibilidad en la entrada</li>
                            </ul>
                        </td>
                        <td class="border border-pink-500 px-4 py-2">25€</td>
                    </tr>
                    <tr>
                        <td class="border border-pink-500 px-4 py-2">Oficina virtual:
                            <ul class="h2ul list-disc list-inside px-4 text-xs">
                                <li class="h3li">Uso de la dirección como domicilio comercial, social y fiscal.</li>
                                <li class="h3li">Uso de la dirección en sus espacios web, sus documentos y tarjetas.</li>
                                <li class="h3li">Perfil visible en nuestra web.</li>
                                <li class="h3li">Rótulo exterior, visibilidad en la entrada</li>
                                <li class="h3li">Recepción de correspondencia.</li>
                                <li class="h3li">Servicio de recepción de paquetería</li>
                                <li class="h3li">Aviso de recepción de cartas certificadas o urgentes.</li>
                                <li class="h3li">Servicio de recepción de paquetería</li>
                                <li class="h3li">Uso de nuestra sala de reuniones (consultar las horas a disposición).</li>
                            </ul>
                        </td>
                        <td class="border border-pink-500 px-4 py-2">60€</td>
                    </tr>



                </tbody>
                </table>

            </div>

        </div>
        <hr class="bg-pink-700 h-2 opacity-25">
        <div class="mx-auto text-xl leading-normal text-justify px-32  bg-pink-50 pb-10">
            <a name="ventajas"></a>
            <h2 class="tituloH2Co font-bold">Ventajas</h2>
            <ul class="h2ul list-disc">
                <li class="h2li">
                    <p class="h2parrafo"><span class="text-2xl font-semibold text-pink-700">Ahorro: </span>Evita los altos costes de alquiler de un local, luz, agua, internet, etc.</p>
                </li>
                <li class="h2li">
                    <p class="h2parrafo"><span class="text-2xl font-semibold text-pink-700">Sinergias: </span>Te permitirá colaborar con profesionales de otros sectores y establecer nuevas oportunidades de colaboración</p>
                </li>
                <li class="h2li">
                    <p class="h2parrafo"><span class="text-2xl font-semibold text-pink-700">Amplia tus contactos: </span>Nuevos compañeros, nuevos círculos, nuevas oportunidades</p>
                </li>
                <li class="h2li">
                    <p class="h2parrafo"><span class="text-2xl font-semibold text-pink-700">Ya no estás solo: </span>Tras casi dos años de aislamiento, la necesidad de contacto social parece que se hace cada vez más evidente. El teletrabajo no ha solucionado nuestra necesidad de relacionarnos y compartir. Aquí, no estarás solo. Podrás compartir cafés, ideas, problemas y alegrías. Todo lo que tú quieras.</p>
                </li>
                <li class="h2li">
                    <p class="h2parrafo"><span class="text-2xl font-semibold text-pink-700">Formación: </span>Podrás acceder a precios especiales a nuestros talleres y cursos, así como proponernos todas aquellas actividades que redunden en el bienestar del grupo.</p>
                </li>
            </ul>

        </div>
    </section>
<x-separadorFooter/>
<x-footer/>
</x-app-layout>
{{--
  <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <img class="w-72" src="{{asset('storage/img/logo/PerroAmigo.png')}}" alt="">
            <div class="w-full md:w-3/4  p-6">
                <h1 class=" text-white font-bold text-4xl text-opacity-100">CoWorking en Santiago de Compostela</h1>
                <p class="h2parrafo text-white  text-xl mt-4">Comparte espacio, talento y  conocimientos, impulsando sinergias y colaboraciones y haciendo del trabajo una mejor experiencia.</p>
            </div>
        </div>
--}}
