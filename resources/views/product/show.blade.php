@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', $viewData["subtitle"])

@section('content')

<div class="card mb-3">

  <div class="row g-0">

    <div class="col-md-4">

      <img src="{{ URL::to('/assets/img/vynil.png') }}" class="img-fluid rounded-start">

    </div>

    <div class="col-md-8">

      <div class="card-body">

        <h5 class="card-title">

          {{ $viewData["product"]["title"] }}

        </h5>

        <p class="card-text">{{ $viewData["product"]["title"] }}</p>

        <p class="card-text">
        <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
          <div class="row">
            @csrf
            <div class="col-auto">
              <div class="input-group col-auto">
                <div class="input-group-text">Quantity</div>
                <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
              </div>
            </div>
            <div class="col-auto">
              <button class="btn bg-primary text-white" type="submit">Add to cart</button>
            </div>
          </div>
        </form>
        </p>

        @foreach($viewData["product"]->comments as $comment)
        - {{ $comment->getDescription() }}<br />
        @endforeach


      </div>

    </div>

    <br></br>
    <br></br>
    <br></br>
    <br></br>

    <input type="button" class="btn btn-primary" value="Delete" />



  </div>



</div>






@endsection