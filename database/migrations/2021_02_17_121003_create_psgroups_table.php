<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psgroups', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)->nullable();
            $table->string('code', 2)->nullable()->default(null);
            $table->string('image', 255)->nullable()->default(null);
            $table->unsignedSmallInteger('position')->default(0);
            $table->unsignedSmallInteger('is_active')->default(0);
            $table->unsignedSmallInteger('index')->default(0);
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
        Schema::dropIfExists('psgroups');
    }
}
