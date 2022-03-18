@extends('layouts.app')

@section("title", $viewData["title"])

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card">

<div class="card-header">Registro de usuario</div>

<div class="card-body">

@if($errors->any())

<ul id="errors" class="alert alert-danger list-unstyled">

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

@endif

<form method="POST" action="{{ route('product.save') }}">

@csrf

<input type="text" class="form-control mb-2" placeholder="Ingrese su nombre" name="title" />

<input type="text" class="form-control mb-2" placeholder="Ingrese su edad" name="price"  />

<input type="text" class="form-control mb-2" placeholder="Ingrese su correo" name="description" />

<input type="password" class="form-control mb-2" placeholder="Ingrese se contraseña" name="quantity"  />

<input type="submit" class="btn btn-primary" value="Send" />

</form>



</div>

</div>

</div>

</div>

</div>

</div>

@endsection