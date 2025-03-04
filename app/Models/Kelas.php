<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'jumlah',
    ];
    public function dosenWalis()
    {
        return $this->hasMany(DosenWali::class, 'kelas_id');
    }
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'kelas_id');
    }
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

}
