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
<div class="container-dettaglio-fumetto">
    <div class="info">
        <div class="comic-description">
            <h1 class="uppercase">{{$fumettoId['title']}}</h1>
            <div class="title-info">
                <div class="price">
                    <span>U.S Price: {{$fumettoId['price']}}</span>
                </div>
                <div class="check-availability">
                    <span class="uppercase">available</span>
                    <span>Check Availability &#9662;</span>
                </div>
            </div>
            <div class="description-info">
                <p>{{$fumettoId['description']}}</p>
            </div>
        </div>
        <div class="pubblicity">
            <h2 class="uppercase">advertisement</h2>
            <img src="{{'/img/adv.jpg'}}" alt="{{$fumettoId['series']}}">
        </div>
    </div>
</div>


@endsection


@section('title-page', 'Comics')
