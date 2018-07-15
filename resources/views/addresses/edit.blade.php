@extends('layouts.app')

@section('content')
    <h1>Add Address</h1>
    {!! Form::open([
        'action' => ['AddressController@update', $address->id], 'method'=>'POST'
        ])
    !!}
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
                  {{ Form::text($fieldName, $address->getAttribute($fieldName) ?? '',
                      [
                          'class' => 'form-control',
                          'placeholder' => '...'
                      ])
                  }}
              </div>
        @endforeach

    {{ Form::hidden('_method', 'PUT') }} <!-- <<< Important -->
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

    {!! Form::open([
        'action' => ['AddressController@destroy', $address->id],
        'method' => 'POST',
        'onSubmit' => 'return confirmDelete()'
        ])
    !!}

        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', [
                'class' => 'btn btn-danger float-right'
            ])
        }}
    {!! Form::close() !!}
    </div>
@endsection


<script>
    function confirmDelete() {
        var result = confirm('Are you sure you want to delete?');
        return result;
    }
</script>﻿
