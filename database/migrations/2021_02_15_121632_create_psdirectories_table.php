<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsdirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psdirectories', function (Blueprint $table) {
            $table->id();
            $table->string('directory_type', 20)->nullable()->default(null);
            $table->string('item_code', 100)->nullable()->default(null);
            $table->string('item_title', 255)->nullable()->default(null);
            $table->unsignedInteger('item_group_id')->default(0);
            $table->unsignedSmallInteger('position')->default(0);
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
        Schema::dropIfExists('psdirectories');
    }
}
