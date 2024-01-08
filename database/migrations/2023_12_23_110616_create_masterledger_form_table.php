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
        Schema::create('masterledger_form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pwdmember_id');
            $table->unsignedBigInteger('_masterlist_id'); // Add the new column
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix');
            $table->string('types_of_assistance');
            $table->string('types_of_program');
            $table->decimal('amount');
            $table->string('unit');
            $table->string('particular', 255);
            $table->string('assistance_name');
            $table->string('description');
            $table->date('date_received');
            $table->timestamps();
    
            $table->foreign('pwdmember_id')->references('id')->on('pwd_member');
            $table->foreign('_masterlist_id')->references('id')->on('_masterlist'); // Add foreign key for masterlist
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterledger_form');
    }
};
