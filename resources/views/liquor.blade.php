@extends('layouts.app')
@section("title", $data["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>{{__('liquor.title')}}</h2>
    </div>
    <hr class="border-secondary">
    @if($data['validResponse'] == false)
    <div class="row text-center justify-content-center">
        <h5>{{__('liquor.noResults')}}</h5>
    </div>
    @else
    @for($i = 0; $i < $data['numberOfResults']; $i++)
    <div class="row shadow-lg rounded rounded-pill m-2">
        <div class="col m-2 text-center">
            <h4>{{__('liquor.name')}}: <a style="color: #800000" target="_blank"
                    href="{{$data['brands'][$i] }}">{{ $data['liquorNames'][$i] }}</a>
            </h4>
            <h5>{{__('liquor.price')}}: ${{number_format($data['prices'][$i],2, '.', ',')}}</h5>
            <h5>{{__('liquor.stock')}}: {{$data['stock'][$i]}}</h5><br>
        </div>
    </div>
@endfor
@endif
<br>
</div>
@endsection