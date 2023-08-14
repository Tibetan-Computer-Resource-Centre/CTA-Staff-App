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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('staff_id')->constrained('staffs');               
 // when a staff is deleted it's address is automatically deleted
            $table->foreignId('address_type_id')->constrained('address_types');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->foreignId('state_id')->nullable()->constrained('states');
            $table->foreignId('town_id')->nullable()->constrained('towns');
            $table->string('postal_code')->nullable();            
            $table->point('coordinate')->nullable();                      
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
        Schema::dropIfExists('addresses');
    }
};
