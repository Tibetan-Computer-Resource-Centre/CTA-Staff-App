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
        Schema::create('probations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('staffs');                   
                
            $table->date('from');
            $table->date('to')->nullable();
            $table->foreignId('designation_id')->nullable()->constrained('designations');            
            $table->foreignId('office_id')->nullable()->constrained('offices');
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
        Schema::dropIfExists('probations');
    }
};
