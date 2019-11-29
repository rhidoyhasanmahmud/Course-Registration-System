<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationFormsTable extends Migration
{

    public function up()
    {
        Schema::create('registration_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('institute',50);
            $table->string('department',25);
            $table->string('address',100);
            $table->string('gender',10);
            $table->string('mobile_number',15);
            $table->string('course', 50);
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registration_forms');
    }
}
