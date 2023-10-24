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
        Schema::create('pwd_member', function (Blueprint $table) {
            $table->id();
            $table->string('pwd_no');
            $table->date('date_applied')->default(now());
            $table->string('application');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix_of_applicant');
            $table->date('birthday');
            $table->integer('age');
            $table->string('gender');
            $table->string('status');
            $table->string('image_path')->nullable(); // Assuming image_path can be null
            $table->string('email_add');
            $table->string('expirationDate');
            // Add more columns as needed

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
        Schema::dropIfExists('pwd_member');
    }
};
