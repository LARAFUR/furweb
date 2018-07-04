<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dir_Vivienda;
use Laracasts\Flash\Flash;

class DirViviendaController extends Controller
{
    public function index(){}

    public function create(){
    	return view('dir_vivienda.registro-dir-vivienda');
    }

    public function store(Request $request){
    	$info = new Dir_Vivienda($request->all());
        $info->save();
    	//$dd($request->all());
        Flash::success("La información de Dirección de la Vivienda fue registrada satisfactoriamente.")->important();
        return redirect()->route('datos-personales.create');
    }

    public function show($id){}

    public function edit($id){
        $dirv = Dir_Vivienda::find($id);
        return view('dir_vivienda.editar')->with('dirv',$dirv);
    }

    public function update(Request $request, $id){
        $nuevo = Dir_Vivienda::find($id);
        $nuevo->calle = $request->calle;
        $nuevo->num_exterior = $request->num_exterior;
        $nuevo->num_interior = $request->num_interior;
        $nuevo->colonia = $request->colonia;
        $nuevo->codigo_postal = $request->codigo_postal;
        $nuevo->entre_calle = $request->entre_calle;
        $nuevo->y_calle = $request->y_calle;
        $nuevo->rasgo_fisico = $request->rasgo_fisico;
        $nuevo->save();
        Flash::success("La nueva información de la Dirección de la Vivienda fue actualizada satisfactoriamente.")->important();
        return redirect()->route('usuario.index');
    }

    public function destroy($id){}
}
