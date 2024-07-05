<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_san_phams', function (Blueprint $table) {
            $table->id('idSanPham'); // Cột idSanPham (Primary Key)
            $table->string('tenSanPham'); // Cột tenSanPham (Varchar)
            $table->unsignedBigInteger('idDanhMuc'); // Cột idDanhMuc (Foreign Key)
            $table->foreign('idDanhMuc')->references('idDanhMuc')->on('tbl_danh_mucs'); // Khóa ngoại đến bảng danh mục

            $table->string('hinhAnh')->nullable(); // Cột hinhAnh (Varchar), có thể null
            $table->text('moTa')->nullable(); // Cột moTa (Text), có thể null
            $table->decimal('giaBan', 10, 2); // Cột giaBan (Decimal)
            $table->integer('soLuong'); // Cột soLuong (Integer)
            $table->timestamps(); // Các cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_san_phams');
    }
}
