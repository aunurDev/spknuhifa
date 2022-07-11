<?php

namespace App\Controllers;

class Saw extends BaseController
{
    public function index()
    {
        return view('saw');
    }
    public function hitung()
    {
        // read data nilai bobot
        $bobot = array(
            'bPresensi'      => 20,
            'bPelanggaran'   => 15,
            'bPengetahuan'   => 30,
            'bKeterampilan'  => 35,
            'bKeaktifan'     => 1
        );

        // penjumlahan keseluruhan bobot
        $totalBobot = array_sum($bobot);

        $bobotNorm = array(
            $bobot['bPresensi'] / $totalBobot,
            $bobot['bPelanggaran'] / $totalBobot,
            $bobot['bPengetahuan'] / $totalBobot,
            $bobot['bKeterampilan'] / $totalBobot,
            $bobot['bKeaktifan'] / $totalBobot
        );

        // dd($bobotNorm); valid

        // read data alternatif dan masing masing nilai kriterianya
        $alterKrit = array(
            array(
                'nama'      => 'Putri Alfiana',
                'kelas'     => 11,
                'rombel'    => 'XI-MM-A',
                'c1'        => 0.96,
                'c2'        => 14,
                'c3'        => 84,
                'c4'        => 85,
                'c5'        => 19
            ),
            array(
                'nama'      => 'Yuyun Setyowati',
                'kelas'     => 11,
                'rombel'    => 'XI-MM-A',
                'c1'        => 0.92,
                'c2'        => 41,
                'c3'        => 83,
                'c4'        => 85,
                'c5'        => 23
            ),
            array(
                'nama'      => 'Muchammad Sholli Sajidin',
                'kelas'     => 11,
                'rombel'    => 'XI-MM-A',
                'c1'        => 0.96,
                'c2'        => 10,
                'c3'        => 85,
                'c4'        => 85,
                'c5'        => 15
            )
        ); //end alterKrit array

        // dd($alterKrit); valid

        // ambil nilai pembagi yakni terkecil untuk cost dan terbesar benefit
        $pembagiC1 = max(
            $alterKrit[0]['c1'],
            $alterKrit[1]['c1'],
            $alterKrit[2]['c1']
        );
        $pembagiC2 = min(
            $alterKrit[0]['c2'],
            $alterKrit[1]['c2'],
            $alterKrit[2]['c2']
        );
        $pembagiC3 = max(
            $alterKrit[0]['c3'],
            $alterKrit[1]['c3'],
            $alterKrit[2]['c3']
        );
        $pembagiC4 = max(
            $alterKrit[0]['c4'],
            $alterKrit[1]['c4'],
            $alterKrit[2]['c4']
        );
        $pembagiC5 = max(
            $alterKrit[0]['c5'],
            $alterKrit[1]['c5'],
            $alterKrit[2]['c5']
        );

        // echo "C1 = " . $pembagiC1 . "<br>";
        // echo "C2 = " . $pembagiC2 . "<br>";
        // echo "C3 = " . $pembagiC3 . "<br>";
        // echo "C4 = " . $pembagiC4 . "<br>";
        // echo "C5 = " . $pembagiC5 . "<br>"; valid

        // normalisasi matrix x ke y
        // cost nilai pembagi dibagi nilai kriteria
        // benefit nilai kriteria dibagi nilai pebagi
        $normAlterKrit = array(
            array(
                // $alterKrit[0]['nama'],
                $alterKrit[0]['c1'] / $pembagiC1,
                $pembagiC2 / $alterKrit[0]['c2'],
                $alterKrit[0]['c3'] / $pembagiC3,
                $alterKrit[0]['c4'] / $pembagiC4,
                $alterKrit[0]['c5'] / $pembagiC5
            ),
            array(
                // $alterKrit[1]['nama'],
                $alterKrit[1]['c1'] / $pembagiC1,
                $pembagiC2 / $alterKrit[1]['c2'],
                $alterKrit[1]['c3'] / $pembagiC3,
                $alterKrit[1]['c4'] / $pembagiC4,
                $alterKrit[1]['c5'] / $pembagiC5
            ),
            array(
                // $alterKrit[2]['nama'],
                $alterKrit[2]['c1'] / $pembagiC1,
                $pembagiC2 / $alterKrit[2]['c2'],
                $alterKrit[2]['c3'] / $pembagiC3,
                $alterKrit[2]['c4'] / $pembagiC4,
                $alterKrit[2]['c5'] / $pembagiC5
            )
        );
        // dd($normAlterKrit); valid

        // proses preferensi
        // matrix x ke y yang ternormalisasi x bobot ternormalisasi
        $preferensi = array(
            ($normAlterKrit[0][0] * $bobotNorm[0]) +
                ($normAlterKrit[0][1] * $bobotNorm[1]) +
                ($normAlterKrit[0][2] * $bobotNorm[2]) +
                ($normAlterKrit[0][3] * $bobotNorm[3]) +
                ($normAlterKrit[0][4] * $bobotNorm[4]),

            ($normAlterKrit[1][0] * $bobotNorm[0]) +
                ($normAlterKrit[1][1] * $bobotNorm[1]) +
                ($normAlterKrit[1][2] * $bobotNorm[2]) +
                ($normAlterKrit[1][3] * $bobotNorm[3]) +
                ($normAlterKrit[1][4] * $bobotNorm[4]),

            ($normAlterKrit[2][0] * $bobotNorm[0]) +
                ($normAlterKrit[2][1] * $bobotNorm[1]) +
                ($normAlterKrit[2][2] * $bobotNorm[2]) +
                ($normAlterKrit[2][3] * $bobotNorm[3]) +
                ($normAlterKrit[2][4] * $bobotNorm[4])
        );
        dd($preferensi);
    } //end controller hitung
}
