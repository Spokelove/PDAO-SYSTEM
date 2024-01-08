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
        Schema::table('masterledger', function (Blueprint $table) {
            $table->renameColumn('masterlist_id', 'new_masterlist_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('masterledger', function (Blueprint $table) {
            $table->renameColumn('new_masterlist_id', 'masterlist_id');
        });
    }
};
