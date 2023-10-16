<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('customer')) {
            Schema::create('customer', function (Blueprint $table) {
                $table->increments('customer_id'); // Auto-incrementing primary key
                $table->string('firstName');
                $table->string('lastName');
                $table->string('phoneNumber')->unique();
                $table->string('email')->unique();
                $table->string('password');
                $table->string('address');
                $table->string('validID');
                $table->binary('idImage');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('customer');
    }
}