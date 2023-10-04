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
        Schema::create('agents_sample', function (Blueprint $table) {
            $table->id();
            $table->string('agent_no');
            $table->string('name');
            $table->string('Email');
            $table->string('mobile');
            $table->integer('IsActive');
            $table->string('appointed_on');
            $table->integer('Ismanager');
            $table->integer('AttathmentCode');
            $table->integer('BranchCode');
            $table->string('BranchNameDisplay');
            $table->integer('UnitUnderBranchCode');
            $table->string('UnitUnderBranchManager');
            $table->integer('UnitCode');
            $table->string('UnitNameDisplay');
            $table->integer('TeamCode');
            $table->string('TeamNameDisplay');
            $table->string('PreviousUnitName');
            $table->string('PreviousUnitNameDESC');
            $table->string('PreviousTeamName');
            $table->string('PreviousTeamNameDESC');
            $table->string('Password');
            $table->string('Role');
            $table->integer('accept_leads');
            $table->string('profile_pic');
            $table->integer('rank');
            $table->string('AgencyNameDisplay');
            $table->string('DirectorateNameDisplay');
            $table->string('AADNameDisplay');
            $table->string('Gender');
            $table->string('token');
            // Add more columns as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
