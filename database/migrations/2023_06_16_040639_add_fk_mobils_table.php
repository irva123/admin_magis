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
        Schema::table('mobil', function(Blueprint $table){
            $table->dropColumn('status');
            $table->unsignedBigInteger('status_id')->nullable()->after('foto');
            
            $table->foreign('status_id')->references('id')->on('status');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mobil', function(Blueprint $table){
            $table->string('status');
            $table->dropForeign(['status_id']);
            });
    }
};
