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
        Schema::create('contact_uses', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('phone');
            $table->string('location');
            $table->string('investment');
            $table->string('property');
            $table->string('property_type')->nullable();
            // $table->string('Land')->nullable();
            // $table->string('Shop_Houses')->nullable();
            // $table->string('a_Building')->nullable();
            // $table->string('a_shopping_Mall')->nullable();
            // $table->string('a_club_house')->nullable();
            // $table->string('Other')->nullable();
            $table->string('large')->nullable();
            $table->string('know');
            $table->text('interested');
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
        Schema::dropIfExists('contact_uses');
    }
};
