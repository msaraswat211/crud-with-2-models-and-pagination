<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('roles')->insert(
            [
                ['name' => 'super admin'],
                ['name' => 'admin'],
                ['name' => 'subscriber'],
                ['name' => 'employee'],
                ['name' => 'editor'],
                ['name' => 'user']
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roles');
    }
}
