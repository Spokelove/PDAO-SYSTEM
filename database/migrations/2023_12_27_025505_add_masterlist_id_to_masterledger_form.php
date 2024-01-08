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
        Schema::table('masterledger_form', function (Blueprint $table) {
            $table->unsignedBigInteger('masterlist_id'); // Add the new column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('masterledger_form', function (Blueprint $table) {
            $table->dropColumn('masterlist_id');
        });
    }
};
