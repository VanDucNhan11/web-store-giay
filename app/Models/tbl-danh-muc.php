<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblDanhMuc extends Model
{
    use HasFactory;

    protected $table = 'tbl_danh_mucs'; // Tên bảng trong database

    protected $primaryKey = 'idDanhMuc'; // Khóa chính của bảng

    protected $fillable = ['tenDanhMuc']; // Các cột có thể mass-assign

    public function sanPhams()
    {
        return $this->hasMany(TblSanPham::class, 'idDanhMuc', 'idDanhMuc');
    }
}
