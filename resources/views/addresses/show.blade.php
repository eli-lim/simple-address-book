@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-md-2">
                <a href="/addresses" class="btn btn-success">Go Back</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <h3 class=>{{$address->street}}</h3>
        <div class="">
            <p>
                @if($address->block)
                    {{$address->block}},
                @endif
                {{$address->unit}}<br>
                {{$address->zip}}
                <br>
                <small>
                    Added on {{$address->created_at}}
                </small>
            </p>
        </div>
    </div>

@endsection
