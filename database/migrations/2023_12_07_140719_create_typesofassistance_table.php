<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typesofassistance', function (Blueprint $table) {
            $table->id();      
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix');
            $table->date('birthday');
            $table->string('Address'); 
            $table->string('purok');    
            $table->string('gender');
            $table->string('identification');
            $table->string('disability');
            $table->string('assistance');
            $table->date('date_recieved')->default(now());
     
            $table->timestamps(); 
            // Add more columns as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('typesofassistance');
    }
};
