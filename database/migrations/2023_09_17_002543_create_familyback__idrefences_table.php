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
        Schema::create('familyback__idrefences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('_pwd_member_id')->unique; // Foreign key
            $table->string('father_last_name');
            $table->string('father_first_name');
            $table->string('father_middle_name');
            $table->string('suffix_of_father')->nullable();
            $table->string('mother_last_name');
            $table->string('mother_first_name');
            $table->string('mother_middle_name');
            
            $table->string('guardian_last_name');
            $table->string('guardian_first_name');
            $table->string('guardian_middle_name');
            $table->string('suffix_of_guardian')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('gsis_no')->nullable();
            $table->string('pag_ibig_no')->nullable();
            $table->string('psn_no')->nullable();
            $table->string('philhealth')->nullable();
            $table->string('occupations')->nullable();
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
        Schema::dropIfExists('familyback__idrefences');
    }
};
