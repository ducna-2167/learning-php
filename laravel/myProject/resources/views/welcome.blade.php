@extends('layouts.app')

@section('content')
    <h1>Welcome to HackerPair</h1>
    <p>
        <a href="{{ route('events.show', ['id' => 42]) }}">Laravel Hacking and Coffee</a>
    </p>
@endsection

@section('advertisement')
@parent
<p>
    HackerPair member always get 10% off at Tron Cafe!
</p>
@endsection