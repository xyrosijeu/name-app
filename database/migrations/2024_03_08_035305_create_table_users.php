<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('first_name', 55);
            $table->string('middle_name', 55)->nullable();
            $table->string('last_name', 55);
            $table->string('suffix_name', 55);
            $table->date('birth_date');
            $table->unsignedBigInteger('gender_id');
            $table->string('address');
            $table->string('contact_number');
            $table->string('email_address');
            $table->string('username');
            $table->string('password', 255);
            $table->timestamps();

            $table->foreign('gender_id')
                ->references('gender_id')
                ->on('genders')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
};