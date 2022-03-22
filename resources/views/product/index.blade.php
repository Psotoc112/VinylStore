@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', $viewData["subtitle"])

@section('content')


<form method="GET">
    <input id="search" name="search" type="text" placeholder="Type here">
    <input id="submit" type="submit" value="Search">
    </form>


 <br>
    
<div class="row">




@foreach ($viewData["products"] as $product)

<div class="col-md-4 col-lg-3 mb-2">

<div class="card">

<img src="{{ URL::to('/assets/img/vynil.png') }}" class="card-img-top img-card">

<div class="card-body text-center">

<a href="{{ route('product.show', ['id'=> $product["id"]]) }}" class="btn bg-primary text-white">{{ $product["title"] }}</a>

<br></br>















</div>

</div>

</div>

@endforeach

</div>

@endsection