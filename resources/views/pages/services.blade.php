@extends('layouts.app')

@section('content')

    @if(count($services) > 0)
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach
    @endif
@endsection
