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
        Schema::create('_approvingofficer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pwdmember_id'); // Foreign key
            
            $table->string('licensed_no_of_physician');
            $table->string('last_name_of_physician');
            $table->string('first_name_of_physician');
            $table->string('middle_name_of_physician');
            $table->string('suffix_of_physician');

            $table->string('last_name_of_processing_officer');
            $table->string('first_name_of_processing_officer');
            $table->string('middle_name_of_processing_officer');
            $table->string('suffix_of_processing_officer');

            $table->string('last_name_of_approving_officer');
            $table->string('first_name_of_approving_officer');
            $table->string('middle_name_of_approving_officer');
            $table->string('suffix_of_approving_officer');

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
        Schema::dropIfExists('_approvingofficer');
    }
};
