

@extends('navigation')


@section('nosotros')

{{-- Sección portada nosotros--}}
<section>
    <div class="bg-center bg-cover" >
        <div class="bg-center bg-cover w-full flex items-center overflow-hidden justify-center" style="background-image: url({{asset('images/industrial-1636390_1920.jpg')}}); height: 80vh;">
            <div class="items-center justify-center w-screen h-screen flex flex-col bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">
                <div class="items-center justify-center md:w-1/2 w-full shadow-md p-5 h-auto rounded-lg blur-3 flex flex-col col-span-12">
                    <span class=" w-96 border-t-4 border-solid border-blue-700"></span>
                    <h2 class="text-white text-5xl font-extrablod text-center wow animated fadeInLeft">¿Quiénes Somos?</h2>
                </div>
            </div>          
        </div>
    </div>
</section>
{{-- Fin sección portada --}}

{{-- Sección acerca de nosotros --}}
<section class="mt-20 w-full">
    <div class="items-center flex flex-wrap">
        <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
          <img alt="Equipo de protección personal" width="100%" height="100%" class="object-cover rounded-lg shadow-lg wow animated fadeInLeft" src="{{asset('images/seguridad.jpg')}}">
        </div>
        <div class="w-full md:w-5/12 ml-auto mr-auto px-4 mt-10">
          <div class="md:pr-12 wow animated zoomIn">
            <h1 class="mb-2 text-4xl font-black tracking-tighter text-blue-900  md:text-5xl title-font">Acerca de Nosotros</h1>
            <p class="mt-4 text-lg text-justify">
              <span class="text-blue-900">Seguridad Industrial Islander S.A de C.V</span> es una empresa que nace por iniciativa de especialistas con más experiencia en el sector 
              de Seguridad y Salud en el Trabajo, (SST) comprometida a ofrecer los más altos estándares mundiales de 
              consultoría, capacitación, estudios y tramites a las empresas de alto riesgo en México y Latinoamérica. 
            </p>
          </div>
        </div>
      </div>
