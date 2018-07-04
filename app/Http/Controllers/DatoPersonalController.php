<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dato_Personal;
use Laracasts\Flash\Flash;

class DatoPersonalController extends Controller
{
    public function index(){}
 
    public function create(){
    	return view('datos_personales.registro-datos-personales');
    }

    public function store(Request $request){
    	$datos = new Dato_Personal($request->all());
    	//dd($request()->all());
        $datos->save();
        Flash::success("La información de Datos Personales fue registrada satisfactoriamente.")->important();
        return redirect()->route('usuario.index');
    }

    public function show($id){}

    public function edit($id){
        $datos = Dato_Personal::find($id);
        //return view('datos_personales.editar',['datos'=>$datos]);
        return view('datos_personales.editar')->with('datos',$datos);
    }

    public function update(Request $request, $id){
        $nuevo = Dato_Personal::find($id);
        $nuevo->apellido_paterno = $request->apellido_paterno;
        $nuevo->apellido_materno = $request->apellido_materno;
        $nuevo->nombre = $request->nombre;
        $nuevo->sexo = $request->sexo;
        $nuevo->fecha_nacimiento = $request->fecha_nacimiento;
        $nuevo->edad = $request->edad;
        $nuevo->rfc = $request->rfc;
        $nuevo->ent_nacimiento = $request->ent_nacimiento;
        $nuevo->curp = $request->curp;
        $nuevo->doc_id_oficial = $request->doc_id_oficial;
        $nuevo->folio = $request->folio;
        $nuevo->tel_fijo = $request->tel_fijo;
        $nuevo->tel_celular = $request->tel_celular;
        $nuevo->correo = $request->correo;
        $nuevo->ent_fed_nacimiento = $request->ent_fed_nacimiento;
        $nuevo->save();
        Flash::success("La nueva información de Datos Personales fue actualizada satisfactoriamente.")->important();
        return redirect()->route('usuario.index');
    }

    public function destroy($id){}
}
