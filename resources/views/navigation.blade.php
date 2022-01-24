<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Seguridad Industrial Islander</title>

		{!! SEO::generate() !!}
     
		<link rel="shortcut icon" type="image/png" href="{{ asset('images/casco.png') }}">

        <link href="{{ asset('/css/build.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/slide.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/css/all.min.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/animate.css') }}" rel="stylesheet"> 

		

  </head>
    
	<div class="bg-blue-900 h-14 block w-full items-center fixed z-50 text-center">
	  	<h2 class="border-b-2 text-center border-transparent text-white uppercase mx-4 pt-2"><i class="fas fa-clock"></i> Lun a Vie 8:30 a 17:30 - Asistencia 24 hrs</h2>
	</div>
	<nav class="bg-white shadow mx-auto h-16 w-11/12 inset-x-0 top-10 md:top-12 fixed z-50 justify-between px-4 py-4 items-center">
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-blue-600 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-2">
			<li class="{{ Request::is( '/') ? 'active' : '' }}"><a class="text-black active px-2 py-2 hover:text-white transition-colors duration-100 transform hover:bg-blue-900 uppercase" data-toggle="tab"  href="/">Inicio</a></li>
			<li class="text-gray-300">
				<span class="border-l-2 border-gray-400"></span>
			</li>
			<li  class="{{ Request::is( 'nosotros') ? 'active' : '' }}"><a class="text-black  active px-2 py-2 hover:text-white transition-colors duration-100 transform hover:bg-blue-900 uppercase" data-toggle="tab" href="/nosotros">Nosotros</a></li>
			<li class="text-gray-300">
				<span class="border-l-2 border-gray-400"></span>
			</li>
					
			<li class="{{ ! Route::is('clientes') ?: 'active'}}"><a class="text-black  px-2 py-2 hover:text-white transition-colors duration-100 transform hover:bg-blue-900 uppercase" data-toggle="tab" href="/clientes">Clientes</a></li>
			<li class="text-gray-300">
				<span class="border-l-2 border-gray-400"></span>
			</li>
			<li class="{{ ! Route::is('contacto') ?: 'active'}}"><a class="text-black  px-2 py-2 hover:text-white transition-colors duration-100 transform hover:bg-blue-900 uppercase" data-toggle="tab" href="/contacto">Contacto</a></li>
			<li class="text-gray-300">
				<span class="border-l-2 border-gray-400"></span>
			</li>
			<li class="">
				<div class="group inline-block">
					<a class="text-black px-2 py-2 hover:text-white transition-colors duration-100 transform hover:bg-blue-900 uppercase" data-toggle="tab" href="/servicios">Servicios</a>
					<ul class="bg-white border transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top md:w-64">
						<div class="bg-white shadow dark-mode:bg-gray-800">
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Consultoría</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Estudio de Riesgos</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Programa de Seguridad</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Auditorías</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Capacitación</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Protección Civil</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Medio Ambiente</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Permisos Vigentes</a>
						  </div>
					</ul>
				  </div>
			</li>
		</ul>
			
	</nav>
	<div class="navbar-menu hidden lg:hidden absolute z-50">
		<div class="navbar-backdrop absolute inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="#">
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="{{ Request::is( '/') ? 'activa' : '' }}"><a class="activa block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 uppercase" href="/">Inicio</a>
					</li>
					<li class="{{ Request::is( 'nosotros') ? 'activa' : '' }}"><a class="activa block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 uppercase" href="nosotros">Sobre nosotros</a>
					</li>
					<li @click.away="open = false" x-data="{ open: false }" class="">
						<button @click="open = !open" class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded uppercase">Servicios</button>
						<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="inline-block right-0 w-full origin-top-right shadow-lg sm:w-64">
							<div class="bg-white rounded-md shadow dark-mode:bg-gray-800">
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Consultoría</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Estudio de Riesgos</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Programa de Seguridad</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Auditorías</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Capacitación</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Protección Civil</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Medio Ambiente</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Permisos Vigentes</a>
							</div>
						  </div>	
					</li>
					<li class="{{ Request::is( 'clientes') ? 'activa' : '' }}"><a class="active block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 uppercase" href="clientes">Clientes</a>
					</li>
					<li class="{{ Request::is( 'contacto') ? 'activa' : '' }}"><a class="active block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 uppercase" href="contacto">Contacto</a>
					</li>
					
				</ul>
			</div>
			<div class="mt-auto">
				<a class="block px-4 py-3 mb-3 text-xl text-center font-semibold leading-none bg-green-500 text-white hover:bg-blue-900 rounded-xl" href="https://api.whatsapp.com/send?phone=528211177741&text=Hola!%20Quiero%20contratar%20sus%20servicios!">Envianos un mensaje! <i class="fab fa-whatsapp text-2xl text-white cursor-pointer"></i></a>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © 2021</span>
				</p>
			</div>
		</nav>
	</div>

	<div class="hidden lg:block w-full bottom-4 right-4 items-center fixed z-50">
		<div @click.away="dropdownOpen = false" x-data="{ dropdownOpen: true }" class="float-right">
			<button @click="dropdownOpen = !dropdownOpen" class="block text-white rounded-full w-12 h-12  bg-red-600 p-2 hover:bg-red-300 focus:outline-none focus:bg-red-300 transform rotate-6 hover:scale-125 transition duration-700 hover:rotate-90 hover:shadow-xl">
			 <i class="fas fa-angle-left text-3xl"></i>
			</button>
		
			<div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
		
			<div x-show="dropdownOpen" class="bottom-0 mb-12  absolute right-0 rounded-md overflow-hidden z-20 hover:-translate-y-3 transform transition duration-500">
			  <a class="float-right block text-center mb-2 mt-0 items-center justify-center w-12 h-12 rounded-full bg-green-500 hover:border-green-600 text-white hover:text-5xl"  data-bs-toggle="tooltip" data-bs-placement="left" title="Whatsapp" target="_blank" rel="noopener" href="https://api.whatsapp.com/send?phone=528211177741&text=Hola!%20Quiero%20contratar%20sus%20servicios!" ><i class="fab fa-whatsapp text-4xl cursor-pointer"></i></a>	  
			</div>
		  </div>
	</div>

	<div class="md:hidden sm:block w-full bottom-4 right-4 items-center fixed z-50">
		<a class="sm:hidden float-right block text-center mb-2 mt-1 items-center justify-center w-10 h-10 rounded-full bg-blue-900 text-white hover:text-5xl" href="tel:+528211177741"><i class="text-2xl fas fa-phone-alt mt-1"></i></a>
	</div>

