

@extends('navigation')


@section('nosotros')

{{-- Sección portada nosotros--}}
<section>
    <div class="bg-center bg-cover" >
        <div class="bg-center bg-cover w-full flex items-center overflow-hidden justify-center" style="background-image: url({{asset('images/industrial-1636390_1920.jpg')}}); height: 80vh;">
            <div class="items-center justify-center w-screen h-screen flex flex-col bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">
                <div class="items-center justify-center md:w-1/2 w-full shadow-md p-5 h-auto rounded-lg blur-3 flex flex-col col-span-12">
                    <h4 class=" w-96 border-t-4 border-solid border-blue-700"></h4>
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
          <img alt="..." class="w-full h-full object-cover rounded-lg shadow-lg wow animated fadeInRight" src="{{asset('images/seguridad.jpg')}}">
        </div>
        <div class="w-full md:w-5/12 ml-auto mr-auto px-4 mt-10">
          <div class="md:pr-12">
            <h3 class="mb-2 text-4xl font-black tracking-tighter text-blue-900  md:text-5xl title-font wow animated zoomIn">Acerca de Nosotros</h3>
            <h4 class="w-11/12 border-t-4 border-solid border-blue-700"></h4>
            <p class="mt-4 text-lg text-justify">
              <span class="text-blue-900">ISLANDER</span> es empresa que nace por iniciativa de especialistas con más experiencia en el sector 
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
        <h3 class="text-center text-2xl text-white font-bold  animated fadeInLeft infinite">
          En el trabajo identificamos, evaluamos y controlamos los riesgos oportunamente..
        </h3>
      </div>
  </section>
  {{-- Fin sección baner --}}

  {{-- Sección política --}}
    <section class="w-full">
        <div class="container flex flex-col items-center px-5 mx-auto  md:flex-row lg:px-28">
            <div class="flex flex-col items-start w-full pt-0 mb-16 text-left  lg:flex-grow md:w-1/2 xl:mr-20 md:pr-24 md:mb-0">
            <h1 class="mb-2 text-4xl font-black tracking-tighter text-blue-900  md:text-5xl title-font wow animated zoomIn "> Politica </h1>
            <h4 class="w-48 border-t-4 border-solid border-blue-700"></h4>
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
            <img class="object-cover object-center rounded-lg wow animated fadeInRight" src="{{asset('images/politica.jpg')}}">
            </div>
        </div>
    </section>
    {{-- Fin sección política --}}
  
    {{-- Sección valores --}}
    <section class="px-48 my-10">
        <div class="hidden lg:block">
            <div class="items-center text-center justify-center w-full flex flex-col col-span-12">
                <h3 class="mb-2 text-2xl font-black tracking-tighter text-blue-900  md:text-5xl title-font wow animated zoomIn">Nuestros Valores</h3>
                <h4 class="w-96 border-t-4 border-solid border-blue-700"></h4>
            </div>
            <ul class="flex my-12 space-x-12 justify-center">
              <li><a href="#" class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Confianza</a></li>
              <li><a href="#" class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Humildad</a></li>
              <li><a href="#" class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Flexibilidad</a></li>
              <li><a href="#" class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Confidencialidad</a></li>
              <li><a href="#" class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Responsabilidad</a></li>
              <li><a href="#" class="text-2xl font-semibold text-gray-600 wow animated fadeIn">Servicio</a></li>
            </ul>
        </div>
    </section>
    {{-- Fin sección valores --}}

    {{-- Sección cultura --}}
    <section class="my-12 hidden lg:block">
        <div class="items-center text-center justify-center w-full flex flex-col sm:col-span-12">
            <h3 class="mb-2 text-2xl font-black tracking-tighter text-blue-900  md:text-5xl title-font wow animated zoomIn">Proceso Cultural</h3>
            <h4 class="w-96 border-t-4 border-solid border-blue-700"></h4>
        </div>
        <div class="w-full py-6 px-36">
            <div class="flex">
              <div class="w-1/4">
                <div class="relative mb-2">
                  <div class="w-10 h-10 mx-auto bg-blue-500 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
                    <span class="text-center text-white w-full">
                        <span class="text-center text-white w-full">
                            <i class="far fa-check-circle"></i>  
                        </span>
                    </span>
                  </div>
                </div>
          
                <div class="text-xs text-center md:text-base wow animated fadeInRight">Indeferencia</div>
              </div>
          
              <div class="w-1/4">
                <div class="relative mb-2">
                  <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1 wow animated fadeInRight">
                      <div class="w-0 bg-blue-300 py-1 rounded wow animated fadeInRight" style="width: 100%;"></div>
                    </div>
                  </div>
          
                  <div class="w-10 h-10 mx-auto bg-pink-500 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
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
                      <div class="w-0 bg-pink-300 py-1 rounded wow animated fadeInRight" style="width: 100%;"></div>
                    </div>
                  </div>
          
                  <div class="w-10 h-10 mx-auto bg-green-500 border-2 border-gray-200 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
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
                      <div class="w-0 bg-green-300 py-1 rounded wow animated fadeInRight" style="width: 100%;"></div>
                    </div>
                  </div>
          
                  <div class="w-10 h-10 mx-auto bg-purple-500 border-2 border-gray-200 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
                    <span class="text-center text-white w-full">
                        <span class="text-center text-red w-full">
                            <i class="far fa-check-circle"></i>  
                        </span>
                    </span>
                  </div>
                </div>
          
                <div class="text-xs text-center md:text-base wow animated fadeInRight">Garantizar la Sostentabilidad</div>
              </div>

              <div class="w-1/4">
                <div class="relative mb-2">
                  <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-purple-300 rounded items-center align-middle align-center flex-1 wow animated fadeInRight">
                      <div class="w-0 bg-purple-300 py-1 rounded wow animated fadeInRight" style="width: 0%;"></div>
                    </div>
                  </div>
          
                  <div class="w-10 h-10 mx-auto bg-yellow-500 border-2 border-gray-200 rounded-full text-lg text-white flex items-center wow animated fadeInRight">
                    <span class="text-center text-yellow-600 w-full">
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
@stop
