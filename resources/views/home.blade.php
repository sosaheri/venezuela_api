@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="jumbotron">
        <h5>Welcome, {{ Auth::user()->name }}</h5>
        <h1 class="display-3">Venezuela API</h1>
        <p class="lead">This is a public RESTful API that enable users to obtain a variety of public information about the country</p>
        <hr class="my-4">
        <h2>Features:</h2>
        <ul>
            <li>Basic info about Venezuela</li>
            <li>States</li>
            <li>Municipalities</li>
            <li>Presidents</li>
            <li>Natural Areas</li>
            <li>Official map</li>
        </ul>
        <p class="lead">
            <a class="btn btn-primary" href="" target="_blank" role="button">Github Source Code</a>
        </p>
    </div>
</div>
@endsection