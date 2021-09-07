@extends('layouts.app')
@section('title','comics')

@section('content')

    <div class="comics">

        @foreach($series as $serie)

        <div class="card">
            <img src="{{$serie['thumb']}}" alt="{{$serie['title']}}">
            <h5>{{$serie['series']}}</h5>
           
        </div>

        @endforeach
        
    </div>

@endsection