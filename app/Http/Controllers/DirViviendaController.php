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
        //$info->save();
    	//$dd($request->all());
        Flash::success("La información de Dirección de la Vivienda fue registrada satisfactoriamente.")->important();
        return redirect()->route('datos-personales.create');
    }

    public function show($id){}

    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id){}
}
