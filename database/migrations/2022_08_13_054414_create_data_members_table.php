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
        Schema::create('data_members', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->string('rfid_card_code');
            $table->string('email');
            $table->integer('branch_id');
            $table->string('id_card');
            $table->integer('membership_status_id')->nullable();
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
        Schema::dropIfExists('data_members');
    }
};
