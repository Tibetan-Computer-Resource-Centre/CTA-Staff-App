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
        Schema::create('retirement_extensions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('staffs');  
     // when a staff is deleted it's retirement extensions are automatically deleted
                
            $table->foreignId('office_id')->nullable()->constrained('offices');
            $table->foreignId('designation_id')->nullable()->constrained('designations');

            $table->date('from');
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
        Schema::dropIfExists('retirement_extensions');
    }
};
