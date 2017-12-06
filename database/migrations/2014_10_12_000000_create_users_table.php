<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('admin')->default(1);
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
                'email' => 'admin@gmail.com',
                'password' => bcrypt('adminone'),
                'admin' => 1,
                'name' => 'Enjay Mallari',
        ]);
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
