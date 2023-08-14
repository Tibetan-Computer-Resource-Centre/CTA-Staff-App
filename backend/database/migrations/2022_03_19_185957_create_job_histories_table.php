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
        Schema::create('job_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('staffs');                
 // when a staff is deleted it's promotions are automatically deleted
                
            $table->date('date')->nullable();
            $table->foreignId('job_history_category_id')->nullable()->constrained('job_history_categories');
            $table->foreignId('designation_id')->nullable()->constrained('designations');            
            $table->foreignId('office_id')->nullable()->constrained('offices');
            $table->foreignId('duty_id')->nullable()->constrained('duties');
            
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
        Schema::dropIfExists('job_histories');
    }
};
