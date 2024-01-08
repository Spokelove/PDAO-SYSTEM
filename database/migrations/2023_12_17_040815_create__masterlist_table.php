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
        Schema::create('_masterlist', function (Blueprint $table) {
        $table->id();
        $table->string('Types_id');
        $table->string('Program_id');
        $table->decimal('Amount');
        $table->string('Unit');
        $table->string('Particular', 255);
        $table->string('Assistance_Name');
        $table->string('Description');
        $table->timestamps();

        // Foreign keys
        $table->foreign('Types_id')->references('id')->on('_assistancetypes_table');
        $table->foreign('Program_id')->references('id')->on('programofassistance_table');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_masterlist');
    }
};
