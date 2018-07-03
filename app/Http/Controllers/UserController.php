<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;

class UserController extends Controller
{
    //
    public function index(){
        $total_usuarios = User::orderBy('id','ASC')->paginate(5);
        return view('usuario.pagina')->with('total_usuarios',$total_usuarios);
    }

    public function create(){
    	return view('usuario.registro');
    }

    public function store(Request $request){
    	$usuario = new User($request->all());
        //$usuario->save();
        //dd($request->all()); 
        Flash::success("La información de la cuenta de usuario fue registrada satisfactoriamente.")->important();
        Flash::info("Folio de tarjeta: ".$usuario->folio.".Tu nombre de usuario o correo electrónico es: ".$usuario->email.". Tu contraseña es: ".$usuario->password.".")->important();
        Flash::warning("Estos datos serán solicitados a lo largo del trámite. Se recomienda anotarlos o hacer una captura de pantalla.")->important();
        return redirect()->route('identificacion-geografica.create');
    }

    public function show($id){}

    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id){}
}
