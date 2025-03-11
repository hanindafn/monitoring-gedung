<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    use HasFactory;

    protected $table = 'teknisi';
    protected $primaryKey = 'id_teknisi';
    protected $fillable = [
        'nama_teknisi',
        'kontak',
        'status'
    ];

    // public function perbaikan()
    // {
    //     return $this->hasMany(Perbaikan::class, 'id_teknisi');
    // }
}
