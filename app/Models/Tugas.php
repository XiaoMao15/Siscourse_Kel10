<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 
        'deskripsi', 
        'file', 
        'deadline', 
        'dosen_id'
    ];

    protected $table = 'tugas';

    public function pengumpulan()
    {
        return $this->hasMany(PengumpulanTugas::class);
    }

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }
}

