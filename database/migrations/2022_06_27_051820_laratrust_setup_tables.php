<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaratrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users and teams (Many To Many Polymorphic)
        Schema::create('role_user', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('user_id');
            $table->string('user_type');

            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'role_id', 'user_type']);
        });


        Schema::create('mst_mobil', function (Blueprint $table) {
            $table->bigIncrements('mmid');
            $table->string('merk')->nullable();
            $table->string('model')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_plat')->nullable();
            $table->decimal('tarif');
            $table->boolean('tersedia')->default(0);
            $table->timestamps();
        });

        Schema::create('mst_transaksi', function (Blueprint $table) {
            $table->bigIncrements('mtid');
            $table->integer('mmid');
            $table->integer('id');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('roles');
    }
}
