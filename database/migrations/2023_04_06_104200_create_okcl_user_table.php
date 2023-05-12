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
        Schema::create('okcl_user', function (Blueprint $table) {
            $table->id();//rename by user_id
            $table->string("name");
            $table->string("email");
            $table->string("phone",10);
            $table->string("password");
            $table->string("confirm_password");
            $table->enum("gender",["M","F","O"])->nullable();
            $table->date("dob");
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
        Schema::dropIfExists('okcl_user');
    }
};
