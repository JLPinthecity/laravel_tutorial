@extends('layout')


@section('content')

@include('partials._hero')
@include('partials._search')
<h1>{{$heading}}</h1>


@foreach ($listings as $listing)


    <h2>
       <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>

@endforeach

@endsection
