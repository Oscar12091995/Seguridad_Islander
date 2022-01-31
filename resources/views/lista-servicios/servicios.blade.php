
@extends('navigation')

@section('servicios')
{{-- Sección portada servicios --}}
<section>
    <div class="bg-center bg-cover" >
        <div class="bg-center bg-cover w-full flex items-center overflow-hidden justify-center" style="background-image: url({{asset('images/pexels-pixabay-162625.jpg')}}); height: 80vh;">
            <div class="items-center justify-center w-screen h-screen flex flex-col bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">
                <div class="items-center justify-center md:w-1/2 w-full shadow-md p-5 h-auto rounded-lg blur-3 flex flex-col col-span-12">
                    <span class=" w-96 border-t-4 border-solid border-blue-700"></span>
                    <h2 class="text-white text-5xl font-extrablod text-center wow animated fadeInLeft">Nuestros Servicios</h2>
                </div>
            </div>          
        </div>
    </div>
</section> 
{{-- Fin sección portada --}}

{{-- Sección servicios --}}
<section class="md:mx-20 items-center mt-12">
  <div class="min-w-full flex flex-wrap justify-center">
    <div class="sm:content-center sticky md:w-2/12 px-2 border-r-2 mb-12">
        <ul id="tabs" class="">
          <li class="px-4 py-2 my-2 -mb-px font-semibold text-gray-800 border-l-4 border-blue-400  opacity-50"><a id="default-tab" href="#first">Diagnóstico de SST</a></li>
          <li class="px-4 py-2 my-2 font-semibold text-gray-800 opacity-50"><a href="#second">Estudios de Riesgos</a></li>
          <li class="px-4 py-2 my-2 font-semibold text-gray-800 opacity-50"><a href="#third">Programas de Seguridad</a></li>
          <li class="px-4 py-2 my-2 font-semibold text-gray-800 opacity-50"><a href="#fourth">Auditorías</a></li>
          <li class="px-4 py-2 my-2 font-semibold text-gray-800 opacity-50"><a href="#five">Capacitación</a></li>
          <li class="px-4 py-2 my-2 font-semibold text-gray-800 opacity-50"><a href="#six">Protección Civil</a></li>
          <li class="px-4 py-2 my-2 font-semibold text-gray-800 opacity-50"><a href="#seven">Medio Ambiente</a></li>
          <li class="px-4 py-2 my-2 font-semibold text-gray-800 opacity-50"><a href="#eight">Permisos Vigentes</a></li>
        </ul>
      </div>
    <div class="md:w-10/12" style="overflow: -moz-scrollbars-vertical; overflow-y: scroll;height:550px;">
      <div id="tab-contents">
        <div id="first" name="first" class="p-4">
          <div class="items-center flex flex-wrap">
              <div class="w-full md:w-12/12">
                <div class="">
                  <h1 class="mb-2 text-3xl font-black tracking-tighter text-blue-900  md:text-5xl title-font animated zoomIn cursor-pointer">Diagnóstico del PASST – Empresa Segura</h1>
                    <div class="mt-4 text-lg text-justify">
                      <div class="py-4">
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">NOM-030-STPS-2009, Servicios Preventivos de Seguridad y Salud en el Trabajo.</h2>
                        <hr class="my-4">
                      </div>
                      <div>
                        <ul>
                          <li class="text-xl font-bold capitalize mb-2"><i class="fas fa-minus"></i> Metodología:</li>
                          <div class="pl-12 my-4">
                            <li class="oldstyle-nums">1) Identificación de la normatividad aplicable de Seguridad y Salud en el 
                              Trabajo</li>
                            <li class="oldstyle-nums">2) Diagnóstico del Sistema de Administración de Seguridad y Salud en el 
                              Trabajo (SASST)</li>
                            <li class="oldstyle-nums">3) Diagnóstico de Cumplimiento Normativo de Seguridad y Salud en el Trabajo 
                              (CNSST)</li>
                            <li class="oldstyle-nums">4) Elaboración del Programa de Seguridad y Salud en el Trabajo (PSST)</li>
                          </div>
                        </ul>
                      </div>
                      <hr class="my-4">
                      <h3 class="text-xl font-bold capitalize mb-2"><i class="fas fa-minus"></i> Beneficios:</h3>
                      <ul>
                        <div class="pl-12 my-4 text-justify">
                          <li><i class="far fa-check-circle text-green-500"></i> Reducción de Pagos por prima de riesgo ante el IMSS.</li>
                        <li><i class="far fa-check-circle text-green-500"></i> Reducción de pérdidas (daños a equipos o a la propiedad).</li>
                        <li><i class="far fa-check-circle text-green-500"></i> Reducción de gastos por sobreconsumo de equipo de protección personal y manejo inadecuado de herramientas
                          manuales etc.
                        </li>
                        <li><i class="far fa-check-circle text-green-500"></i> Mejorar el ambiente laboral (exposición a ruido, temperaturas, ergonomía etc.)</li>
                        <li><i class="far fa-check-circle text-green-500"></i> Fomentar el trabajo en equipo.</li>
                        <li><i class="far fa-check-circle text-green-500"></i> Se mide el impacto de un accidente, enfermedad o medio ambiente (KPI's)</li>
                        <li><i class="far fa-check-circle text-green-500"></i> Mejorar la disciplina y el reconocimiento por el cumplimiento de objetivos.</li>
                        <li><i class="far fa-check-circle text-green-500"></i> Crear un sentido de pertinencia en los proyectos de mejora.</li>
                        <li><i class="far fa-check-circle text-green-500"></i> Crear una cultura de trabajo independiente e interdependiente.</li>
                        <a href="http://autogestionsst.stps.gob.mx/Proyecto/Publico/Default.aspx" data-bs-toggle="tooltip" title="Clic aquí!" target="_blank"><i class="far fa-check-circle text-green-500"></i><u> Fundamentos Legales</u><i class=""></i></a>
                        </div>
                      </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div id="second" name="estudios" class="hidden p-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-12/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <h1 class="mb-2 text-3xl font-black tracking-tighter text-blue-900  md:text-5xl title-font animated zoomIn cursor-pointer">Estudios de Riesgos Normativos (STPS)</h1>
                    <div class="mt-4 text-lg text-justify">
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">I. Estudios de Riesgos</h2>
                        <hr class="my-4">
                        <ul class="pl-12">
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de riesgo de prevención y protección contra incendios <span class="text-blue-900 font-semibold">(NOM-002-STPS-2010)</span>.</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de riesgo de los sistemas de protección y dispositivos de seguridad en maquinaria y 
                            equipo <span class="text-blue-900 font-semibold">(NOM-004-STPS-1999)</span>.</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de riesgo de manejo, transporte y almacenamiento de sustancias químicas peligrosas <span class="text-blue-900 font-semibold">(NOM-005-STPS-1998)</span>.</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de riesgo de trabajos en alturas <span class="text-blue-900 font-semibold">(NOM-009-STPS-2011)</span>.</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de riesgo de la selección, uso y manejo del equipo de protección personal <span class="text-blue-900 font-semibold">(NOM-017-
                            STPS-2008)</span>.</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de riesgo en la actividades de soldadura y corte - <span class="text-blue-900 font-semibold">(NOM-027-STPS-2008)</span>.</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de riesgo en la construcción de obras medianas y grandes - <span class="text-blue-900 font-semibold">(NOM-031-STPS-2011)</span>.</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de riesgo en la actividades en espacios confinados - <span class="text-blue-900 font-semibold">(NOM-033-STPS-2015)</span>.</li>
                        </ul>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <div id="third" class="hidden p-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-12/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <h1 class="mb-2 text-3xl font-black tracking-tighter text-blue-900  md:text-5xl title-font animated zoomIn cursor-pointer">Programas de Seguridad y Salud en el Trabajo</h1>
                  <div class="mt-4 text-lg text-justify">
                    <h2 class="text-2xl font-semibold text-gray-800 capitalize">I. Programas</h2>
                    <hr class="my-4">
                    <ul class="pl-12">
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de prevención de ruido laboral – <span class="text-blue-900 font-semibold">(NOM-011-STPS-2014)</span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de condiciones térmicas elevadas o abatidas – <span class="text-blue-900 font-semibold">(NOM-015-STPS-2001) </span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de seguridad en edificios, locales e instalaciones – <span class="text-blue-900 font-semibold">(NOM-001-STPS-2008)</span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa del sistema armonizado para la identificación y comunicación de peligros y riesgos por 
                        sustancias químicas peligrosas – <span class="text-blue-900 font-semibold">(NOM-018-STPS-2015)</span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de la constitución, integración, organización y funcionamiento de la comisión de 
                        seguridad e higiene <span class="text-blue-900 font-semibold">(NOM-019-STPS-2011)</span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de recipientes sujetos a presión, recipientes criogénicos, y generadores de vapor o 
                        calderas – <span class="text-blue-900 font-semibold">(NOM-020-STPS-2011)</span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de electricidad estática – condiciones de seguridad – <span class="text-blue-900 font-semibold">(NOM-022-STPS-2015)</span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de iluminación – condiciones de salud – <span class="text-blue-900 font-semibold">(NOM-025-STPS-2008)</span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de señales y colores de seguridad e higiene, e identificación de riesgos por fluidos 
                        conducidos por tuberías – <span class="text-blue-900 font-semibold">(NOM-026-STPS-2008)</span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de mantenimiento en las instalaciones eléctricas – condiciones de seguridad - <span class="text-blue-900 font-semibold">(NOM-029-STPS-2011)</span>.</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de Seguridad de Contratistas - <span class="text-blue-900 font-semibold">(NOM-031-STPS-2011)</span>.</li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div id="fourth" class="hidden p-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-12/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <h1 class="mb-2 text-3xl font-black tracking-tighter text-blue-900  md:text-5xl title-font animated zoomIn cursor-pointer">Auditorías Normativas de (STPS)</h1>
                  <div class="mt-4 text-lg text-justify">
                    <h2 class="text-2xl font-semibold text-gray-800 capitalize">I. Auditorias</h2>
                    <hr class="my-4">
                    <ul class="pl-12">
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Auditoria del Sistema de Administración de Seguridad y Salud en Trabajo (SASST).</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Auditorias de Cumplimiento Normativo de Seguridad y Salud en el Trabajo (CNSST).</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de Seguridad y Salud en el Trabajo (PSST).</li>
                      <li><i class="far fa-check-circle text-green-500 text-justify"></i> Determinación de prima de riesgo (IMSS).</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="five" class="hidden p-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-12/12 ml-auto mr-auto px-4 block">
              <div class="md:pr-12">
                   <h1 class="mb-2 text-3xl font-black tracking-tighter text-blue-900  md:text-5xl title-font animated zoomIn cursor-pointer">Capacitaciones</h1>
                     <div class="mt-4 text-lg text-justify">
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">I. Capacitación de Cumplimiento Normativo de Seguridad y Salud en el 
                          Trabajo</h2>
                          <hr class="my-4">
                        <ul class="pl-12">
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Uso y conservación de las instalaciones</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Sistemas de Protección y Dispositivos de Seguridad en Maquinaria y Equipo</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Uso y Manejo adecuado de Herramientas Manuales</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Manejo de Sustancias Químicas Peligrosas</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Manejo y Almacenamiento de Materiales</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Equipo de Protección Personal</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Conservación de la Audición – Ruido</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Protección Respiratoria</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Comisión de Seguridad e Higiene</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Seguridad de Contratistas</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Protección Visual</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Investigación de Accidentes</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Señalización y Código de Colores</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Entre Otros</li>
                        </ul>
            
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">II. Competencias de Seguridad y Salud en el Trabajo</h2>
                        <hr class="my-4">
                        <ul class="pl-12">
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Seguridad Eléctrica – Empleado Autorizado</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Trabajos en Alturas – Empleado Autorizado</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Trabajos en Caliente – Empleado Autorizado</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Trabajos en Espacios Confinados – Empleado Autorizado</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Permisos de Trabajo Peligrosos y Plan GEMMMA</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Certificación de Trabajos Peligrosos - Contratistas</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Bloqueo de Energía Peligrosa – Lockout Tagout</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Seguridad en Procesos Críticos (Gas LP, Recipientes)</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Operadores de Calderas</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Polvos Combustibles</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Seguridad Eléctrica NFPA -70E</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Operadores de Montacargas de Combustión</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Operadores de Montacargas Eléctricos</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Operadores de Manlift</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Entre otros</li>
                        </ul>
            
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">III. Conciencia de Seguridad y Salud en el Trabajo</h2>
                        <hr class="my-4">
                        <ul class="pl-12">
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Manejo adecuado de residuos</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Manejo de agua de lluvia</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Ergonomía en el Trabajo</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Seguridad en Manos y Miembros</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> 7 Reglas básicas</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Análisis de Seguridad en el Trabajo</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i>  Limpiezas Seguras / Seguridad en Sanitización</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Manejo de Seguro</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Observaciones del Comportamiento</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Alto, Piensa y Actúa (APA)</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Evolución de la cultura de los Suricatos</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Manejo de Crisis</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Seguridad en actividades de Mantenimiento</li>
                          <li><i class="far fa-check-circle text-green-500 text-justify"></i> Entre otros, temas de cultura</li>
                        </ul>
                      </div>
              </div>
            </div>
          </div>
        </div>
        <div id="six" class="hidden p-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-12/12 flex">
              <div class="">
                   <h1 class="mb-2 text-3xl font-black tracking-tighter text-blue-900  md:text-5xl title-font animated zoomIn cursor-pointer">Protección Civil y Respuesta a Emergencias</h1>
                      <div class="mt-4 text-lg text-justify">
                        
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">I. Capacitación de Brigadas de Emergencias</h2>
                        <hr class="my-4">
                          <ul class="pl-12">
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Diseño de simulacros</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Brigada de Comunicación o Comando de Incidentes</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Brigada de Evacuación</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Brigada de Primeros auxilios</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Brigada de Búsqueda y Rescate</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Brigada de Combate de Incendios</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Brigada de Materiales Peligrosos</li>
                          </ul>
            
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">II.  Simulacros de Emergencias</h2>
                        <hr class="my-4">
                            <ul class="pl-12">
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Simulacros de Evacuación - Riesgos Ordinarios</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Simulacros EPRE – Riesgos Altos</li>
                            </ul>
            
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">III. Planes de Contingencias</h2>
                        <hr class="my-4">
                          <ul class="pl-12">
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa Interno de Protección Civil</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Planes de Contingencias</li>
                          </ul>
                      </div>
              </div>
            </div>
          </div>
        </div>
        <div id="seven" class="hidden p-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-12/12 flex">
              <div class="md:pr-12">
                   <h1 class="mb-2 text-3xl font-black tracking-tighter text-blue-900  md:text-5xl title-font animated zoomIn cursor-pointer">Medio Ambiente</h1>
                      <div class="mt-4 text-lg text-justify" >                        
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">I. Gestión Ambiental</h2>
                        <hr class="my-4">
                          <ul class="pl-12">
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Sistema de Gestión Ambiental.</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Calculo de Indicadores: Agua, Energeticos, Residuos etc.</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Política Ambiental</li>
                          </ul>
            
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">II. Emergencias Ambientales</h2>
                        <hr class="my-4">
                            <ul class="pl-12">
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de Grado de Riesgo de Incendios</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Plan de Atención a Emergencias</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Simulacros EPRE – Riesgos Altos</li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i> Programa de Prevención de Accidentes (PPA)</li>
                            </ul>
            
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">III. Energía.</h2>
                        <hr class="my-4">
                          <ul class="pl-12">
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Identificación de Aspectos Ambientales Significativos (Energéticos).</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Ahorro y uso eficiente de la Energía.</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Identificación de áreas y equipos de mayor consumo energético.</li>
                          </ul>

                          <h2 class="text-2xl font-semibold text-gray-800 capitalize">IV. Residuos Peligrosos & RPBI.</h2>
                          <hr class="my-4">
                          <ul class="pl-12">
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Identificación de aspectos ambientales significativos de residuos peligrosos & RPBI.</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Registro como generador de residuos peligrosos & RPBI.</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Reportes semestrales de generador de residuos peligrosos & RPBI.</li>
                          </ul>

                          <h2 class="text-2xl font-semibold text-gray-800 capitalize">V. Residuos ME & SU.</h2>
                          <hr class="my-4">
                          <ul class="pl-12">
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Identificación de aspectos ambientales significativos de residuos de manejo especial (RME)& 
                              solido urbado (SU).</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Registro como generador de residuos de manejo especial (RME)& solido urbado (SU).</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Reportes semestrales de generador de residuos de manejo especial (RME) & solido urbado (SU)</li>
                          </ul>

                          <h2 class="text-2xl font-semibold text-gray-800 capitalize">VI. Aire.</h2>
                          <hr class="my-4">
                          <ul class="pl-12">
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Cedula de Operación Anual (COA Estatal & Federal).</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Plan de Contingencia Ambiental (PCA).</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Estudio de Ruido Perimetral.</li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> Entre otros...</li>
                          </ul>
                      </div>
              </div>
            </div>
          </div>
        </div>
        <div id="eight" class="hidden p-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-12/12 flex">
              <div class="md:pr-12">
                   <h1 class="mb-2 text-3xl font-black tracking-tighter text-blue-900  md:text-5xl title-font animated zoomIn cursor-pointer">Permisos Vigentes</h1>
                      <div class="mt-4 text-lg text-justify" >                        
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">I. Capacitación</h2>
                        <hr class="my-4">
                          <ul class="pl-12">
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i> <a href="{{asset('files/Registro_STPS_Pag1.pdf')}}" data-bs-toggle="tooltip" title="Clic para ver el documento!" target="_blank"> Registro STPS Pág. 1 <i class="text-gray-400 fas fa-file-alt"></i></a></li>
                            <li><i class="far fa-check-circle text-green-500 text-justify"></i><a href="{{asset('files/Registro_STPS_Pag2.pdf')}}" data-bs-toggle="tooltip" title="Clic para ver el documento!" target="_blank"> Registro STPS Pág. 2 <i class="text-gray-400 fas fa-file-alt"></i></a></li>
                            <li><i class="far fa-check-circle text-green-500 text-justify mb-4"></i><a href="{{asset('files/Registro_STPS_Pag3.pdf')}}" data-bs-toggle="tooltip" title="Clic para ver el documento!" target="_blank"> Registro STPS Pág. 3 <i class="text-gray-400 fas fa-file-alt"></i></a></li>
                          </ul>
            
                        <h2 class="text-2xl font-semibold text-gray-800 capitalize">II. Protección Civil</h2>
                        <hr class="my-4">
                            <ul class="pl-12">
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i><a href="{{asset('files/RegDPCE-APF-035-2020.pdf')}}" data-bs-toggle="tooltip" title="Clic para ver el documento!" target="_blank"> Reg. DPCE-APF-035-2020 <i class="text-gray-400 fas fa-file-alt"></i></a></li>
                              <li><i class="far fa-check-circle text-green-500 text-justify"></i><a href="{{asset('files/RegDPCE-IPF-262-2020.pdf')}}" data-bs-toggle="tooltip" title="Clic para ver el documento!" target="_blank"> Reg. DPCE-IPF-262-2020 <i class="text-gray-400 fas fa-file-alt"></i></a></li>
                            </ul>
                      </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Fin sección servicios --}}

@stop

             
