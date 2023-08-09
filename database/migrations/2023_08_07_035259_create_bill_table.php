<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->string('mabill');
            $table->string('nameuser');
            $table->string('phoneuser');
            $table->string('addressuser');
            $table->date('ngayhoadon');
            $table->integer('quantity');
            $table->integer('tongtien');
            $table->string('sizepd'); 
            $table->json('namepd')->nullable();
            $table->json('imgpd')->nullable();
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
        Schema::dropIfExists('bill');
    }
}
