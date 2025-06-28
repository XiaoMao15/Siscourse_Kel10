<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Tugas extends Model
{
    protected $fillable = ['judul', 'deskripsi', 'file', 'deadline', 'dosen_id'];

    public function pengumpulan()
    {
        return $this->hasMany(PengumpulanTugas::class);
    }

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }
}

