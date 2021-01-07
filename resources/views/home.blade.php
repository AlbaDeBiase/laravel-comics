@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="fumetti">
            @foreach ($fumetti as $fumetto)
                <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['series']}}">
                <p>{{$fumetto['series']}}</p>
            @endforeach
        </div>
    </div>

@endsection


@section('title-page', 'Homepage')
