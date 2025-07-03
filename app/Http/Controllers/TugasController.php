<?php

namespace App\Http\Controllers;

use App\Models\PengumpulanTugas;
use App\Models\Tugas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    
    public function index()
    {
        $tugas = Tugas::where('dosen_id', Auth::id())->get();
        return view('pages.dosen.dashboarddosen', compact('tugas'));
    }

    public function showMahasiswaHtml()
{
    $tugas = Tugas::where('kategori', 'software')->get(); // atau sesuaikan kategorinya
    return view('pages.mahasiswa.matakuliah.software-html', compact('tugas'));
}

    
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,docx,pptx',
        ]);

        $file = $request->file('file')?->store('tugas');

        Tugas::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $file,
            'kategori' => $request->kategori, 
            'dosen_id' => Auth::id(),
    ]);

        return redirect()->back()->with('success', 'Tugas berhasil ditambahkan.');
    }

    // Form edit tugas
    public function edit($id)
    {
        $tugas = Tugas::findOrFail($id);
        return view('pages.dosen.edit_tugas', compact('tugas'));
    }

    // Update tugas
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,docx',
        ]);

        $tugas = Tugas::findOrFail($id);
        $file = $request->file('file') ? $request->file('file')->store('tugas') : $tugas->file;

        $tugas->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'file' => $file,
        ]);

        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil diupdate.');
    }

    // Hapus tugas
    public function destroy($id)
    {
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();

        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil dihapus.');
    }

    // Mahasiswa mengunggah jawaban
    public function uploadJawaban(Request $request, $tugasId)
    {
        $request->validate([
            'file_jawaban' => 'required|file|mimes:pdf,docx',
        ]);

        $tugas = Tugas::findOrFail($tugasId);

        $existing = PengumpulanTugas::where('tugas_id', $tugasId)
            ->where('mahasiswa_id', Auth::id())
            ->first();

        if ($existing) {
            return back()->with('error', 'Kamu sudah mengumpulkan tugas ini.');
        }

        $fileJawaban = $request->file('file_jawaban')->store('jawaban');

        PengumpulanTugas::create([
            'tugas_id' => $tugasId,
            'mahasiswa_id' => Auth::id(),
            'file_jawaban' => $fileJawaban,
        ]);

        return back()->with('success', 'Jawaban berhasil dikumpulkan.');
    }

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
