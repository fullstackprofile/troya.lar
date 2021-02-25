<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcsTunnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calcs_tunnels', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('region_id')->default(0);
            $table->string('city', 60)->nullable()->default(null);
            $table->string('title', 100)->nullable()->default(null);
            $table->string('phone', 30)->nullable()->default(null);
            $table->text('comments')->nullable()->default(null);
            $table->dateTime('date_created')->nullable()->default(null);
            $table->unsignedTinyInteger('calc_type')->default(1);
            $table->unsignedTinyInteger('custom_region_data')->default(0);

            $table->unsignedInteger('item_id')->default(0);
            $table->unsignedTinyInteger('item_type')->default(0);
            $table->unsignedFloat('area')->default(0);
            $table->unsignedFloat('area_1')->default(0);
            $table->unsignedFloat('area_2')->default(0);
            $table->unsignedFloat('area_3')->default(0);
            $table->unsignedFloat('area_4')->default(0);
            $table->unsignedFloat('area_5')->default(0);
            $table->unsignedFloat('area_6')->default(0);
            $table->unsignedFloat('area_7')->default(0);

            $table->unsignedFloat('param_cmid')->default(0);
            $table->unsignedFloat('param_ha')->default(0);
            $table->unsignedFloat('param_woc')->default(0);
            $table->unsignedFloat('coef_kf')->default(0);
            $table->unsignedTinyInteger('coef_kf_auto')->default(0);
            $table->unsignedTinyInteger('coef_kf_type')->default(0);
            $table->unsignedFloat('param_lt')->default(0);
            $table->unsignedInteger('param_nm')->default(0);
            $table->unsignedFloat('param_ageo')->default(0);
            $table->unsignedInteger('param_nl')->default(0);

            $table->unsignedInteger('param_nz')->default(0);
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
        Schema::dropIfExists('calcs_tunnels');
    }
}
