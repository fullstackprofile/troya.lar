<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcsLositemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
     *
CREATE TABLE `calcs_lositems` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `region_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `city` varchar(60) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `comments` text,
  `date_created` datetime DEFAULT NULL,

  `calc_type` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `company_type` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `item_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `item_is_valid` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `tank_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tank_is_valid` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `custom_region_data` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `provider_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `param_q20` float UNSIGNED NOT NULL DEFAULT '0',


  `coef_n` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_n1` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_n2` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_y` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_mr` float UNSIGNED NOT NULL DEFAULT '0',
  `param_hd` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_c` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_cv` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_cs` float UNSIGNED NOT NULL DEFAULT '0',
  `param_hcp` float UNSIGNED NOT NULL DEFAULT '0',
  `param_ha` float UNSIGNED NOT NULL DEFAULT '0',
  `param_hp` float UNSIGNED NOT NULL DEFAULT '0',


  `param_f` float NOT NULL DEFAULT '0',
  `param_p` float UNSIGNED NOT NULL DEFAULT '0',
  `param_a` float UNSIGNED NOT NULL DEFAULT '0',
  `area_1` float UNSIGNED NOT NULL DEFAULT '0',
  `area_2` float UNSIGNED NOT NULL DEFAULT '0',
  `area_3` float UNSIGNED NOT NULL DEFAULT '0',
  `area_4` float UNSIGNED NOT NULL DEFAULT '0',
  `area_5` float UNSIGNED NOT NULL DEFAULT '0',
  `area_6` float UNSIGNED NOT NULL DEFAULT '0',
  `area_7` float UNSIGNED NOT NULL DEFAULT '0',
  `area` float UNSIGNED NOT NULL DEFAULT '0',


  `param_tcon` float UNSIGNED NOT NULL DEFAULT '0',
  `param_zmid` float UNSIGNED NOT NULL DEFAULT '0',
  `param_cmid` float UNSIGNED NOT NULL DEFAULT '0',
  `param_lcan` float UNSIGNED NOT NULL DEFAULT '0',
  `param_vcan` float UNSIGNED NOT NULL DEFAULT '0',
  `param_lp` float UNSIGNED NOT NULL DEFAULT '0',
  `param_vp` float UNSIGNED NOT NULL DEFAULT '0',
  `param_tcan` float UNSIGNED NOT NULL DEFAULT '0',
  `param_tp` float UNSIGNED NOT NULL DEFAULT '0',
  `param_tr` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_kt` float UNSIGNED NOT NULL DEFAULT '0',


  `coef_kf` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_c1` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_c2` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_c3` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_c4` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_c5` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_c6` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_c7` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_z1` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_z2` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_z3` float UNSIGNED NOT NULL DEFAULT '0',

  `coef_z4` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_z5` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_z6` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_z7` float UNSIGNED NOT NULL DEFAULT '0',
  `param_w` float UNSIGNED NOT NULL DEFAULT '0',
  `param_qr` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_b` float UNSIGNED NOT NULL DEFAULT '0',
  `param_qcal` float UNSIGNED NOT NULL DEFAULT '0',
  `param_plim` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_k1` float UNSIGNED NOT NULL DEFAULT '0',
  `coef_k2` float NOT NULL DEFAULT '0',


  `param_n` smallint(2) UNSIGNED NOT NULL DEFAULT '0',
  `param_cz` float UNSIGNED NOT NULL DEFAULT '0',
  `param_wt` float UNSIGNED NOT NULL DEFAULT '0',
  `param_t1` float UNSIGNED NOT NULL DEFAULT '0',
  `param_t2` float UNSIGNED NOT NULL DEFAULT '0',
  `param_qlim` float UNSIGNED NOT NULL DEFAULT '0',
  `param_np` smallint(2) UNSIGNED NOT NULL DEFAULT '0',
  `param_qo` float UNSIGNED NOT NULL DEFAULT '0',
  `param_qon` float UNSIGNED NOT NULL DEFAULT '0',
  `tank_diameter` float UNSIGNED NOT NULL DEFAULT '0',
  `tank_length` float UNSIGNED NOT NULL DEFAULT '0',
  `tank_volume` float UNSIGNED NOT NULL DEFAULT '0',
  `lositem_diameter` float UNSIGNED NOT NULL DEFAULT '0',
  `lositem_length` float UNSIGNED NOT NULL DEFAULT '0',
  `lositem_performance` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
     * */
    public function up()
    {
        Schema::create('calcs_lositems', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('region_id')->default(0);
            $table->string('city',60)->nullable()->default(null);
            $table->string('title',100)->nullable()->default(null);
            $table->string('phone',30)->nullable()->default(null);
            $table->text('comments')->nullable()->default(null);
            $table->dateTime('date_created')->nullable()->default(null);
            $table->unsignedTinyInteger('calc_type')->default(1);
            $table->unsignedTinyInteger('company_type')->default(0);
            $table->unsignedInteger('item_id')->default(0);
            $table->unsignedTinyInteger('item_is_valid')->default(0);
            $table->unsignedInteger('tank_id')->default(0);
            $table->unsignedTinyInteger('tank_is_valid')->default(0);
            $table->unsignedTinyInteger('custom_region_data')->default(0);
            $table->unsignedInteger('provider_id')->default(0);
            $table->unsignedFloat('param_q20')->default(0);
            $table->unsignedFloat('coef_n')->default(0);
            $table->unsignedFloat('coef_n1')->default(0);
            $table->unsignedFloat('coef_n2')->default(0);
            $table->unsignedFloat('coef_y')->default(0);
            $table->unsignedFloat('coef_mr')->default(0);
            $table->unsignedFloat('param_hd')->default(0);
            $table->unsignedFloat('coef_c')->default(0);
            $table->unsignedFloat('coef_cv')->default(0);
            $table->unsignedFloat('coef_cs')->default(0);
            $table->unsignedFloat('param_hcp')->default(0);
            $table->unsignedFloat('param_ha')->default(0);
            $table->unsignedFloat('param_hp')->default(0);
            $table->float('param_f')->default(0);
            $table->unsignedFloat('param_p')->default(0);
            $table->unsignedFloat('param_a')->default(0);
            $table->unsignedFloat('area_1')->default(0);
            $table->unsignedFloat('area_2')->default(0);
            $table->unsignedFloat('area_3')->default(0);
            $table->unsignedFloat('area_4')->default(0);
            $table->unsignedFloat('area_5')->default(0);
            $table->unsignedFloat('area_6')->default(0);
            $table->unsignedFloat('area_7')->default(0);
            $table->unsignedFloat('area')->default(0);
            $table->unsignedFloat('param_tcon')->default(0);
            $table->unsignedFloat('param_zmid')->default(0);
            $table->unsignedFloat('param_cmid')->default(0);
            $table->unsignedFloat('param_lcan')->default(0);
            $table->unsignedFloat('param_vcan')->default(0);
            $table->unsignedFloat('param_lp')->default(0);
            $table->unsignedFloat('param_vp')->default(0);
            $table->unsignedFloat('param_tcan')->default(0);
            $table->unsignedFloat('param_tp')->default(0);
            $table->unsignedFloat('param_tr')->default(0);
            $table->unsignedFloat('coef_kt')->default(0);
            $table->unsignedFloat('coef_kf')->default(0);
            $table->unsignedFloat('coef_c1')->default(0);
            $table->unsignedFloat('coef_c2')->default(0);
            $table->unsignedFloat('coef_c3')->default(0);
            $table->unsignedFloat('coef_c4')->default(0);
            $table->unsignedFloat('coef_c5')->default(0);
            $table->unsignedFloat('coef_c6')->default(0);
            $table->unsignedFloat('coef_c7')->default(0);
            $table->unsignedFloat('coef_z1')->default(0);
            $table->unsignedFloat('coef_z2')->default(0);
            $table->unsignedFloat('coef_z3')->default(0);
            $table->unsignedFloat('coef_z4')->default(0);
            $table->unsignedFloat('coef_z5')->default(0);
            $table->unsignedFloat('coef_z6')->default(0);
            $table->unsignedFloat('coef_z7')->default(0);
            $table->unsignedFloat('param_w')->default(0);
            $table->unsignedFloat('param_qr')->default(0);
            $table->unsignedFloat('coef_b')->default(0);
            $table->unsignedFloat('param_qcal')->default(0);
            $table->unsignedFloat('param_plim')->default(0);
            $table->unsignedFloat('coef_k1')->default(0);
            $table->float('coef_k2')->default(0);
            $table->unsignedSmallInteger('param_n')->default(0);
            $table->unsignedFloat('param_cz')->default(0);
            $table->unsignedFloat('param_wt')->default(0);
            $table->unsignedFloat('param_t1')->default(0);
            $table->unsignedFloat('param_t2')->default(0);
            $table->unsignedFloat('param_qlim')->default(0);
            $table->unsignedSmallInteger('param_np')->default(0);
            $table->unsignedFloat('param_qo')->default(0);
            $table->unsignedFloat('param_qon')->default(0);
            $table->unsignedFloat('tank_diameter')->default(0);
            $table->unsignedFloat('tank_length')->default(0);
            $table->unsignedFloat('tank_volume')->default(0);
            $table->unsignedFloat('lositem_diameter')->default(0);
            $table->unsignedFloat('lositem_length')->default(0);
            $table->unsignedFloat('lositem_performance')->default(0);
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
        Schema::dropIfExists('calcs_lositems');
    }
}
