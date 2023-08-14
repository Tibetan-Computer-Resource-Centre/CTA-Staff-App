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
        Schema::create('post_allocation_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_id')->constrained('offices');
            $table->foreignId('designation_id')->constrained('designations');
            $table->integer('available');
            $table->integer('occupied')->nullable();
            $table->foreignId('post_allocation_id')
                ->references('id')
                ->on('post_allocations')
                ->onUpdate('cascade')
                ->onDelete('cascade'); // when a post allocation is deleted, all its data is automatically deleted
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
        Schema::dropIfExists('post_allocation_data');
    }
};
