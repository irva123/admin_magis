<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilModel extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $guarded = ['id'];
    protected $fillable = [
        'plat_nomor',
        'jenis_mobil',
        'merk',
        'kapasitas',
        'tahun',
        'tarif',
        'foto',
        'status_id',
    ];
    public function status()
    {
        return $this->belongsTo(StatusModel::class, 'status_id');
    }
}
