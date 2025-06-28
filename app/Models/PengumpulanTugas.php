<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class PengumpulanTugas extends Model
{
    protected $fillable = ['tugas_id', 'mahasiswa_id', 'file', 'nilai'];

    public function tugas()
    {
        return $this->belongsTo(Tugas::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');
    }
}


