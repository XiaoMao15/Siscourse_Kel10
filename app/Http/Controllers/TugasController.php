<?php

namespace App\Http\Controllers;

use App\Models\PengumpulanTugas;
use App\Models\Tugas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    // Dosen mengunggah tugas
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'deadline' => 'required|date',
            'file' => 'nullable|file|mimes:pdf,docx',
        ]);

        $file = $request->file('file')?->store('tugas');

        Tugas::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $file,
            'deadline' => $request->deadline,
            'dosen_id' => Auth::id(), // diasumsikan dosen login
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil ditambahkan.');
    }

    // Mahasiswa mengunggah jawaban
    public function uploadJawaban(Request $request, $tugasId)
    {
        $request->validate([
            'file_jawaban' => 'required|file|mimes:pdf,docx',
        ]);

        $tugas = Tugas::findOrFail($tugasId);

        // Cek apakah sudah pernah mengumpulkan
        $existing = PengumpulanTugas::where('tugas_id', $tugasId)
            ->where('mahasiswa_id', Auth::id())
            ->first();

        if ($existing) {
            return back()->with('error', 'Kamu sudah mengumpulkan tugas ini.');
        }

        $fileJawaban = $request->file('file_jawaban')->store('jawaban');

        PengumpulanTugas::create([
            'tugas_id' => $tugasId,
            'mahasiswa_id' => Auth::id(), // asumsi mahasiswa login
            'file_jawaban' => $fileJawaban,
        ]);

        return back()->with('success', 'Jawaban berhasil dikumpulkan.');
    }

    // Dosen memberi nilai
    public function nilai(Request $request, $id)
    {
        $request->validate([
            'nilai' => 'required|integer|min:0|max:100',
        ]);

        $pengumpulan = PengumpulanTugas::findOrFail($id);
        $pengumpulan->nilai = $request->nilai;
        $pengumpulan->save();

        return back()->with('success', 'Nilai berhasil disimpan.');
    }
}
