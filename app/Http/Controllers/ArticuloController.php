<?php

namespace PowerVial\Http\Controllers;

use Illuminate\Http\Request;
use PowerVial\Articulo;

class ArticuloController extends Controller
{
    public function index() {
      return view('gets.indexArticulos', ['articulos' => Articulo::all()])
    }

    public function create(Request $request) {
      return view('gets.createArticulo');
    }

    public function store(CrearArticulosRequest $request){
      $articulo = Articulo::create($request->all());

      return redirect('/inventario');
    }

    public function edit($id){

      return view('gets.editArticulo', ['articulo' => Articulo::findOrFail($id)]);
    }

    public function update(EditarArticuloRequest $request, $id){
      $articulo = Articulo::find($id);
      $articulo->fill($request->all());
      $articulo->save();

      return redirect('/inventario');

    }

    public function destroy($id){
      $articulo = Articulo::find($id);
      $articulo->delete();
    }
}
