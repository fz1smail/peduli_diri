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
        Schema::create('perjalanans', function (Blueprint $table) {
            // $table->unsignedInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            // $table->unsignedInteger('user_id');
            $table->id('user_id');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('lokasi');
            // $table->string('kelamin');
            // $table->enum('kelamin', ['lakilaki', 'perempuan'])->default('lakilaki');
            $table->string('suhu');
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
        Schema::dropIfExists('perjalanans');
    }
};
