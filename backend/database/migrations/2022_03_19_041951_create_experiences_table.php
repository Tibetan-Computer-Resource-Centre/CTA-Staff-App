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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('staffs');      
// when a staff is deleted it's experiences automatically deleted
                
            $table->string('title')->nullable();
            $table->foreignId('employment_type_id')->nullable()->constrained('employment_types');
            
            // should we make another table for it? it can have Name, Logo, Overview, Website, Phone number, Industry, Company Size, Headquarters, Type, Founded
            $table->string('companyName')->nullable();
            $table->string('industry')->nullable();
            
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('experiences');
    }
};
