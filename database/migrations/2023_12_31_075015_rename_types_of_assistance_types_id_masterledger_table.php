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
            $table->renameColumn('types_of_assistance', 'types_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // If you ever need to rollback, you can use this method.
        Schema::table('masterledger', function (Blueprint $table) {
            $table->renameColumn('types_id', 'types_of_assistance');
        });
    }
};
