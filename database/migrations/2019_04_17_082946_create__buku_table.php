<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul',30);
            $table->string('penerbit',30);
            $table->tinyInteger('tahun_penerbit',30);
            $table->string('pengarang', 30);
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
        Schema::dropIfExists('_buku');
    }
}
