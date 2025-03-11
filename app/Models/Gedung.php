<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;

    protected $table = 'gedung';
    protected $primaryKey = 'id_gedung';
    protected $fillable = [
        'id_instansi',
        'nama_gedung',
        'alamat_gedung',
        'jumlah_lantai',
        'fasilitas'
    ];

    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'id_instansi');
    }

    // public function laporan()
    // {
    //     return $this->hasMany(Pelaporan::class, 'id_gedung');
    // }
}
