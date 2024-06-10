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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->text('kelas',50);
            $table->text('jam1',50)->nullable();
            $table->text('jam2',50)->nullable();
            $table->text('jam3',50)->nullable();
            $table->text('jam4',50)->nullable();
            $table->text('jam5',50)->nullable();
            $table->text('jam6',50)->nullable();
            $table->text('jam7',50)->nullable();
            $table->text('jam8',50)->nullable();
            $table->text('jam9',50)->nullable();
            $table->text('jam10',50)->nullable();
            $table->text('senin1',50)->nullable();
            $table->text('senin2',50)->nullable();
            $table->text('senin3',50)->nullable();
            $table->text('senin4',50)->nullable();
            $table->text('senin5',50)->nullable();
            $table->text('senin6',50)->nullable();
            $table->text('senin7',50)->nullable();
            $table->text('senin8',50)->nullable();
            $table->text('senin9',50)->nullable();
            $table->text('senin10',50)->nullable();
            $table->text('selasa1',50)->nullable();
            $table->text('selasa2',50)->nullable();
            $table->text('selasa3',50)->nullable();
            $table->text('selasa4',50)->nullable();
            $table->text('selasa5',50)->nullable();
            $table->text('selasa6',50)->nullable();
            $table->text('selasa7',50)->nullable();
            $table->text('selasa8',50)->nullable();
            $table->text('selasa9',50)->nullable();
            $table->text('selasa10',50)->nullable();
            $table->text('rabu1',50)->nullable();
            $table->text('rabu2',50)->nullable();
            $table->text('rabu3',50)->nullable();
            $table->text('rabu4',50)->nullable();
            $table->text('rabu5',50)->nullable();
            $table->text('rabu6',50)->nullable();
            $table->text('rabu7',50)->nullable();
            $table->text('rabu8',50)->nullable();
            $table->text('rabu9',50)->nullable();
            $table->text('rabu10',50)->nullable();
            $table->text('kamis1',50)->nullable();
            $table->text('kamis2',50)->nullable();
            $table->text('kamis3',50)->nullable();
            $table->text('kamis4',50)->nullable();
            $table->text('kamis5',50)->nullable();
            $table->text('kamis6',50)->nullable();
            $table->text('kamis7',50)->nullable();
            $table->text('kamis8',50)->nullable();
            $table->text('kamis9',50)->nullable();
            $table->text('kamis10',50)->nullable();
            $table->text('jumat1',50)->nullable();
            $table->text('jumat2',50)->nullable();
            $table->text('jumat3',50)->nullable();
            $table->text('jumat4',50)->nullable();
            $table->text('jumat5',50)->nullable();
            $table->text('jumat6',50)->nullable();
            $table->text('jumat7',50)->nullable();
            $table->text('jumat8',50)->nullable();
            $table->text('jumat9',50)->nullable();
            $table->text('jumat10',50)->nullable();
            $table->text('sabtu1',50)->nullable();
            $table->text('sabtu2',50)->nullable();
            $table->text('sabtu3',50)->nullable();
            $table->text('sabtu4',50)->nullable();
            $table->text('sabtu5',50)->nullable();
            $table->text('sabtu6',50)->nullable();
            $table->text('sabtu7',50)->nullable();
            $table->text('sabtu8',50)->nullable();
            $table->text('sabtu9',50)->nullable();
            $table->text('sabtu10',50)->nullable();
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
        Schema::dropIfExists('jadwal');
    }
};
