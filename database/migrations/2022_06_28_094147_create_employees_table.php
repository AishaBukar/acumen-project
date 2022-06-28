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
        Schema::create('employees', function (Blueprint $table) {
            // $table->unsignedBigInteger('companyID');
            $table->string('firstName');
            $table->string('lastName');
            $table->foreignId('companyID')->constrained('companies');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
                
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
