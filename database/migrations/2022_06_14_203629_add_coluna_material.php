<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColunaMaterial extends Migration
{
    
    public function up()
    {
        Schema::table('ordem_servico', function($table) {
            $table->integer('id_material')->unsigned();
            $table->foreign('id_material')->references('id')->on('material');
        });

    }
    public function down()
    {
        Schema::table('ordem_servico', function($table) {
            $table->dropColumn('id_material');
            
        });
    }
}
