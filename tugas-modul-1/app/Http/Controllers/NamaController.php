<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
    public function index(Request $request)
    {
        // $nama = ['Nama Anda'];
        // $results = [];
        // foreach ($nama as $value) {
        // $result = [
        // 'nama' => $value,
        // 'jumlahKata' => str_word_count($value),
        // 'jumlahHuruf' => strlen($value),
        // 'kebalikanNama' => strrev($value),
        // 'jumlahKonsonan' => preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $value),
        // 'jumlahVokal' => preg_match_all('/[aeiou]/i', $value),
        // ];
        // $result['nama'] = $value;
        // $result['jumlahKata'] = str_word_count($value);
        // $result['jumlahHuruf'] = strlen($value);
        // $result['kebalikanNama'] = strrev($value);
        // $result['jumlahKonsonan'] = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $value);
        // $result['jumlahVokal'] = preg_match_all('/[aeiou]/i', $value);
        // $results[] = $result;
        // }

        // $jumlahKata = str_word_count($nama);
        // $jumlahHuruf = strlen($nama);
        // $kebalikanNama = strrev($nama);
        // $jumlahKonsonan = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $nama);
        // $jumlahVokal = preg_match_all('/[aeiou]/i', $nama);

        // return view('nama', compact('nama', 'jumlahKata', 'jumlahHuruf', 'kebalikanNama', 'jumlahKonsonan', 'jumlahVokal'));
        $results = [];
        if ($request->has('nama')) {
            foreach ($request->input('nama') as $nama) {
                $result = [];

                $result['nama'] = $nama;
                $result['jumlahKata'] = str_word_count($nama);
                // $result['jumlahHuruf'] = strlen($nama);
                $result['jumlahHuruf'] = strlen(str_replace(' ', '', $nama));
                $result['kebalikanNama'] = strrev($nama);
                $result['jumlahKonsonan'] = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $nama);
                $result['jumlahVokal'] = preg_match_all('/[aeiou]/i', $nama);

                $results[] = $result;
            }
        }

        return view('nama', compact('results'));
    }
}
