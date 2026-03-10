<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{

    use HasFactory;

    protected $fillable = [
        'yayasan_id',
        'nama_sekolah',
        'alamat'
    ];

    public function yayasan()
{
    return $this->belongsTo(Yayasan::class);
}
}
