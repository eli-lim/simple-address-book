<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    // Table Name
    protected $table = 'addresses';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps (default)
    public $timestamps = true;
}
