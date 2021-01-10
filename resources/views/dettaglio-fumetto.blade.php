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
{{-- fine section price e availabily  --}}
{{-- inizio tabella artist --}}
<div class="wrap-tabs">
    <div class="container-dettaglio-fumetto">
        <div class="tabs-artist">
            <div class="talent">
                <h2>Talent</h2>
                <div class="art-by">
                    <span class="title-tab-artist">Art by:</span>
                    @foreach ($fumettoId['artists'] as $single_artist)
                    <span class="block">
                        <a href="#">{{$single_artist}}</a>{{ !$loop->last ? ',' : '' }}
                    </span>
                    @endforeach
                </div>
                <div class="written-by">
                    <span class="title-tab-artist">Written by:</span>
                    @foreach ($fumettoId['writers'] as $single_writer)
                    <span class="block">
                        <a href="#">{{$single_writer}}</a>{{ !$loop->last ? ',' : '' }}
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="series-name">
                    <span class="title-tab-artist">Series</span>
                    <span class="block">
                        <a href="#">{{$fumettoId['series']}}</a>
                    </span>
                </div>
                <div class="us-price">
                    <span class="title-tab-artist">U.S. Price</span>
                    <span class="block">
                        <a href="#">{{$fumettoId['price']}}</a>
                    </span>
                </div>
                <div class="on-sale-date">
                    <span class="title-tab-artist">On Sale Date</span>
                    <span class="block">
                        <a href="#">{{$fumettoId['sale_date']}}</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('title-page', 'Comics')
