<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table = "don_hang";
    protected $primaryKey = "id_don_hang";
    public $timestamps = true;
    protected $fillable = ['id_user', 'ten_nguoi_nhan', 'sdt', 'hinh_thuc_thanh_toan', 'dia_chi_nhan', 'ghi_chu', 'tong_tien', 'hoa_don', 'props'];

    protected function casts(): array
    {
        return [
            'props'  => 'array',
        ];
    }
}
