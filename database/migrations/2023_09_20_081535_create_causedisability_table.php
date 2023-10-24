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
        Schema::create('causedisability', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->unsignedBigInteger('pwdmember_id'); // Foreign key referencing the pwdmember table
            $table->string('cause_of_disability'); // Column for types of disability
            // $table->boolean('is_checked')->default(false); // Boolean column with default value false
            $table->timestamps(); // Created at and Updated at timestamps
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('causedisability');
    }
};
