<?php

namespace PowerVial\Http\Controllers;

use Illuminate\Http\Request;
use PowerVial\Marca;
use Curso\Http\Requests\CrearMarcasRequest;
use Curso\Http\Requests\EditarMarcasRequest;



class MarcaController extends Controller
{
    //
    public function create(Request $request){
      return view('gets.createMarca');
    }
    public function store(CrearMarcasRequest $request){
      $marca = Marca::create($request->all());

      return redirect('/inventario');
    }

    public function edit($id){
      return view('gets.editMarca', ['marca' => Marca::findOrFail($id)]);
    }

    public function update(Request $request, $id) {
      $marca = Marca::find($id);
      $marca->fill($request->all());
      $marca->save();

      return redirect('/inventario');
    }

    public function destroy($id){
      $marca = Marca::find($id);
      $marca->delete();
    }


}
