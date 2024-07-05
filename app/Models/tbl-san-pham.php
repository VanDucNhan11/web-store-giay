<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblSanPham extends Model
{
    use HasFactory;

    protected $table = 'tbl_san_phams'; // Tên bảng trong database

    protected $primaryKey = 'idSanPham'; // Khóa chính của bảng

    protected $fillable = [
        'tenSanPham', 'idDanhMuc', 'hinhAnh', 'moTa', 'giaBan', 'soLuong'
    ]; // Các cột có thể mass-assign

    public function danhMuc()
    {
        return $this->belongsTo(TblDanhMuc::class, 'idDanhMuc', 'idDanhMuc');
    }
}
