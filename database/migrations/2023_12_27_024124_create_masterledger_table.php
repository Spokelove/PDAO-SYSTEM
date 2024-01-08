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
        Schema::create('masterledger', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pwd_member_id');
            // $table->unsignedBigInteger('_masterlist_id')->nullable(); // Make the column nullable
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix_of_applicant');
            $table->string('Types_id');
            $table->string('Program_id');
            $table->decimal('Amount');
            $table->string('Unit');
            $table->string('Particular', 255);
            $table->string('Assistance_Name');
            $table->string('Description');
            $table->date('Date_Received');
            $table->timestamps();
    
            $table->foreign('pwd_member_id')->references('id')->on('pwd_member');
            // $table->foreign('_masterlist_id')->references('id')->on('_masterlist')->nullable(); // Add nullable to foreign key for masterlist
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterledger');
    }
};
