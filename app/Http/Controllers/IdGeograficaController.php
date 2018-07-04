<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Id_Geografica;
use Laracasts\Flash\Flash;

class IdGeograficaController extends Controller
{
    public function index(){}

    public function create(){
    	return view('id_geo.registro-id-geo');
    }

    public function store(Request $request){
    	$info = new Id_Geografica($request->all());
		//dd($request->all());
        $info->save();
		Flash::success("La información de Identificación Geográfica fue registrada satisfactoriamente.")->important();
		return redirect()->route('direccion-vivienda.create');
    }

    public function show($id){}

    public function edit($id){
        $id_geo = Id_Geografica::find($id);
        return view('id_geo.editar')->with('id_geo',$id_geo);
    }

    public function update(Request $request, $id){
        $nuevo = Id_Geografica::find($id);
        $nuevo->cve_estado = $request->cve_estado;
        $nuevo->cve_municipio = $request->cve_municipio;
        $nuevo->cve_localidad = $request->cve_localidad;
        $nuevo->cve_ageb = $request->cve_ageb;
        $nuevo->manzana = $request->manzana;
        $nuevo->lote = $request->lote;
        $nuevo->fecha_solicitud = $request->fecha_solicitud;
        $nuevo->localidad = $request->localidad;
        $nuevo->save();
        Flash::success("La nueva información de Identificación Geografica fue actualizada satisfactoriamente.")->important();
        return redirect()->route('usuario.index');
    }

    public function destroy($id){}
}
