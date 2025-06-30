<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        DB::table('tugas')->insert([
            [
                'judul' => 'Tugas Pemrograman Web',
                'deskripsi' => 'Buatlah sebuah aplikasi CRUD sederhana menggunakan Laravel.',
                'file' => null,
                'deadline' => Carbon::now()->addDays(7),
                'id' => 1, // pastikan dosen_id 1 ada di tabel users
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Tugas Basis Data',
                'deskripsi' => 'Desain dan implementasi database untuk sistem akademik.',
                'file' => null,
                'deadline' => Carbon::now()->addDays(14),
                'id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
