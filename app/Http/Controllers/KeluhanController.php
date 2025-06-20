<?php
namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KeluhanController extends Controller
{
    public function form()
    {
        return view('keluhan');
    }

    public function kirim(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'isi_keluhan' => 'required|string',
        ]);

        // Simpan ke database
        $keluhan = Keluhan::create($data);

        // Kirim email ke admin
        Mail::send('hasilkeluh', ['keluhan' => $keluhan], function ($message) {
            $message->to('kagayaku15h@gmail.com') // ganti dengan email admin Anda
                    ->subject('Keluhan Baru dari Pengguna');
        });

        return redirect()->back()->with('success', 'Keluhan Anda telah dikirim.');
    }
}
