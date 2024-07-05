<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDanhMucsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_danh_mucs', function (Blueprint $table) {
            $table->id('idDanhMuc'); // Cột idDanhMuc (Primary Key)
            $table->string('tenDanhMuc'); // Cột tenDanhMuc (Varchar)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_danh_mucs');
    }
}
