@extends('layouts.app')
@section('title', $viewData["title"])

@section('subtitle', $viewData["subtitle"])
@section('content')
<form method="GET" class="mb-5" action="{{ route('product.search') }}">
    <div class="input-group mb-3">
        <input type="text" name="search" value="{{ request()->get('search') }}" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="button-addon2">
        <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
    </div>
</form>
<div class="row">
    @foreach ($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="{{ URL::to('/assets/img/vynil.png') }}" class="card-img-top">
            <div class="card-body text-center">
                <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn btn-primary btn-lg cl-btn">{{ $product->getName() }}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection