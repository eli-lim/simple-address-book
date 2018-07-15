<style>

.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

@media screen and (min-width: 768px) {
    #adv-search {
        width: 500px;
        margin: 0 auto;
    }
    .dropdown.dropdown-lg {
        position: static !important;
    }
    .dropdown.dropdown-lg .dropdown-menu {
        min-width: 500px;
    }
}
</style>

<?php

$fields = ['name' => 'Full Name',
          'hp_num' => 'Mobile Number',
          'email' => 'Email Address',
          'street' => 'Street',
          'block' => 'Block No.',
          'unit' => 'Unit No.',
          'zip' => 'Zip Code'];

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input name="search" type="text" class="form-control" placeholder="Search me" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                {!! Form::open([
                                    'action' => 'AddressController@search',
                                    'method' => 'POST'
                                    ]) !!}
                                    @csrf
                                  <label>Search by</label>
                                  <div class="form-group">
                                    <select name="searchby" class="form-control">
                                        <option value="" selected>Any</option>
                                        @foreach($fields as $fieldName => $label)
                                            <option value={{$fieldName}}>{{$label}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="form-inline">
                                    <label for="contain">Sort by</label>
                                    <select name="orderby" class="form-control">
                                        <option value="" selected>None</option>
                                        @foreach($fields as $fieldName => $label)
                                            <option value={{$fieldName}}>{{$label}}</option>
                                        @endforeach
                                    </select>
                                    &nbsp;
                                    <select name="order" class="form-control">
                                        <option value="ASC">Ascending</option>
                                        <option value="DESC">Descending</option>
                                    </select>
                                  </div>
                                  <br>
                                  <button type="submit" class="btn btn-primary">Search</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Go!</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
	</div>
</div>
