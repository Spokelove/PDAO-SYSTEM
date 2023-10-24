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
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->integer('pwd_no');
            $table->timestamp('date_applied')->default(now());
            $table->enum('application', ['New', 'Renew', 'Transfer'])->default('New');
            $table->text('last_name');
            $table->text('first_name');
            $table->text('middle_name');
            $table->text('suffix_of_applicant',['Jr', 'Sr','I','II','III','IV','V'])->default('jr');
            $table->date('birthday');
            $table->integer('age');
            $table->text('gender');
            $table->enum('status', ['Single', 'Separated', 'Cohabitation (live-in)','Married','Widow /er'])->default('New');
            $table->text('email_add');
            $table->text('house_and_street');
            $table->enum('purok', ['1', '2', '3','4','5'])->default('1');
            $table->text('barangay',['poblacion', 'batangan', 'lumbo','vintar','bagontaas'])->default('poblacion');
            $table->text('municipality',['poblacion'])->default('poblacion');
            $table->text('province');
            $table->text('region');
            $table->integer('landline')->nullable();
            $table->integer('mobile_no');      
            $table->text('educational_attain');
            $table->text('status_of_employment');
            $table->text('types_of_employment');
            $table->text('category_of_employment');  
            $table->text('father_last_name');
            $table->text('father_first_name');
            $table->text('father_middle_name');
            $table->text('suffix_of_father');
            $table->text('mother_last_name');
            $table->text('mother_first_name');
            $table->text('mother_middle_name');
            $table->text('guardian_last_name');
            $table->text('guardian_first_name');
            $table->text('guardian_middle_name');
            $table->text('suffix_of_guardian');
            $table->integer('sss_no');
            $table->integer('gsis_no');
            $table->integer('pag-ibig_no');
            $table->integer('psn_no');
            $table->integer( 'philhealth');
            $table->text('occupations'); 
            $table->text('types_of_disease');        
            $table->text('kinds_of_disease');
            $table->text('organizational_affliated_name');
            $table->text('contact_person');
            $table->text('office_address');
            $table->integer('tel_no');         
            $table->text('applicant_last_name');
            $table->text('applicant_first_name');
            $table->text('applicant_middle_name');
            $table->text('applicant_suffix'); 
            $table->text('guard_last_name');
            $table->text('guard_first_name');
            $table->text('guard_middle_name');
            $table->text('guardian_suffix'); 
            $table->text('representative_last_name');
            $table->text('representative_first_name');
            $table->text('representative_middle_name');
            $table->text('representative_suffix'); 
            $table->integer('licensed_no_of_physician');;
            $table->text('last_name_of_physician');
            $table->text('first_name_of_physician');
            $table->text('middle_name_of_physician');
            $table->text('suffix_of_physician');
            $table->text('last_name_of_processing_officer');
            $table->text('first_name_of_processing_officer');
            $table->text('middle_name_of_processing_officer');
            $table->text('suffix_of_processing_officer');  
            $table->text('last_name_of_approving_officer');
            $table->text('first_name_of_approving_officer');
            $table->text('middle_name_of_approving_officer');
            $table->text('suffix_of_approving_officer');
            $table->text('last_name_of_encoder');
            $table->text('first_name_of_encoder');
            $table->text('middle_name_of_encoder');
            $table->text('suffix_of_encoder');
            $table->text('last_name_of_reporting_unit');
            $table->text('first_name__of_reporting_unit');
            $table->text('middle_name_of_reporting_unit');
            $table->text('suffix_of_reporting_unit');
            $table->text('last_name__of_control_unit');
            $table->text('first_name__of_control_unit');
            $table->text('middle_name_of_control_unit');
            $table->text('suffix_of_control_unit');
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
        Schema::dropIfExists('registration');
    }
};
