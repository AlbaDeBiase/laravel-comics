@extends('layouts.app')

@section('content')
@include('partials.jumbo')

{{-- current serie in position absolute --}}
    <div class="series">
        <div class="current-series">
                <h2 class="uppercase">current series</h2>
        </div>
    </div>

    {{-- inizio contenitore cards --}}
    <div class="cards-container">
        <div class="container">
            <div class="fumetti">
            @foreach ($fumetti as $fumetto)
                <div class="cards">
                    <div class="image-cards">
                        <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['series']}}">
                    </div>
                    <div class="name-cards">
                        <span class="uppercase">{{$fumetto['series']}}</span>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="button-cards">
            <button type="button" name="button"> <a class="uppercase"href="#">load more</a></button>
        </div>
    </div>
    <div class="container-buy-services">
        <div class="buy-services">
            <img src="{{'/img/buy-comics-digital-comics.png'}}" alt="">
                <span class="uppercase">digital comics</span>
            <img src="{{'/img/buy-comics-merchandise.png'}}" alt="">
                <span class="uppercase">dc merchandise</span>
            <img src="{{'/img/buy-comics-subscriptions.png'}}" alt="">
                <span class="uppercase">subscription</span>
            <img src="{{'/img/buy-comics-shop-locator.png'}}" alt="">
                <span class="uppercase">comic shop locator</span>
            <img src="{{'/img/buy-dc-power-visa.svg'}}" alt="">
                <span class="uppercase">dc power visa</span>
        </div>
    </div>



@endsection


@section('title-page', 'Homepage')
