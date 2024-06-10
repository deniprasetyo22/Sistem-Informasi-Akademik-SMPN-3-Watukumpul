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
        Schema::create('profilsekolah', function (Blueprint $table) {
            $table->id();
            $table->string('namasekolah');
            $table->string('npsp');
            $table->string('statussekolah');
            $table->string('bentuksekolah');
            $table->string('statuskepemilikan');
            $table->string('akreditasi');
            $table->string('kurikulum');
            $table->integer('jumlahguru');
            $table->integer('jumlahsiswa');
            $table->text('visi');
            $table->text('misi');
            $table->string('struktur');
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
        Schema::dropIfExists('profilsekolah');
    }
};
