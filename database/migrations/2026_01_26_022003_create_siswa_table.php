<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Mime\Email;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('siswa', function (Blueprint $table) {
        $table->id();
        $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
        $table->integer('nis')->unique();
        $table->string('nama_siswa');
        $table->enum('jenis_kelamin',['L','P']);
        $table->date('tanggal_lahir');
        $table->string('alamat');
        $table->string('email')->unique();
        $table->string('no_telepon');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