</section>
{{-- Fin sección de nosotros --}}

  {{-- Sección banner--}}      
  <section class="bg-blue-900 sm:h-48 md:h-24 my-12 w-full">
      <div class="py-6 mx-10">
        <h2 class="text-center text-2xl text-white font-bold  animated fadeInLeft infinite">
          En el trabajo identificamos, evaluamos y controlamos los riesgos oportunamente...
        </h2>
      </div>
  </section>
  {{-- Fin sección baner --}}

  {{-- Sección política --}}
    <section class="w-full">
        <div class="container flex flex-col items-center px-5 mx-auto  md:flex-row lg:px-28">
            <div class="flex flex-col items-start w-full pt-0 mb-16 text-left  lg:flex-grow md:w-1/2 xl:mr-20 md:pr-24 md:mb-0  wow animated zoomIn">
              <h1 class="mb-2 text-4xl font-black tracking-tighter text-blue-900  md:text-5xl title-font "> Nuestra Politica </h1>
              <p class="mb-8 text-lg text-justify text-blueGray-600"> Las operaciones en <span class="text-blue-900">Seguridad Industrial Islander S.A. de C.V.</span>, se llevan a cabo 
                en un ambiente de trabajo seguro y con apego al cumplimiento de 
                regulaciones gubernamentales. </p>
              <p class="mb-8 text-lg text-justify text-blueGray-600">
                Para <span class="text-blue-900">Seguridad Industrial Islander S.A. de C.V.</span>, la seguridad y salud en el 
                trabajo son una condición de empleo que garantiza la continuidad y éxito de 
                nuestro negocio, a través de entrenamientos, comunicación permanente, 
                auditorias periódicas, evaluaciones continuas y una participación activa con 
                responsabilidad compartida entre empleados, clientes y proveedores.
              </p>
            
            </div>
            <div class="w-full lg:w-5/6 lg:max-w-lg md:w-1/2">
              <img class="object-cover object-center rounded-lg wow animated fadeInLeft" width="100%" height="100%" src="{{asset('images/politica.jpg')}}" alt="seguridad en resultados">
            </div>
        </div>
    </section>
    {{-- Fin sección política --}}
  
    {{-- Sección valores --}}
    <section class="px-48 my-10 sm:px-12">
        <div class="hidden lg:block sm:px-12">
            <div class="items-center text-center justify-center w-full flex flex-col col-span-12">
                <h1 class="mb-2 text-2xl font-black tracking-tighter text-blue-900  md:text-5xl title-font wow animated zoomIn">Nuestros Valores</h1>
            </div>
            <ul class="flex my-12 space-x-12 justify-center">
              <li><span class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Confianza</span></li>
              <li><span class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Humildad</span></li>
              <li><span class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Flexibilidad</span></li>
              <li><span class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Confidencialidad</span></li>
              <li><span class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Responsabilidad</span></li>
              <li><span class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Servicio</span></li>
            </ul>
        </div>
    </section>
    {{-- Fin sección valores --}}

    {{-- Sección cultura --}}
    <section class="my-12 hidden lg:block">
        <div class="items-center text-center justify-center w-full flex flex-col sm:col-span-12">
            <h1 class="mb-2 text-2xl font-black tracking-tighter text-blue-900  md:text-5xl title-font wow animated zoomIn">Proceso Cultural</h1>        </div>
        <div class="w-full py-6 px-36">
            <div class="flex">
              <div class="w-1/4">
                <div class="relative mb-2">
                  <div class="w-10 h-10 mx-auto bg-red-600 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
                    <span class="text-center text-white w-full">
                        <span class="text-center text-white w-full">
                            <i class="far fa-check-circle"></i>  
                        </span>
                    </span>
                  </div>
                </div>
          
                <div class="text-xs text-center md:text-base wow animated fadeInRight">Indiferencia</div>
              </div>
          
              <div class="w-1/4">
                <div class="relative mb-2">
                  <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1 wow animated fadeInRight">
                      <div class="w-0 bg-red-300 py-1 rounded wow animated fadeInRight" style="width: 100%;"></div>
                    </div>
                  </div>
          
                  <div class="w-10 h-10 mx-auto bg-red-600 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
                    <span class="text-center text-white w-full">
                        <span class="text-center text-white w-full">
                            <i class="far fa-check-circle"></i>  
                        </span>
                    </span>
                  </div>
                </div>
          
                <div class="text-xs text-center md:text-base wow animated fadeInRight">Cumplimiento Legal</div>
              </div>
          
              <div class="w-1/4">
                <div class="relative mb-2">
                  <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1 wow animated fadeInRight">
                      <div class="w-0 bg-yellow-200 py-1 rounded wow animated fadeInRight" style="width: 100%;"></div>
                    </div>
                  </div>
          
                  <div class="w-10 h-10 mx-auto bg-yellow-500 border-2 border-gray-200 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
                    <span class="text-center text-gray-600 w-full">
                        <span class="text-center text-white w-full">
                            <i class="far fa-check-circle"></i>  
                        </span>
                    </span>
                  </div>
                </div>
          
                <div class="text-xs text-center md:text-base wow animated fadeInRight">Sentido de Pertenencia</div>
              </div>
          
              <div class="w-1/4">
                <div class="relative mb-2">
                  <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-green-200 rounded items-center align-middle align-center flex-1 wow animated fadeInRight">
                      <div class="w-0 bg-yellow-200 py-1 rounded wow animated fadeInRight" style="width: 100%;"></div>
                    </div>
                  </div>
          
                  <div class="w-10 h-10 mx-auto bg-yellow-500 border-2 border-gray-200 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
                    <span class="text-center text-white w-full">
                        <span class="text-center text-red w-full">
                            <i class="far fa-check-circle"></i>  
                        </span>
                    </span>
                  </div>
                </div>
          
                <div class="text-xs text-center md:text-base wow animated fadeInRight">Garantizar la Sustentabilidad</div>
              </div>

              <div class="w-1/4">
                <div class="relative mb-2">
                  <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-green-300 rounded items-center align-middle align-center flex-1 wow animated fadeInRight">
                      <div class="w-0 bg-green-300 py-1 rounded wow animated fadeInRight" style="width: 0%;"></div>
                    </div>
                  </div>
          
                  <div class="w-10 h-10 mx-auto bg-green-500 border-2 border-gray-200 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
                    <span class="text-center text-yellow-500 w-full">
                        <span class="text-center text-white w-full">
                            <i class="far fa-check-circle"></i>  
                        </span>
                    </span>
                  </div>
                </div>
          
                <div class="text-xs text-center md:text-base wow animated fadeInRight">Revisión Constante de SST</div>
              </div>
            </div>
          </div>
    </section>
    {{-- Fin sección cultura --}}

    {{-- seccion --}}
    <section class="my-12 hidden lg:block">
      <div class="lg:block flex">
          <ul class="flex my-12 lg:space-x-10 sm:space-x-0 justify-center">
            <li><span class="text-2xl text-red-600 ml-0 mr-0 xl:ml-12 xl:mr-16 font-semibold wow animated fadeIn hover:text-4xl">Dependiente</span></li>
            <li><span class="text-2xl font-semibold mr-0 ml-0 xl:mr-48 xl:ml-36 text-yellow-600 wow animated fadeIn">Independiente</span></li>
            <li><span class="text-2xl font-semibold ml-0 xl:ml-8 text-green-600 wow animated fadeIn">Interdependiente</span></li>
          </ul>
        </div>
        <div class="items-center text-center justify-center w-full flex flex-col sm:col-span-12">
          <h1 class="mb-2 text-2xl font-black tracking-tighter text-blue-900  md:text-5xl title-font wow animated zoomIn">Nivel Cultural</h1>
          
      </div>
    </section>
    {{-- fin seccion --}}
@stop
