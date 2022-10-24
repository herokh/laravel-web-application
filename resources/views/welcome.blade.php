@extends('layout')

@section('title', 'welcome page')

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')
    <h2>{{$article->name}}</h2>
    <div>
        {{$article->description}}
    </div>
    <ul>
        @foreach ($comments as $c)
            <li>{{$c->description}}</li>
        @endforeach
    </ul>

@endsection
