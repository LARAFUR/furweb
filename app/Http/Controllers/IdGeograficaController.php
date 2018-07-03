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
        //$info->save();
		Flash::success("La información de Identificación Geográfica fue registrada satisfactoriamente.")->important();
		return redirect()->route('direccion-vivienda.create');
    }

    public function show($id){}

    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id){}
}
