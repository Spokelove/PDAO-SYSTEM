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
        Schema::create('_pdao_assistance_controller', function (Blueprint $table) {
            $table->id();
            $table->string('first-name');
            $table->string('last-name');
            $table->string('middle-name');
            $table->string('suffix');
            $table->string('birthday');
            $table->string('age');        
            $table->string('barangay');
            $table->string('purok');
            $table->string('gender');
            $table->string('types_of_assistance');
            $table->string('Date Recieved');
            $table->string('encoder');
            $table->string('identification');
            $table->rememberToken();
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
        Schema::dropIfExists('_pdao_assistance_controller');
    }
};
