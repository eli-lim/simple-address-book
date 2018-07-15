@extends('layouts.app')

@section('lookatthis')
    @if(isset($addresses) && count($addresses) > 0)
        <div class="jumbotron text-center">
            <h1>Addresses</h1>
            <br>
            @include('inc.searchbar')
        </div>
    @else
        <br>
        <div class="card text-center text-white bg-danger mb-3">
            <div class="card-header">
            <h1>No addresses found</h1>
            </div>
            <div class="card-body">
                <h5 class="card-title">You're S.P.E.C.I.A.L.!</h5>
                <p class="card-text">Looks like you're the first on this awesome site. Just hit the button below to create a new entry :)</p>
                <a href="/addresses/create" class="btn btn-primary">Add an address</a>
            </div>
        </div>
    @endif
@endsection
