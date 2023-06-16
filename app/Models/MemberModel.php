<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;
    protected $table = 'member';
    protected $fillable = [
        'id_member',
        'nama_member',
        'alamat',
        'no_telepon',
        'tgl_lahir',
    ];
    public function member()
    {
        return $this->belongsTo(MemberModel::class, 'id_member');
    }
}
