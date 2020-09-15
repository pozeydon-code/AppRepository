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
        Schema::create('roles_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('descripcionRol',20);
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rol_id')->references('id')->on('roles_usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nombreUsuario',50);
            $table->string('apellidoUsuario',50);
            $table->string('direccion',300)->nullable();
            $table->string('cedula',10)->unique();
            $table->string('password',255);
            $table->string('email',80)->unique();
            $table->string('telefonoMovil',10)->nullable();
            $table->string('orcid',30)->nullable();
            $table->string('filiacion',100)->nullable();
            $table->string('lineaInvestigacion',100)->nullable();
            $table->string('grupoInvestigacion',100)->nullable();
            $table->string('redInvestigacion',100)->nullable();
            $table->string('semilleroInvestigacion',100)->nullable();
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
}
