<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcsKnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
     * CREATE TABLE `calcs_kns` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `region_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `city` varchar(60) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `comments` text,
  `date_created` datetime DEFAULT NULL,
  `calc_type` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `custom_region_data` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `coef_n` float UNSIGNED NOT NULL DEFAULT '0',
  `param_qr` float UNSIGNED NOT NULL DEFAULT '0',
  `param_tr` float UNSIGNED NOT NULL DEFAULT '0',
  `param_qt` float UNSIGNED NOT NULL DEFAULT '0',
  `param_qm` float UNSIGNED NOT NULL DEFAULT '0',
  `param_tn` float UNSIGNED NOT NULL DEFAULT '0',
  `param_tk` float UNSIGNED NOT NULL DEFAULT '0',
  `param_w` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

     * */
    public function up()
    {
        Schema::create('calcs_kns', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('region_id')->default(0);
            $table->string('city', 60)->nullable()->default(null);
            $table->string('title', 100)->nullable()->default(null);
            $table->string('phone', 30)->nullable()->default(null);
            $table->text('comments')->nullable()->default(null);
            $table->dateTime('date_created')->nullable()->default(null);
            $table->unsignedTinyInteger('calc_type')->default(0);
            $table->unsignedTinyInteger('custom_region_data')->default(0);
            $table->unsignedFloat('coef_n')->default(0);
            $table->unsignedFloat('param_qr')->default(0);
            $table->unsignedFloat('param_tr')->default(0);
            $table->unsignedFloat('param_qt')->default(0);
            $table->unsignedFloat('param_qm')->default(0);
            $table->unsignedFloat('param_tn')->default(0);
            $table->unsignedFloat('param_tk')->default(0);
            $table->unsignedFloat('param_w')->default(0);
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
        Schema::dropIfExists('calcs_kns');
    }
}
