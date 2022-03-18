@extends('layouts.app')

@section('title', 'Home Page - Online Store')

@section('content')

<div class="text-center">

<div class="text-center">

    <input type="button"  onclick="window.location='{{ route("user.index") }}'" value="Iniciar Sesion"></input>
    <br></br>
    <input type="button" onclick="window.location='{{ route("user.register") }}'" value="Registrar Usuario"></input>

</div>




</div>

@endsection