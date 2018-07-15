@extends('layouts.app')

<title>Eli's Online Address Book</title>
@section('lookatthis')
    <br>
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to Eli's Online Address Book!</h1>
        </div>
    </div>
@endsection

@section('content')

    <div class="container">
        @include('inc.searchbar')
    </div>

@endsection
