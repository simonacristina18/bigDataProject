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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('series')->nullable();
            $table->integer('current_group_id')->unsigned()->nullable();
            $table->integer('desired_group_id')->unsigned()->nullable();
            $table->string('university')->nullable();
            $table->string('faculty')->nullable();
            $table->string('programme')->nullable();
            $table->string('study_language')->nullable();
            $table->string('tuition_fee')->nullable();
            $table->string('role')->nullable();
            $table->string('year_of_study')->nullable();
            $table->rememberToken();
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
