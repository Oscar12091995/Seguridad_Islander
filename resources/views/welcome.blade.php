    @extends('navigation') 

    @section('content')
    
        {{-- Sección Portada --}}
        <section>
                <div class="bg-center bg-cover md:w-full md:h-screen flex items-center justify-center" style="background-image: url({{asset('images/helmet-1636348_1920.jpg')}});">
                    <div class="w-screen h-screen justify-center bg-black bg-opacity-50 transition duration-300 ease-in-out">
                        <div class="text-white w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center ">
                          <img src="{{asset('images/LOGO.png')}}" class="wow animated fadeInLeft" alt="Seguridad Industrial Islander logo">
                        </div>
                    </div>           
                </div>
        </section>
        {{-- Fin sección portada --}}

        {{-- Seccion Misión y Visión --}}
        <section class="bg-white mb-12">
            <div class="md:flex bg-blue-900">
                <div class="w-full h-96 overflow-hidden bg-cover bg-center sm:w-1/2" style="background-image: url({{asset('images/welder-gae79187c5_1920.jpg')}});">
                    <div class="bg-opacity-50 flex items-center text-center h-full bg-blue-900 wow animated slideInLeft">
                        <div class="md:mx-auto max-w-xl px-3">
                            <i class="text-5xl text-white font-semibold fas fa-university"></i>
                            <h1 class="text-2xl text-white font-semibold ">Nuestra Visión</h1>
                            <p class="mt-2 text-white text-justify">Ser un socio estratégico entre nuestros clientes a través de la reducción del <br> 15 % anual de lesiones, enfermedades laborales y daños a las instalaciones, siendo corresponsables de nuestro bienestar.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="h-96 overflow-hidden bg-cover bg-center md:mt-0 sm:w-1/2" style="background-image: url({{asset('images/checklist-1919328_1920.png')}});">
                    <div class="bg-opacity-50 flex items-center text-center h-full bg-blue-900 wow animated slideInRight">
                        <div class="md:mx-auto max-w-xl px-3">
                            <i class="text-5xl text-white font-semibold fas fa-bullseye"></i>
                            <h1 class="text-2xl text-white font-semibold">Nuestra Misión</h1>
                            <p class="mt-2 text-white text-justify">Brindar servicios de Consultoría, Estudios, Programas, Capacitación y Auditorías de la más alta calidad en materia de Seguridad y Salud en el Trabajo (SST) bajo la normatividad vigente de STPS, OSHA, INSHT y otros organismos internacionales certificado en la materia.</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--Fin eccion Misión y Visión --}}

        {{-- Sección que realizamos --}}
        <section class="bg-white z-0">
            <div class="items-center flex flex-wrap bg-white z-0">
                <div class="w-full md:w-5/12 ml-auto mr-auto md:pl-12 bg-white">
                  <img alt="Seguridad Incendios" width="100%" height="100%" class="object-cover rounded-lg shadow-lg z-0" src="{{asset('images/fire-fighting-4495488_640.jpg')}}">
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto md:px-4">
                  <div class="md:pr-12 text-center md:py-2">
                    <h2 class="mb-8 mt-8 text-2xl font-black tracking-tighter text-blue-900  md:text-5xl title-font wow animated zoomIn">¿Qué Realizamos?</h2>
                    <p class="mt-4 text-lg text-black leading-relaxed text-justify px-3 wow animated zoomIn">
                      En <span class="text-blue-900 font-bold">Seguridad Industrial Islander S.A. de C.V.</span> con nuestra experiencia en el sector 
                      de Seguridad y Salud en el Trabajo, (SST) comprometida a ofrecer los más altos estándares mundiales de 
                      consultoría, capacitación, estudios y tramites a las empresas.
                    </p>
                  </div>
                </div>
              </div>
        </section>
        {{-- Fin sección que realizamos --}}
        
        {{-- Sección --}}
        <section class="pb-10 mb-10 mt-10 bg-white">
          <div class="mx-8 sm:px-4 lg:px-48  wow animated fadeInUp">
            <div class="flex flex-wrap">
              <div class="lg:pt-12 w-full md:w-4/12 text-center">
                <div class=" flex flex-col min-w-0 break-words w-full mb-8">
                    <div class="flex-auto">
                      <div class="text-white text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-900">
                        <i class="fas fa-tasks text-2xl"></i>
                      </div>
                        <h3 class="text-xl font-semibold text-blue-900">Consultoría</h3>
                        <p class="mb-2 text-blue-900">
                          En Islander nos enfocamos en la consultoría PASST para una Empresa Segura.
                        </p>  
                    </div>          
                </div>
              </div>
              <div class="lg:pt-12 w-full md:w-4/12 text-center ">
                <div class="flex flex-col min-w-0 break-words w-full mb-8">
                  <div class="flex-auto">
                    <div class="text-white text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-900">
                      <i class="fas fa-book-open text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-blue-900">Estudio de Riesgos.</h3>
                    <p class="mb-2 text-blue-900">
                      En Islander se realizan diversos estudios para garantizar la Seguridad Laboral.
                    </p>
                  </div>
                </div>
              </div>
              <div class="lg:pt-12 w-full md:w-4/12 text-center">
                <div class="flex flex-col min-w-0 break-words w-full mb-8">
                  <div class="flex-auto">
                    <div class="text-white text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-900">
                      <i class="fas fa-industry text-2xl cursor-pointer"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-blue-900">Programas de Seguridad</h3>
                    <p class="mb-2 text-blue-900">
                      Se desarrollan diversos programas normativos de seguridad y salud en el trabajo.
                    </p>
                  </div>
                </div>
              </div>            
            </div>
            <div class="flex flex-wrap">
              <div class="lg:pt-12 pt-6 w-full md:w-4/12 text-center" >
                <div class="flex flex-col min-w-0 break-words w-full mb-8">
                  <div class="flex-auto">
                    <div class="text-white text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-900">
                      <i class="fas fa-clipboard text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-blue-900">Auditorías</h3>
                    <p class="mb-2 text-blue-900">
                      Se realizan diversas auditorias con la finalidad de cumplir en SASST, CNSST.
                    </p>
                  </div>
                </div>
                            
              </div>
              <div class="lg:pt-12 pt-6 w-full md:w-4/12 text-center" >
                <div class="flex flex-col min-w-0 break-words w-full mb-8">
                  <div class="flex-auto">
                    <div class="text-white text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-900">
                      <i class="fas fa-chalkboard-teacher text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-blue-900">Capacitación</h3>
                    <p class="mb-2 text-blue-900">
                      En Islander nuestro sistema de capacitaciones conforme marca la regulaciones normativas.
                    </p>
                  </div>
                </div>
                            
              </div>
              <div class="lg:pt-12 pt-6 w-full md:w-4/12 text-center" >
                <div class="flex flex-col min-w-0 break-words w-full mb-8">
                  <div class="flex-auto">
                    <div class="text-white text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-900">
                      <i class="fas fa-first-aid text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-blue-900">Protección Civil</h3>
                    <p class="mb-2 text-blue-900">
                      En Islander se elabora el plan de contigencias, el visto bueno de protección civil. 
                    </p>
                  </div>
                </div>
                            
              </div>
            </div>
        </section>
        {{-- Fin ección --}}

        {{-- Sección asesoría --}}        
        <section class="bg-white">
          <div class="bg-blue-900 md:w-full h-64 py-8">
            <div class="items-center text-center pt-8 wow animated fadeInDown">
              <h3 class="text-4xl text-white mb-8 ">¿Necesitas Asesoría?</h3>            
               <a href="/contacto" class="border rounded px-8 py-6 text-2xl border-white hover:bg-white hover:text-blue-900 bg-blue-900 text-white">
                Contáctanos
               </a>
            </div>
          </div>
        </section>
        {{-- Fin sección asesoría --}}

        {{-- Sección conteo --}}
        <section class="p-6 bg-white dark:text-blue-900">
          <div class="container mx-auto grid justify-center grid-cols-2 text-center lg:grid-cols-3 lg:px-48">
            <div class="flex flex-col justify-start m-2 lg:m-6 wow animated rotateIn">
              <p class="text-4xl font-bold leading-none lg:text-6xl text-blue-900">15+</p>
              <h3 class="text-sm sm:text-base text-blue-900">Clientes</h3>
            </div>
            <div class="flex flex-col justify-start m-2 lg:m-6 wow animated rotateIn">
              <p class="text-4xl font-bold leading-none lg:text-6xl text-blue-900">8</p>
              <h3 class="text-sm sm:text-base text-blue-900">Estudios</h3>
            </div>
            <div class="flex flex-col justify-start m-2 lg:m-6 wow animated rotateIn">
              <p class="text-4xl font-bold leading-none lg:text-6xl text-blue-900 ">35+</p>
              <h3 class="text-sm sm:text-base text-blue-900">Capacitaciones</h3>
            </div>
            <div class="flex flex-col justify-start m-2 lg:m-6 wow animated rotateIn">
              <p class="text-4xl font-bold leading-none lg:text-6xl text-blue-900">4</p>
              <h3 class="text-sm sm:text-base text-blue-900">Auditorías</h3>
            </div>
            <div class="flex flex-col justify-start m-2 lg:m-6 wow animated rotateIn">
              <p class="text-4xl font-bold leading-none lg:text-6xl text-blue-900">15+</p>
              <h3 class="text-sm sm:text-base text-blue-900">Años de experiencia</h3>
            </div>
            <div class="flex flex-col justify-start m-2 lg:m-6 wow animated rotateIn">
              <p class="text-4xl font-bold leading-none lg:text-6xl text-blue-900">10+</p>
              <h3 class="text-sm sm:text-base text-blue-900">Programas</h3>
            </div><!---->
          </div>
        </section>
        {{-- fin sección conteo--}}     
        @include('curso')
        
    @stop

    

    





    
   


