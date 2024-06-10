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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('nisn')->unique();
            $table->string('semester');
            $table->string('pabp_a')->nullable();
            $table->string('pabp_b')->nullable();
            $table->string('pabp_c')->nullable();
            $table->string('ppkn_a')->nullable();
            $table->string('ppkn_b')->nullable();
            $table->string('ppkn_c')->nullable();
            $table->string('b_indo_a')->nullable();
            $table->string('b_indo_b')->nullable();
            $table->string('b_indo_c')->nullable();
            $table->string('mtk_a')->nullable();
            $table->string('mtk_b')->nullable();
            $table->string('mtk_c')->nullable();
            $table->string('ipa_a')->nullable();
            $table->string('ipa_b')->nullable();
            $table->string('ipa_c')->nullable();
            $table->string('ips_a')->nullable();
            $table->string('ips_b')->nullable();
            $table->string('ips_c')->nullable();
            $table->string('b_inggris_a')->nullable();
            $table->string('b_inggris_b')->nullable();
            $table->string('b_inggris_c')->nullable();
            $table->string('seni_budaya_a')->nullable();
            $table->string('seni_budaya_b')->nullable();
            $table->string('seni_budaya_c')->nullable();
            $table->string('pjok_a')->nullable();
            $table->string('pjok_b')->nullable();
            $table->string('pjok_c')->nullable();
            $table->string('prakarya_a')->nullable();
            $table->string('prakarya_b')->nullable();
            $table->string('prakarya_c')->nullable();
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
        Schema::dropIfExists('nilai');
    }
};
