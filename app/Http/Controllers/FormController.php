<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'tanggal_kegiatan' => 'required',
            'peran' => 'required',
            'nama_panitia' => 'required',
            'rangkap_panitia' => 'required',
            'tahun_kepanitiaan' => 'required',
            'keterangan_kegiatan' => 'required',
            'volume_kegiatan' => 'required',
            'angka_kredit' => 'required',
            'nomor_sk_kegiatan' => 'required',
            'lampiran_sktmt' => 'required',
            'sk_penugasan' => 'required',
<<<<<<< HEAD
=======
            'tanggal_kegiatan' => 'required',
>>>>>>> 528c133d59d60c5091aa05d1a319cc5f3336e52f
            'satuan_hasil_kegiatan' => 'required',
        ]);

        // Proses penyimpanan data ke dalam database atau lakukan sesuai kebutuhan Anda

        // Redirect atau kembalikan response sesuai kebutuhan Anda
        return redirect()->route('nama_rute_yang_diinginkan');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 528c133d59d60c5091aa05d1a319cc5f3336e52f
