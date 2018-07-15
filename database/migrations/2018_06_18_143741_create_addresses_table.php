<?php

# To make changes to the current schema,
# php artisan migrate:refresh

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('hp_num', 8);
            $table->string('email');
            $table->string('street');
            $table->string('block')->nullable();
            $table->string('unit')->nullable();
            $table->string('zip', 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
