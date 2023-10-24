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
        Schema::create('organization_accomplished', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pwdmember_id'); // Foreign key
            $table->string('organizational_affiliated_name');
            $table->string('contact_person');
            $table->string('office_address');
            $table->string('tel_no');
            
            $table->string('applicant_last_name');
            $table->string('applicant_first_name');
            $table->string('applicant_middle_name');
            $table->string('suffix_of_applicant');

            $table->string('guardian_last_name');
            $table->string('guardian_first_name');
            $table->string('guard_middle_name');
            $table->string('guardian_suffix');

            $table->string('representative_last_name');
            $table->string('representative_first_name');
            $table->string('representative_middle_name');
            $table->string('representative_suffix');
            $table->timestamps();
     
            // This line is correct
            // Define foreign key constraint
          
            // $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_accomplished');
    }
};
