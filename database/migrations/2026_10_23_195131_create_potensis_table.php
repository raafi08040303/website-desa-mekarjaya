
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('potensis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('kategori');
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('kontak')->nullable();
            $table->enum('status', ['draft', 'published'])
                ->default('draft');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('potensis');
    }
};
