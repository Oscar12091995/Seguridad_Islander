@extends('navigation')

@section('contacto')
{{-- Sección portada de contacto --}}
<section>
    <div class="bg-center bg-cover" >
        <div class="bg-center bg-cover w-full flex items-center overflow-hidden justify-center" style="background-image: url({{asset('images/pexels-porapak-apichodilok-346734.jpg')}}); height: 80vh;">
            <div class="items-center justify-center w-screen h-screen flex flex-col bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">
                <div class="items-center justify-center md:w-1/2 w-full shadow-md p-5 h-auto rounded-lg blur-3 flex flex-col col-span-12">
                    <span class=" w-96 border-t-4 border-solid border-blue-700"></span>
                    <h2 class="text-white text-5xl font-extrablod text-center wow animated fadeInLeft">Contáctanos!</h2>
                </div>
            </div>          
        </div>
    </div>
</section>
{{-- Fin sección portada de contacto --}}  

{{-- Sección formulario de contacto --}}
<section class="w-full md:mb-20 md:mt-8">
    <div class="flex container items-center bg-white">
        <!-- COMPONENT CODE -->
        <div class="container mx-auto my-4 px-4 lg:px-20">
            <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                    <div class="flex flex-col">
                        <h1 class="mb-2 text-4xl font-black tracking-tighter text-blue-900  md:text-5xl title-font block wow animated zoomIn ">Envíanos tu mensaje!</h1>
                    </div>      

                    {{-- notificicacion --}}
                    @if (session()->has('flash'))
                    <div class="bg-green-500 shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg block mb-3 my-3" id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
                        <div class="bg-green-500 flex justify-between items-center py-2 px-3 bg-clip-padding border-b border-green-400 rounded-t-lg alert-del">
                          <p class="font-bold text-white flex items-center">
                            ¡Mensaje Recibido!</p>
                          <div class="flex items-center">
                            <button type="button" class="btn-close btn-close-white box-content w-4 h-4 ml-2 text-white border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-white hover:opacity-75 hover:no-underline alert-del" data-tip="hello" class="tooltip">><i class="fas fa-times"></i></button>
                          </div>
                        </div>
                        <div class="p-3 bg-green-500 rounded-b-lg break-words text-white">
                          {{session()->get('flash')}}
                        </div>
                      </div> 
                    @endif
                    {{-- fin notificacion --}}

                   <form action="{{route('messages')}}" role="form" method="POST">
                        @csrf
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input name="nombre" id="nombre"  class="w-full bg-gray-200 text-blue-900 mt-2 p-3 rounded-lg focus:border-blue-900 wow animated fadeInUp" type="text" placeholder="Nombre*" required>
                        <input name="apellido" id="apellido"  class="w-full bg-gray-200 text-blue-900 mt-2 p-3 rounded-lg focus:border-blue-900 wow animated fadeInUp" type="text" placeholder="Apellido*" required>
                        <input name="correo" id="correo"  class="w-full bg-gray-200 text-blue-900 mt-2 p-3 rounded-lg focus:border-blue-900 wow animated fadeInUp" type="email" placeholder="Email*" required>
                        <input name="telefono" id="telefono"  class="w-full bg-gray-200 text-blue-900 mt-2 p-3 rounded-lg focus:border-blue-900 wow animated fadeInUp" type="tel" placeholder="Telefono*" required>
                    </div>
                    <div class="my-4">
                        <textarea name="descripcion" id="descripcion" placeholder="Servicio*" class="w-full h-32 bg-gray-200 text-blue-900 mt-2 p-3 rounded-lg focus:border-blue-900 wow animated fadeInUp" required></textarea>
                    </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline wow animated fadeInUp">
                            Enviar
                        </button>
                    </div>
                   </form>

            </div>
    
                <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-blue-900 rounded-2xl wow animated fadeInUp">
                    <div class="flex flex-col text-white">
                        <h1 class="font-bold uppercase text-4xl my-4">Nuestras oficinas</h1>
                        <p class="text-gray-300 text-justify">"En Seguridad Industrial Islander S.A de C.V <br> Tenemos conciencia y aceptamos que cualquier lesión, enfermedad e impacto ambiental 
                            negativo a las instalaciones se puede prevenir".
                        </p>
    
                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <div class="flex flex-col">
                                <i class="fas fa-map-marker-alt pt-2 pr-2" ></i>
                            </div>
                            <div class="flex flex-col justify-center">
                                <h2 class="text-2xl">Ubicación</h2>
                                <p class="text-gray-300 text-justify">208 Poniente,  
                                    Col. Alvarado,  
                                    Linares N.L, C.P 67710</p>
                            </div>
                        </div>
              
                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <div class="flex flex-col">
                                <i class="fas fa-phone-alt pt-2 pr-2"></i>
                            </div>
                            <div class="flex flex-col text-gray-300">
                                <h2 class="text-2xl">Llamanos!</h2>
                                <p class="text-sm">En Islander estamos para atenderte:</p>
                                <p>Tel: 821-117-77-41</p>
                                <p>Tel: 821-105-02-88</p>
                            </div>
                        </div>
              
                    </div>
                </div>
        </div>
    </div>
        <!-- COMPONENT CODE -->
  
</section>
{{-- Fin sección de contacto
     --}}
@endsection

