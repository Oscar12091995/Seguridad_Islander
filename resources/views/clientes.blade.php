
@extends('navigation')

@section('clientes')
{{-- Sección portada clientes --}}
<section>
    <div class="bg-center bg-cover" >
        <div class="bg-center bg-cover w-full flex items-center overflow-hidden justify-center" style="background-image: url({{asset('images/bombero.jpg')}}); height: 80vh;">
            <div class="items-center justify-center w-screen h-screen flex flex-col bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">
                <div class="items-center justify-center md:w-1/2 w-full shadow-md p-5 h-auto rounded-lg blur-3 flex flex-col col-span-12">
                    <span class=" w-96 border-t-4 border-solid border-blue-700"></span>
                    <h1 class="text-white text-5xl font-extrablod text-center wow animated fadeInLeft">Nuestros Clientes</h1>
                </div>
            </div>          
        </div>
    </div>
</section>
{{-- Fin sección clientes --}}

{{-- Sección compromiso--}}
<section class="w-full mt-12">
    <div class="container flex flex-col items-center px-5 mx-auto  md:flex-row lg:px-28">
        <div class="flex flex-col items-start w-full pt-0 mb-16 text-left  lg:flex-grow md:w-1/2 xl:mr-20 md:pr-24 md:mb-0  wow animated zoomIn">
            <h1 class="mb-2 text-2xl font-black tracking-tighter text-blue-900  md:text-5xl title-font"> Nuestro Compromiso </h1>
            <p class="mb-8 text-lg text-justify text-blueGray-600"> Para <span class="text-blue-900">Seguridad Industrial Islander S.A. de C.V.</span> nuestros clientes
            es nuestra mayor prioridad, es por ello que estamos comprometidos con ofrecer nuestros servicios con calidad, responsabilidad y profesionalismo.</p>
            </div>
            <div class="w-full lg:w-5/6 lg:max-w-lg md:w-1/2">{{-- pexels-sora-shimazaki-5673488 --}}
            <img class="object-center rounded-lg wow animated fadeInLeft" width="100%" height="100%"  alt="comprometidos con la seguridad" src="{{asset('images/pexels-sora-shimazaki-5673488.jpg')}}">
        </div>
    </div>
</section>
{{--Fin sección compromiso --}}

{{-- Sección slide --}}
<section class="mt-12">
    <div class="slider w-full">
        <div class="slide-track text-center items-center justify-center h-64 w-full">
            {{-- <div class="slide"><img src="{{asset('images/industrial-1636390_1920.jpg')}}" alt=""></div> --}}
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="AJEMEX" src="{{asset('images/AJE.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="INMSO" src="{{asset('images/INMSO.jpg')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="APTIV" src="{{asset('images/APTIV.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="FINSA" src="{{asset('images/FINSA.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="KARCHER" src="{{asset('images/KARCHER.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="KELLOGS" src="{{asset('images/KELLOGS.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-8 object-cover" alt="KRISTAL" src="{{asset('images/KRISTAL.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="LINARES" src="{{asset('images/LINARES.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="MARS" src="{{asset('images/MARS.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="OSTER" src="{{asset('images/OSTER.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="PALMEX" src="{{asset('images/PALMEX.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="object-cover" alt="SAG" src="{{asset('images/SAG.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="SHOWA" src="{{asset('images/SHOWA.png')}}" alt=""></div>
            <div class="slide object-center w-screen"><img class="mx-4 object-cover" alt="SIGMA" src="{{asset('images/SIGMA.png')}}" alt=""></div>
        </div>
    </div>
</section>
{{-- Fin sección slide --}}

@include('curso')
@endsection