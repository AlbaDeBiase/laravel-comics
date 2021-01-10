@extends('layouts.app')

@section('content')
@include('partials.jumbo')


<div class="wrapper">
    <div class="container-dettaglio-fumetto">
        <div class="card-img">
            <div class="comic-type">
                <p class="uppercase">{{$fumettoId['type']}}</p>
            </div>
            <img src="{{$fumettoId['thumb']}}" alt="{{$fumettoId['series']}}">
            <div class="view-gallery">
                <p class="uppercase">view gallery</p>
            </div>
        </div>
    </div>
</div>


@endsection


@section('title-page', 'Comics')
