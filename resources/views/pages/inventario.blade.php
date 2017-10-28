@extends('main')

@section('title', 'Inventario')
@section('active_1', 'class=active')

@section('content')

<div class="container">
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#createItem">Ingresar articulo</a></li>
  </ul>

  <div class="tab-content">
    <div id="createItem" class="tab-pane fade">
        @include('posts.createItem')
    </div>
  </div>
</div>

@endsection
