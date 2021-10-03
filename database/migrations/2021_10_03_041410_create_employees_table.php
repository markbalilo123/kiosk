<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("uuid",40)->nullable();
            $table->string("emp_code", 30)->nullable()->unique();
            $table->string("first_name",75)->nullable();
            $table->string("middle_name");
            $table->string("last_name",75)->nullable();
            $table->string("position")->nullable();
            $table->string("pin",8)->nullable();
            $table->longText("other_info")->nullable();
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
        Schema::dropIfExists('employees');
    }
}
