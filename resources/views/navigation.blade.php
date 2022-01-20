<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Seguridad Islander</title>

		{!! app('seotools')->generate() !!}
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
		<link rel="shortcut icon" type="image/png" href="{{ asset('images/casco.png') }}">

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

		<link href="{{ asset('/css/animate.css') }}" rel="stylesheet"> 

		
<style>
	.slider {
    	background: white;
    	height: 250px;
    	margin: auto;
    	overflow: hidden;
    	position: relative;
    	width: full;
	}

	.slider::before, .slider::after {
    	background: linear-gradient(to right, #fff 0%, rgba(255, 255, 255, 0) 100%);
    	content: "";
    	height: 100%;
    	position: absolute;
    	width: 100px;
    	z-index: 2;
	}

	.slider::after {
    	right: 0;
   		top: 0;
    	-webkit-transform: rotateZ(180deg);
    	transform: rotateZ(180deg);
	}

	.slider::before {
    	left: 0;
    	top: 0;
	}

	.slider .slide-track {
    	animation: scroll 80s linear infinite;
    	display: flex;
    	width: calc(250px * 18);

	}

	.slider .slide-track:hover {
    	animation-play-state: paused;
	}

	.slider .slide {
    	height: 250px;
    	width: 250px;
	}

	@keyframes scroll {
    	0% {
        	transform: translateX(0);
    	}
    	100% {
        	transform: translateX(calc(-250px * 9));
    	}
	}

	nav li.activa{
	
	}

	nav li.activa a{
		color: black;
		border-left-width: 2px;
		--tw-text-opacity: 1;
		border-color: rgba(30, 58, 138, var(--tw-text-opacity));
	}


	nav li.active{
	
	}

	nav li.active a{
		color: black;
		border-bottom-width: 2px;
		--tw-text-opacity: 1;
		border-color: rgba(30, 58, 138, var(--tw-text-opacity));
	}

	li>ul                 { transform: translatex(100%) scale(0) }
	li:hover>ul           { transform: translatex(101%) scale(1) }
	li > button svg       { transform: rotate(-90deg) }
	li:hover > button svg { transform: rotate(-270deg) }
	.group:hover .group-hover\:scale-100 { transform: scale(1) }
	.group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
	.scale-0 { transform: scale(0) }
	.min-w-32 { min-width: 8rem }

</style>
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
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Programa de Seguridad e Higiene</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Auditorías</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Capacitación</a>
							<a class="text-black  block px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Protección Civil y Respuesta a Emergencias</a>
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
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Programa de Seguridad e Higiene</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Auditorías</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Capacitación</a>
							  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-blue-900 hover:text-white uppercase focus:text-wihte focus:outline-none focus:shadow-outline" href="/servicios">Protección Civil y Respuesta a Emergencias</a>
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
			  <a class="float-right block text-center mb-2 mt-0 items-center justify-center w-12 h-12 rounded-full bg-green-500 hover:border-green-600 text-white hover:text-5xl"  data-bs-toggle="tooltip" data-bs-placement="left" title="Whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=528211177741&text=Hola!%20Quiero%20contratar%20sus%20servicios!" ><i class="fab fa-whatsapp text-4xl cursor-pointer"></i></a>	  
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
		  <img src="{{ asset('images/LOGO.png')}} " alt="ISLANDER logo">
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
				  <span class="text-blue-900 font-semibold block pb-2 text-sm"><i class="fas fa-mobile-alt"></i> 821-100-9115 </span>
				</li>
			  </ul>
			</div>
			<div class="w-full lg:w-12/12 px-4">
			  <span class="block uppercase text-sm font-semibold mb-2">Email:</span>
			  <ul class="list-unstyled">
				<li>
				  <u><a class="text-blue-700 hover:text-blue-900 font-semibold block pb-2 text-sm" href="mailto:j.isleno@islander.mx?Subject=contratación%20de%20servicios%20"><i class="fas fa-envelope mr-2"></i>j.isleno@islander.mx</a></u>
				  <u><a class="text-blue-700 hover:text-blue-900 font-semibold block pb-2 text-sm" href="mailto:alejandra.lerma@islander.mx?Subject=contratación%20de%20servicios%20"><i class="fas fa-envelope mr-2"></i>alejandra.lerma@islander.mx</a></u>
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
			Copyright © <span id="get-current-year">2021</span><a href="/" class="hover:text-gray-800"> Seguridad Industrial
			<a href="/" class="">ISLANDER</a>.
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
