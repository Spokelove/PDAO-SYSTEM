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
        Schema::table('residence', function (Blueprint $table) {
            $table->foreign('pwdmember_id')->references('id')->on('pwd_member')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('residence', function (Blueprint $table) {
          $table->dropColumn('pwdmember_id');
        });
    }
};
