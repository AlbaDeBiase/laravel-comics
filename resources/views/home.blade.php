@extends('layouts.app')

@section('content')
@include('partials.jumbo')

    <div class="cards-container">
        <div class="container">
            <div class="fumetti">
            @foreach ($fumetti as $fumetto)
                <div class="cards">
                    <div class="image-cards">
                        <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['series']}}">
                    </div>
                    <div class="name-cards">
                        <span>{{$fumetto['series']}}</span>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="button-cards">
            <button type="button" name="button"> <a class="uppercase"href="#">load more</a></button>
        </div>
    </div>



@endsection


@section('title-page', 'Homepage')
