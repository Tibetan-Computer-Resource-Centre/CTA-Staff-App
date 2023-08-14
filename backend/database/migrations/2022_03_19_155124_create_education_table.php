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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('staff_id')->constrained('staffs');                
 // when a staff is deleted it's educations are automatically deleted

            $table->foreignId('qualification_id')->nullable()->constrained('qualifications');
            $table->string('fieldOfStudy')->nullable();
                                    
            // should we make another table for it? it can have Name, Logo, Overview, Website, Phone number, Industry, Company Size, Headquarters, Type, Founded
            // $table->string('institution')->nullable();
            $table->foreignId('educational_institution_id')->nullable()->constrained('educational_institutions');
                                    
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            
            $table->string('grade')->nullable();
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
        Schema::dropIfExists('education');
    }
};
