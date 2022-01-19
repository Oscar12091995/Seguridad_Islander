<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome'); })->name('inicio');
Route::get('nosotros', function () { return view('nosotros'); })->name('nosotros');
Route::get('clientes', function () { return view('clientes'); })->name('clientes');
Route::get('contacto', function () { return view('contacto'); })->name('contacto');
Route::post('messages', function(){
    //enviar correo 
    $data = request()->all();
    
    Mail::send("emails.message", $data, function($message) use ($data){
        $message->from($data['correo'], $data['nombre'])
        ->to('ventas@islander.mx', 'ventas')
        ->subject('Servicio');
    });
    //responder a usuario de correo enviado

    return back()->with('flash', $data['nombre'] . ', Tu Mensaje ha sido enviado con exito!');

    /* return request()->all(); */
})->name('messages');

Route::get('servicios', function () { return view('lista-servicios.servicios'); })->name('servicios');

