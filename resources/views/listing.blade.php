

@extends('layout')


@section('content')
    <h2>
       {{$listing['title']}}
    </h2>
    <p>
        {{$listing['company']}}
    </p>

    <x-listing-tags :tagsCsv="$listing->tags"/>

@endsection
