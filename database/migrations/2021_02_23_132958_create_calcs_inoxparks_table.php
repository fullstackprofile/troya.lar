<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcsInoxparksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('calcs_inoxparks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('region_id')->default(0);
            $table->string('city', 60)->nullable()->default(null);
            $table->string('title', 100)->nullable()->default(null);
            $table->string('phone', 30)->nullable()->default(null);
            $table->text('comments')->nullable()->default(null);
            $table->dateTime('date_created')->nullable()->default(null);
            $table->unsignedTinyInteger('calc_type')->default(1);
            $table->unsignedInteger('tray_id')->default(0);
            $table->unsignedTinyInteger('tray_is_valid')->default(0);
            $table->unsignedTinyInteger('custom_region_data')->default(0);
            $table->unsignedFloat('consumption_custom')->default(0);
            $table->unsignedFloat('tray_width')->default(0);
            $table->unsignedFloat('tray_height_min')->default(0);
            $table->unsignedFloat('tray_height_max')->default(0);
            $table->unsignedFloat('tray_angle')->default(0);
            $table->unsignedFloat('tray_section_degree')->default(0);
            $table->unsignedFloat('tray_param_h')->default(0);
            $table->unsignedFloat('tray_param_w')->default(0);
            $table->unsignedFloat('tray_param_x')->default(0);
            $table->unsignedFloat('tray_param_rg')->default(0);
            $table->unsignedFloat('tray_param_kn')->default(0);
            $table->unsignedFloat('tray_param_ky')->default(0);
            $table->unsignedFloat('tray_param_kc')->default(0);
            $table->unsignedFloat('tray_param_ik')->default(0);
            $table->unsignedFloat('tray_param_vcan')->default(0);
            $table->unsignedFloat('tray_consumption')->default(0);
            $table->unsignedFloat('tray_param_dq')->default(0);
            $table->unsignedFloat('tray_height_calculated')->default(0);
            $table->unsignedFloat('tray_section_degree_actual')->default(0);
            $table->unsignedFloat('tray_height_hydr_actual')->default(0);
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
        Schema::dropIfExists('calcs_inoxparks');
    }
}
