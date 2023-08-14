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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('staffs');
                // when a staff is deleted it's families are automatically deleted
            $table->string('name')->nullable();
            $table->string('namet')->nullable();
            $table->foreignId('relation_id')->nullable()->constrained('relations');
            $table->string('rcNo')->nullable();
            $table->string('gbNo')->nullable();
            $table->foreignId('gender_id')->nullable()->constrained('genders');
            // $table->foreignId('related_staff_id')->nullable()->constrained('staffs');
            $table->date('dob')->nullable();
            $table->string('workplace')->nullable();
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
        Schema::dropIfExists('families');
    }
};
