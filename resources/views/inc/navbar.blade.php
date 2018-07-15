<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addresses">Addresses</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/addresses/create">Add New Address</a>
      </li>
    </ul>
    {{-- {!! Form::open(['action' => 'AddressController@search',
                    'method' => 'POST',
                    'class'=> 'form-inline my-2 my-lg-0']) !!}
        @csrf
        {{Form::text('search', '', [
            'class' => 'form-control mr-sm-2',
            'placeholder' => 'Search',
            'aria-label' => 'Search'])}}

        {{Form::button('', [
            'class' => 'btn btn-outline-success my-2 my-sm-0',
            'type' => 'submit',
            'value' => 'Search'])}}

    {!! Form::close() !!} --}}
  </div>
</nav>
