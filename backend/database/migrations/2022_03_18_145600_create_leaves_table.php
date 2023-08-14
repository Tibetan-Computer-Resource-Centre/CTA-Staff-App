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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('staff_id')->constrained('staffs');
            $table->foreignId('staff_id')->constrained('staffs');                
             // when a staff is deleted it's leaves are automatically deleted
            $table->foreignId('leave_category_id')->constrained('leave_categories');
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
        Schema::dropIfExists('leaves');
    }
};
