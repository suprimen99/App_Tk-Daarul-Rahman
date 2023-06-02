<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_siswa', 255);
            $table->string('usia', 5);
            $table->string('foto', 100);
            $table->string('nama_orangtua', 100);
            $table->string('jeniskelamin', 100);
            $table->string('notelpon', 15);
            $table->string('alamat',255);
            $table->string('nik', 20)->unique();
            $table->string('akte', 20);
            $table->enum('kelas', ['Kelas A', 'Kelas B'])->nullable();
            $table->enum('status', ['Aktif', 'Tidak Aktif', 'Lulus'])->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
}