@yield('nosotros')
@yield('content')
@yield('clientes')
@yield('contacto')
@yield('servicios')
@yield('consultoria')

{{-- seccon footer --}}
<footer class="flex pt-8 pb-6 z-0 bg-white">
	<div class="container mx-auto px-4">
	  <h4 class="w-12/12 my-6 border-t-2 border-solid border-blue-700"></h4>
	  <div class="flex flex-wrap justify-center items-center">
		<div class="w-full lg:w-4/12 px-4">
		  <img src="{{ asset('images/LOGO.png')}} " width="100%" height="100%" alt="Seguridad Industrial Islander logo">
		</div>
		<div class="w-full lg:w-4/12 px-4 text-center">
		
		</div>
		<div class="w-full lg:w-4/12">
		  <div class="flex flex-wrap items-top mb-6">
			<div class="w-full lg:w-6/12 px-4">
			  <span class="block uppercase text-sm text-black font-semibold mb-2">Dirección:</span>
			  <ul class="list-unstyled">
				<li>
				  <span class="text-blue-900 font-semibold block pb-2 text-sm"><i class="fas fa-map-marker-alt"></i> C. Zacatecas No. 208 poniente Col. Alvarado, Linares N.L</span>
				</li>
			  </ul>
			</div>
			<div class="w-full lg:w-6/12 px-4">
			  <span class="block uppercase text-sm font-semibold mb-2">Télefonos:</span>
			  <ul class="list-unstyled">
				<li>
				  <span class="text-blue-900 font-semibold block pb-2 text-sm"><i class="fas fa-phone"></i> 821-105-0288 </span>
				  <span class="text-blue-900 font-semibold block pb-2 text-sm"><i class="fas fa-mobile-alt"></i> 821-117-77-41 </span>
				</li>
			  </ul>
			</div>
			<div class="w-full lg:w-12/12 px-4">
			  <span class="block uppercase text-sm font-semibold mb-2">Email:</span>
			  <ul class="list-unstyled">
				<li>
				  <u><a class="text-blue-700 hover:text-blue-900 font-semibold block pb-2 text-sm" href="mailto:j.isleno@islander.mx?Subject=contratación%20de%20servicios%20"><i class="fas fa-envelope mr-2"></i>j.isleno@islander.mx</a></u>
				  <u><a class="text-blue-700 hover:text-blue-900 font-semibold block pb-2 text-sm" href="mailto:ventas@islander.mx?Subject=contratación%20de%20servicios%20"><i class="fas fa-envelope mr-2"></i>ventas@islander.mx</a></u>
				</li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  <hr class="my-6 border-blueGray-300">
	  <div class="flex flex-wrap items-center md:justify-between justify-center">
		<div class="w-full md:w-4/12 px-4 mx-auto text-center">
		  <div class="text-sm font-semibold py-1">
			Copyright © <span id="get-current-year">2021</span><a href="/" class="hover:text-gray-800"> Seguridad Industrial Islander S.A de C.V</a>.
		  </div>
		</div>
	  </div>
	</div>
</footer>
{{-- fin seccion footer --}}

<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/hamburger.js') }}"></script>
<script src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js" defer></script>
<script>
	new WOW().init();
</script>
</html>
