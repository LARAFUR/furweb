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
        //$datos->save();
        return redirect()->route('usuario.index');
    }

    public function show($id){}

    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id){}
}
