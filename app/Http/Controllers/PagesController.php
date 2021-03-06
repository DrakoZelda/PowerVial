<?php

namespace PowerVial\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function main()
  {
      return view ('main');
  }
  public function inventario()
  {
      return view ('pages/inventario');
  }
  public function proveedores()
  {
      return view ('pages/proveedores');
  }
}
