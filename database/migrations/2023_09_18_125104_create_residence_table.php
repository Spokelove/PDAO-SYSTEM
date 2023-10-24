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
        Schema::create('residence', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pwdmember_id'); // Foreign key
           
            $table->string('house_and_street');
            $table->string('purok');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('region');
            $table->string('landline');
            $table->string('mobile_no');
            $table->string('email_add');
            $table->string('educational_attain');
            $table->string('status_of_employment');
            $table->string('types_of_employment');
            $table->string('category_of_employment');
            // This line is correct
            // Define foreign key constraint
            $table->foreign('pwdmember_id')->references('id')->on('pwd_member')->onDelete('cascade');
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
        Schema::dropIfExists('residence');
    }
};
