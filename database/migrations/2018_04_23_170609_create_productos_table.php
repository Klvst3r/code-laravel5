<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("productos", function(Blueprint $table){
            $table->increments("id");
            $table->string("nombre",50);
            $table->text("detalle");
            $table->double("precio");
            $table->integer("cantidad");
            
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
        Schema::drop("productos");
    }
}
