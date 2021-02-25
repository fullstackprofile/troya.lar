<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcsFlooringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
     *
CREATE TABLE `calcs_floorings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `region_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `city` varchar(60) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `comments` text,
  `date_created` datetime DEFAULT NULL,
  `calc_type` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `custom_region_data` tinyint(1) NOT NULL DEFAULT '0',

  `item_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `item_type` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `param_tn` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `param_sp` varchar(5) DEFAULT NULL,
  `param_sn` varchar(7) DEFAULT NULL,
  `param_lp` smallint(3) UNSIGNED NOT NULL DEFAULT '0',
  `param_ln` smallint(3) UNSIGNED NOT NULL DEFAULT '0',
  `param_lo` smallint(3) UNSIGNED NOT NULL DEFAULT '0',
  `param_b` smallint(3) UNSIGNED NOT NULL DEFAULT '0',

  `param_area` float UNSIGNED NOT NULL DEFAULT '0',
  `param_mu` float UNSIGNED NOT NULL DEFAULT '0',
  `param_mn` float UNSIGNED NOT NULL DEFAULT '0',
  `param_fp` float UNSIGNED NOT NULL DEFAULT '0',
  `param_fv` float UNSIGNED NOT NULL DEFAULT '0',
  `param_kh` float UNSIGNED NOT NULL DEFAULT '0',
  `param_tnn` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;
     *
     * */
    public function up()
    {
        Schema::create('calcs_floorings', function (Blueprint $table) {
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
            $table->unsignedTinyInteger('param_tn')->default(0);
            $table->string('param_sp')->nullable()->default(null);
            $table->string('param_sn')->nullable()->default(null);
            $table->unsignedSmallInteger('param_lp')->default(0);
            $table->unsignedSmallInteger('param_ln')->default(0);
            $table->unsignedSmallInteger('param_lo')->default(0);
            $table->unsignedSmallInteger('param_b')->default(0);
            $table->unsignedFloat('param_area')->default(0);
            $table->unsignedFloat('param_mu')->default(0);
            $table->unsignedFloat('param_mn')->default(0);
            $table->unsignedFloat('param_fp')->default(0);
            $table->unsignedFloat('param_fv')->default(0);
            $table->unsignedFloat('param_kh')->default(0);
            $table->unsignedTinyInteger('param_tnn')->default(0);
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
        Schema::dropIfExists('calcs_floorings');
    }
}
