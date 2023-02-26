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
            $table->string('provider_id')->nullable();

            $table->string('avatar')->nullable();
            $table->string('user_level')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
        });

          // Insert some stuff
        DB::table('users')->insert(
        array(
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'user_level' => 'Admin',
            'password' => bcrypt('admin'),

        )
    );
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
