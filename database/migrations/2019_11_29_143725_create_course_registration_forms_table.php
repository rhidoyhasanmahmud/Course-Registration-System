<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistrationFormsTable extends Migration
{

    public function up()
    {
        Schema::create('course_registration_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name',25);
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
        Schema::dropIfExists('course_registration_forms');
    }
}
