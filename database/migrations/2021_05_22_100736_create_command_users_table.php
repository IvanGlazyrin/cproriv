<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_users', function (Blueprint $table) {
            $table->id();
            $table->integer('command_id');
            $table->integer('user_id');
            $table->integer('command_user_status_id');
            $table->integer('admin_user_id');//user who created
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
        Schema::dropIfExists('command_users');
    }
}
