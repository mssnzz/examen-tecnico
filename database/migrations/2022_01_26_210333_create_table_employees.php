<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->char('nombres', 100);
            $table->char('apellidos', 100);
            $table->bigInteger('deptoid')->unsigned();
            $table->foreign('deptoid')
                  ->references('id')
                  ->on('departments')
                  ->onDelete('cascade');
            $table->char('cedula', 14);
            $table->char('direccion', 200);
            $table->char('telcasa', 12);
            $table->char('telmobil', 12);
            $table->decimal('salariobase', $precision = 12, $scale = 2);
            $table->decimal('descuentos', $precision = 12, $scale = 2);
            $table->decimal('salarioneto', $precision = 12, $scale = 2);
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
        Schema::dropIfExists('employees');
    }
}
