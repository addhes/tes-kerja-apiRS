<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $object = [
            (object) [
                'norec' => 'a516faf0-1980-11ed-85c9-5d3d2533',
                'statusenabled' => 'true',
                'jeniskelamin' => 'PEREMPUAN',
                'nomorantri' => '0001'

            ],
            (object) [
                'norec' => 'bb5c3c30-3f9c-11ed-920d-a3e252d9',
                'statusenabled' => 'true',
                'jeniskelamin' => 'LAKI-LAKI',
                'nomorantri' => '0002'
            ],
            (object) [
                'norec' => 326,
                'statusenabled' => 'true',
                'jeniskelamin' => 'PEREMPUAN',
                'nomorantri' => '0003'
            ]
        ];
    
        return response()->json([
            'meta' => [
                'status' => '200',
                'message' => 'Berhasil'
            ],
            'array1' => $object,
        ]);
    }

    public function ruangan()
    {
        $object = [
            (object) [
                'namaruangan' => 'Masukan Nama ruangan',
                'username' => 'Masukan Jumlah Pasien Peruangan',
            ],
        ];    
        return response()->json([
            'meta' => [
                'status' => '200',
                'message' => 'Berhasil'
            ],
            'result' => $object,
        ]);
    }

    public function dokter()
    {
        $object = [
            (object) [
                'namaruangan' => 'Masukan Nama Dokter',
                'username' => 'Masukan Jumlah Pasien Perdokter',
            ],
        ];    
        return response()->json([
            'meta' => [
                'status' => '200',
                'message' => 'Berhasil'
            ],
            'result' => $object,
        ]);
    }

    public function hitunghuruf()
    {
        $namapasien = 'sisamonato';
        $jumlahHuruf = strlen($namapasien);

        $object = [
            (object) [
                'Nama Pasien' => 'sisamonato',
                'username' => $jumlahHuruf,
            ],
        ];    
        return response()->json([
            'meta' => [
                'status' => '200',
                'message' => 'Berhasil'
            ],
            'result' => $object,
        ]);
    }
}
