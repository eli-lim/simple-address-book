@extends('layouts.app')

@section('content')
    <h1>Add Address</h1>
    {!! Form::open(['action' => 'AddressController@store', 'method'=>'POST']) !!}
        @csrf
        @foreach(['name' => 'Full Name',
                  'hp_num' => 'Mobile Number',
                  'email' => 'Email Address',
                  'street' => 'Street',
                  'block' => 'Block No.',
                  'unit' => 'Unit No.',
                  'zip' => 'Zip Code'] as $fieldName => $label)

              <div class="form-group">
                  {{ Form::label($fieldName, $label) }}
                  {{ Form::text($fieldName, '',
                      [
                          'class' => 'form-control',
                          'placeholder' => '...'
                      ])
                  }}
              </div>
        @endforeach

        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
