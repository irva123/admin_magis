<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    use HasFactory;
    protected $table = "status";
    protected $guarded = ['id'];
    public function mobil()
    {
    return $this->hasMany(MobilModel::class, 'status_id');
    }
}
