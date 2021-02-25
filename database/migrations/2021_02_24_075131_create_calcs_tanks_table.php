<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcsTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calcs_tanks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('region_id')->default(0);
            $table->string('city',60)->nullable()->default(null);
            $table->string('title',100)->nullable()->default(null);
            $table->string('phone',30)->nullable()->default(null);
            $table->text('comments')->nullable()->default(null);
            $table->dateTime('date_created')->nullable()->default(null);
            $table->unsignedTinyInteger('calc_type')->default(1);
            $table->unsignedTinyInteger('custom_region_data')->default(0);

            $table->unsignedInteger('provider_id')->default(0);
            $table->unsignedFloat('param_ha')->default(0);
            $table->unsignedFloat('param_hcp')->default(0);
            $table->unsignedFloat('coef_cv')->default(0);
            $table->unsignedFloat('coef_cs')->default(0);
            $table->unsignedFloat('param_p')->default(0);
            $table->unsignedFloat('area_1')->default(0);
            $table->unsignedFloat('area_2')->default(0);
            $table->unsignedFloat('area_3')->default(0);
            $table->unsignedFloat('area_4')->default(0);

            $table->unsignedFloat('area_5')->default(0);
            $table->unsignedFloat('area_6')->default(0);
            $table->unsignedFloat('area_7')->default(0);
            $table->unsignedFloat('area')->default(0);
            $table->unsignedFloat('param_cmid')->default(0);
            $table->unsignedFloat('param_f')->default(0);
            $table->unsignedFloat('param_hp')->default(0);
            $table->unsignedFloat('param_w')->default(0);
            $table->unsignedFloat('param_n')->default(0);
            $table->unsignedFloat('param_cz')->default(0);

            $table->unsignedFloat('param_wt')->default(0);
            $table->unsignedInteger('tank_id')->default(0);
            $table->unsignedInteger('tank_length')->default(0);
            $table->unsignedInteger('tank_diameter')->default(0);
            $table->unsignedFloat('tank_volume')->default(0);
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
        Schema::dropIfExists('calcs_tanks');
    }
}
