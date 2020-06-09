<?php
namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use App\Mail\mensajeRecibido;
use Illuminate\support\Facades\Mail;
class datos extends Controller
{
   public function store(){

$mensaje = request()->validate([
'nombre' => 'required',
'correo' => 'required|email',
'asunto' => 'required',
'contenido' => 'required|min:10'
   	]); 
Mail::to('sergiovalle_123@hotmail.com')->send(new mensajeRecibido($mensaje));
   	return'mesaje enviado ';
   }
}
