<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_type');
            $table->string('user_name', 50)->nullable();
            $table->string('user_hash', 32)->nullable()->default(null);
            $table->string('item_code', 50)->nullable()->default(null);
            $table->unsignedSmallInteger('position')->default(0);
            $table->unsignedInteger('tsoffice_id')->default(0);
            $table->unsignedInteger('manager_id')->default(0);
            $table->string('email', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->unsignedTinyInteger('organization_type');
            $table->string('organization_name', 50)->nullable();
            $table->string('organization_post', 50)->nullable();
            $table->unsignedTinyInteger('georegion_id');
            $table->string('city', 30)->nullable();
            $table->string('country', 2)->default('ru');
            $table->string('tag', 20)->nullable()->default(null);
            $table->string('login', 50)->nullable();
            $table->string('password', 50)->nullable();
            $table->date('date_created')->nullable()->default(null);
            $table->dateTime('date_login')->nullable()->default(null);
            $table->date('date_hired')->nullable()->default(null);
            $table->date('date_fired')->nullable()->default(null);
            $table->unsignedTinyInteger('is_active')->default(0);
            $table->unsignedTinyInteger('is_approved')->default(0);





//            $table->string('name');
//            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
//            $table->string('password');
//            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
