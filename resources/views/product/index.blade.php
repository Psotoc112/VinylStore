@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', $viewData["subtitle"])

@section('content')


<form method="GET" class="mb-5" action="{{ route('product.search') }}">

    <div>
    <input id="search" name="search" type="text" placeholder="Type here" value="{{ request()->get('search') }}" aria-label="Search" aria-describedby="submit">
    <input id="submit" type="submit" value="Search">
</div>
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