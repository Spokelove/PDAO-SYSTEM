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
        Schema::create('approvingsection', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pwdmember_id'); // Foreign key

            $table->string('last_name_of_encoder');
            $table->string('first_name_of_encoder');
            $table->string('middle_name_of_encoder');
            $table->string('suffix_of_encoder');

            $table->string('last_name_of_reporting_unit');
            $table->string('first_name_of_reporting_unit');
            $table->string('middle_name_of_reporting_unit');
            $table->string('suffix_of_reporting_unit');

            $table->string('last_name_of_control_unit');
            $table->string('first_name_of_control_unit');
            $table->string('middle_name_of_control_unit');
            $table->string('suffix_of_control_unit');

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
        Schema::dropIfExists('approvingsection');
    }
};
