@extends('layouts.addresses')

@section('content')

    @foreach($addresses as $address)
        <div class="float-left" style="margin: 5px;">
            <a href="/addresses/{{$address->id}}" class="card text-white bg-info list-group-item-action">

                <div class="card-header">
                    {{$address->name}}
                </div>
                <div class="card-body">
                <h5 class="card-title">
                    {{$address->street}}
                </h5>
                <p class="card-text">
                    @if($address->block)
                        Block {{$address->block}}
                    @endif
                    @if($address->unit)
                        #{{$address->unit}}
                    @endif
                    <br>
                    Singapore {{$address->zip}}
                    <br>
                    <small>
                        Added on {{$address->created_at}}
                    </small>
                </p>
                <!-- Route for 'edit' already established with resources -->
                <form action="/addresses/{{$address->id}}/edit">
                    <input type="submit" value="Edit" class="btn btn-danger float-right">
                </form>
                </div>
            </a>
        </div>
    @endforeach
        
@endsection
