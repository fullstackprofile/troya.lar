<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsrequestStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psrequest_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->string('item_model', 20)->nullable()->default(null);
            $table->unsignedInteger('item_id')->default(null);
            $table->unsignedSmallInteger('status')->default(0);
            $table->text('comment')->nullable()->default(null);
            $table->unsignedSmallInteger('stage')->default(0);
            $table->unsignedFloat('hours_spent')->default(0);
            $table->dateTime('date_execution')->default(null);
            $table->dateTime('date_created')->default(null);
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
        Schema::dropIfExists('psrequest_statuses');
    }
}
