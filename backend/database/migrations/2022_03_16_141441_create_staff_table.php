<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            
            /**
             * Columns from staff table
             */
            $table->string('staffId')->unique();
            $table->string('name');
            $table->string('namet')->nullable();
            $table->string('familyName')->nullable();
            $table->string('familyNamet')->nullable();
            
            
            $table->foreignId('gender_id')->nullable()->constrained('genders');
            $table->date('dob')->nullable();
            
            /**
             * Get designation,office and duty from the latest record in JobHistories
             */            
            // $table->foreignId('office_id')->nullable()->constrained('offices');
            // $table->foreignId('designation_id')->nullable()->constrained('designations');
            // $table->foreignId('duty_id')->nullable()->constrained('duties');
            
            /**
             * Get qualification from latest Educations
             */
            // $table->foreignId('qualification_id')->nullable()->constrained('qualifications');
            
            $table->string('rcNo')->nullable();
            $table->string('gbNo')->nullable();
            $table->foreignId('appointment_category_id')->nullable()->constrained('appointment_categories');
            $table->date('joiningDate');
            $table->date('leavingDate')->nullable();
            
            /**
             * Columns from main table              
             */            
            $table->string('passportNo')->nullable();
            $table->string('email')->nullable(); // do we want it to be unique ? ->unique();
            $table->string('phoneNo', 20)->nullable();
            
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            
            $table->foreignId('blood_group_id')->nullable()->constrained('blood_groups');
            $table->string('icNo')->nullable();
            $table->string('aadhaarNo', 12)->nullable();
            $table->string('panNo', 10)->nullable();
            $table->text('remarks')->nullable();
            
            $table->timestamps();
            
            /**
             * Get these values from audits
             */
            // $table->foreignId('entered_by_user_id')->nullable()->constrained('users');
            // $table->timestamp('registerDate')->nullable();
            
            /**
             * Should be stored in family table
             */
            // $table->string('fatherName')->nullable(); 
            // $table->string('fatherNamet')->nullable();
            // $table->string('fatherRcNo')->nullable();
            // $table->string('fatherGbNo')->nullable();
            
            // $table->string('motherName')->nullable();
            // $table->string('motherNamet')->nullable();
            // $table->string('motherRcNo')->nullable();
            // $table->string('motherGbNo')->nullable();
            
            /**
             * Invert the relation. Staff has many addresses.
             */
            // $table->foreignId('address_id')->nullable()->constrained('addresses');
            //section
            //department | We can replace both section and department with org
            
            //currentDt | What is this for?                         
            //contract | This is an option in appointmentCategory 
            //Driver | We can use role
            //Cur_Fs_AppDt | What is this for?  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
