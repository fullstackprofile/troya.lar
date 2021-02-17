<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsEngineersLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics_engineers_loads', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->string('item_code', 50)->nullable()->default(null);
            $table->string('tsregion_group', 50)->nullable()->default(null);
            $table->string('country', 2)->default('ru');
            $table->unsignedFloat('count')->default(0);
            $table->dateTime('date_modified')->nullable()->default(null);
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
        Schema::dropIfExists('statistics_engineers_loads');
    }
}
