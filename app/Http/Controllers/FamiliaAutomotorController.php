<?php

namespace PowerVial\Http\Controllers;

use Illuminate\Http\Request;
use Powervial/FamiliaAutomotor;

class FamiliaAutomotorController extends Controller
{
    public function create(){
      return view(posts.createFamiliaAutomotor);
    }

    public function store(CrearFamiliasAutomotorRequest $request) {
      $familiaAutomotor = FamiliaAutomotor::create($request->all());

      return redirect('/inventario');
    }

    public function edit($id){
      return view('gets.editFamiliaAutomotor', ['familiaAutomotor' => FamiliaAutomotor :: findOrFail($id)]);
    }

    public function update(EditarFamiliasAutomotorRequest $request, $id){
      $familiaAutomotor = FamiliaAutomotor :: find($id);
      $familiaAutomotor->fill($request->all());
      $familiaAutomotor->save();

      return redirect('/inventario');
    }
}
