<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsrequestsTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psrequests2', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('type')->default(2);
            $table->unsignedInteger('linked_id')->default(0);
            $table->unsignedInteger('office_id')->default(0);
            $table->unsignedInteger('user_id')->default(0);
            $table->string('pub_name', 20)->nullable()->default(null);
            $table->string('guid', 50)->nullable()->default(null);
            $table->string('object_number', 20)->nullable()->default(null);
            $table->string('object_name', 100)->nullable()->default(null);
            $table->unsignedInteger('object_id')->default(0);
            $table->unsignedInteger('region_id')->default(0);
            $table->unsignedInteger('pm_id')->default(0);
            $table->unsignedInteger('mpo_id')->default(0);
            $table->unsignedInteger('engineer_id')->default(0);
            $table->unsignedInteger('top_id')->default(0);
            $table->unsignedInteger('engineer_designer_id')->default(0);
            $table->unsignedInteger('designer_coexecutive_id')->default(0);
            $table->unsignedInteger('engineer_constructor_id')->default(0);
            $table->unsignedInteger('constructor_coexecutive_id')->default(0);
            $table->text('form_data')->nullable()->default(null);
            $table->text('enabled_psgroups')->nullable()->default(null);
            $table->dateTime('date_1c')->nullable()->default(null);
            $table->dateTime('date_created')->nullable()->default(null);
            $table->dateTime('date_modified')->nullable()->default(null);
            $table->date('date_finish')->nullable()->default(null);
            $table->unsignedSmallInteger('status')->default(0);
            $table->text('status_comment')->nullable()->default(null);
            $table->dateTime('date_execution')->nullable()->default(null);
            $table->dateTime('date_status')->nullable()->default(null);
            $table->dateTime('date_statistics')->nullable()->default(null);
            $table->unsignedSmallInteger('stage')->default(0);
            $table->unsignedFloat('hours_spent')->default(0);
            $table->string('project_link', 100)->nullable()->default(null);
            $table->unsignedTinyInteger('state')->default(0);
            $table->text('stage_comment')->nullable()->default(null);
            $table->text('user_comment')->nullable()->default(null);
            $table->text('tech_task_description')->nullable()->default(null);
            $table->string('psgroups_checked', 16)->nullable()->default(null);
            $table->string('psgroups_tech_task_types', 16)->nullable()->default(null);
            $table->string('cloud_path', 255)->nullable()->default(null);
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
        Schema::dropIfExists('psrequests2');
    }
}
