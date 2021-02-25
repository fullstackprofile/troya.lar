<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcsSteelmaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calcs_steelmaxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('region_id')->default(0);
            $table->string('city',60)->nullable()->default(null);
            $table->string('title',100)->nullable()->default(null);
            $table->string('phone',30)->nullable()->default(null);
            $table->text('comments')->nullable()->default(null);
            $table->dateTime('date_created')->nullable()->default(null);
            $table->unsignedTinyInteger('calc_type')->default(1);
            $table->unsignedInteger('tray_id')->default(0);

            $table->unsignedTinyInteger('tray_is_valid')->default(0);
            $table->unsignedTinyInteger('custom_region_data')->default(0);
            $table->unsignedFloat('coef_n')->default(0);
            $table->unsignedFloat('coef_n1')->default(0);
            $table->unsignedFloat('coef_n2')->default(0);
            $table->unsignedFloat('coef_y')->default(0);
            $table->unsignedFloat('param_q20')->default(0);
            $table->unsignedFloat('param_np')->default(0);
            $table->unsignedFloat('coef_kf')->default(0);
            $table->unsignedFloat('coef_kt')->default(0);

            $table->unsignedFloat('param_a')->default(0);
            $table->unsignedFloat('param_p')->default(0);
            $table->unsignedFloat('area_1')->default(0);
            $table->unsignedFloat('area_2')->default(0);
            $table->unsignedFloat('area_3')->default(0);
            $table->unsignedFloat('area_4')->default(0);
            $table->unsignedFloat('area_5')->default(0);
            $table->unsignedFloat('area_6')->default(0);
            $table->unsignedFloat('area_7')->default(0);
            $table->unsignedFloat('area_1m')->default(0);

            $table->unsignedFloat('area_8m')->default(0);
            $table->unsignedFloat('area')->default(0);
            $table->unsignedFloat('area_m')->default(0);
            $table->unsignedFloat('param_tcon')->default(0);
            $table->unsignedTinyInteger('large_roof_pitch')->default(0);
            $table->unsignedFloat('consumption_custom')->default(0);
            $table->unsignedFloat('consumption_estimated')->default(0);
            $table->unsignedFloat('coef_mr')->default(0);
            $table->unsignedFloat('param_zmid')->default(0);
            $table->unsignedFloat('param_cmid')->default(0);

            $table->unsignedTinyInteger('tray_material')->default(0);
            $table->unsignedTinyInteger('tray_load_class')->default(0);
            $table->unsignedTinyInteger('tray_type')->default(0);
            $table->unsignedSmallInteger('tray_width')->default(0);
            $table->unsignedSmallInteger('tray_height')->default(0);
            $table->unsignedSmallInteger('tray_height_full')->default(0);
            $table->unsignedFloat('tray_section_degree')->default(0);
            $table->unsignedFloat('tray_param_h')->default(0);
            $table->unsignedFloat('tray_param_f')->default(0);
            $table->unsignedFloat('tray_param_w')->default(0);

            $table->unsignedFloat('tray_param_x')->default(0);
            $table->unsignedFloat('tray_param_rg')->default(0);
            $table->unsignedFloat('tray_param_kn')->default(0);
            $table->unsignedFloat('tray_param_ky')->default(0);
            $table->unsignedFloat('tray_param_kc')->default(0);
            $table->unsignedFloat('tray_param_ik')->default(0);
            $table->unsignedFloat('tray_param_lk')->default(0);
            $table->unsignedFloat('tray_param_vcan')->default(0);
            $table->unsignedFloat('tray_param_tcan')->default(0);
            $table->unsignedFloat('tray_param_tr')->default(0);

            $table->unsignedFloat('tray_consumption')->default(0);
            $table->unsignedFloat('tray_param_dq')->default(0);
            $table->unsignedFloat('param_nb')->default(0);
            $table->unsignedFloat('param_qb')->default(0);
            $table->unsignedFloat('coef_b')->default(0);
            $table->unsignedFloat('param_qcal')->default(0);
            $table->unsignedFloat('param_vt')->default(0);
            $table->unsignedFloat('param_dt')->default(0);
            $table->unsignedFloat('consumption_total')->default(0);
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
        Schema::dropIfExists('calcs_steelmaxes');
    }
}
