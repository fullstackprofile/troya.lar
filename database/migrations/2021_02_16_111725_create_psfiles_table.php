<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psfiles', function (Blueprint $table) {
            $table->id();
            $table->string('model', 30)->nullable()->default(null);
            $table->unsignedInteger('item_id')->default(0);
            $table->string('field_name', 30)->nullable()->default(null);
            $table->string('file_name', 255)->nullable()->default(null);
            $table->string('mime_type', 30)->nullable()->default(null);
            $table->unsignedTinyInteger('is_url')->default(0);
            $table->unsignedTinyInteger('remark')->default(0);
            $table->dateTime('date_created')->nullable()->default(null);
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
        Schema::dropIfExists('psfiles');
    }
}
