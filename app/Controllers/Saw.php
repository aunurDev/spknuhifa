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
            'bKeaktifan'     => 10
        );

        // penjumlahan keseluruhan bobot
        $totalBobot = array_sum($bobot);

        // echo $totalBobot;
        // die;

        $bobotNorm = array(
            'c1' => $bobot['bPresensi'] / $totalBobot,
            'c2' => $bobot['bPelanggaran'] / $totalBobot,
            'c3' => $bobot['bPengetahuan'] / $totalBobot,
            'c4' => $bobot['bKeterampilan'] / $totalBobot,
            'c5' => $bobot['bKeaktifan'] / $totalBobot
        );

        // dd($bobotNorm);
        // valid

        // read data alternatif dan masing masing nilai kriterianya
        $alterKrit = array(
            'a1' => array(
                'nama'      => 'Putri Alfiana',
                'kelas'     => 11,
                'rombel'    => 'XI-MM-A',
                'c1'        => 0.96,
                'c2'        => 14,
                'c3'        => 84,
                'c4'        => 85,
                'c5'        => 19
            ),
            'a2' => array(
                'nama'      => 'Yuyun Setyowati',
                'kelas'     => 11,
                'rombel'    => 'XI-MM-A',
                'c1'        => 0.92,
                'c2'        => 41,
                'c3'        => 83,
                'c4'        => 85,
                'c5'        => 23
            ),
            'a3' => array(
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

        // dd($alterKrit);
        // valid

        // ambil nilai pembagi yakni terkecil untuk cost dan terbesar benefit
        $pembagi = array(
            'c1' => max(
                $alterKrit['a1']['c1'],
                $alterKrit['a2']['c1'],
                $alterKrit['a3']['c1']
            ),
            'c2' => min(
                $alterKrit['a1']['c2'],
                $alterKrit['a2']['c2'],
                $alterKrit['a3']['c2']
            ),
            'c3' => max(
                $alterKrit['a1']['c3'],
                $alterKrit['a2']['c3'],
                $alterKrit['a3']['c3']
            ),
            'c4' => max(
                $alterKrit['a1']['c4'],
                $alterKrit['a2']['c4'],
                $alterKrit['a3']['c4']
            ),
            'c5' => max(
                $alterKrit['a1']['c5'],
                $alterKrit['a2']['c5'],
                $alterKrit['a3']['c5']
            )
        );
        // dd($pembagi);
        // valid


        // normalisasi matrix x ke y
        // cost nilai pembagi dibagi nilai kriteria
        // benefit nilai kriteria dibagi nilai pebagi
        $normAlterKrit = array(
            'a1' => array(
                'nama'  => $alterKrit['a1']['nama'],
                'c1'    => $alterKrit['a1']['c1'] / $pembagi['c1'],
                'c2'    => $pembagi['c2'] / $alterKrit['a1']['c2'],
                'c3'    => $alterKrit['a1']['c3'] / $pembagi['c3'],
                'c4'    => $alterKrit['a1']['c4'] / $pembagi['c4'],
                'c5'    => $alterKrit['a1']['c5'] / $pembagi['c5']
            ),
            'a2' => array(
                'nama'  => $alterKrit['a2']['nama'],
                'c1'    => $alterKrit['a2']['c1'] / $pembagi['c1'],
                'c2'    => $pembagi['c2'] / $alterKrit['a2']['c2'],
                'c3'    => $alterKrit['a2']['c3'] / $pembagi['c3'],
                'c4'    => $alterKrit['a2']['c4'] / $pembagi['c4'],
                'c5'    => $alterKrit['a2']['c5'] / $pembagi['c5']
            ),
            'a3' => array(
                'nama'  => $alterKrit['a3']['nama'],
                'c1'    => $alterKrit['a3']['c1'] / $pembagi['c1'],
                'c2'    => $pembagi['c2'] / $alterKrit['a3']['c2'],
                'c3'    => $alterKrit['a3']['c3'] / $pembagi['c3'],
                'c4'    => $alterKrit['a3']['c4'] / $pembagi['c4'],
                'c5'    => $alterKrit['a3']['c5'] / $pembagi['c5']
            )
        );
        // dd($normAlterKrit);
        // valid

        // proses preferensi
        // matrix x ke y yang ternormalisasi x bobot ternormalisasi
        $preferensi = array(

            ($normAlterKrit['a1']['c1'] * $bobotNorm['c1']) +
                ($normAlterKrit['a1']['c2'] * $bobotNorm['c2']) +
                ($normAlterKrit['a1']['c3'] * $bobotNorm['c3']) +
                ($normAlterKrit['a1']['c4'] * $bobotNorm['c4']) +
                ($normAlterKrit['a1']['c5'] * $bobotNorm['c5']),

            ($normAlterKrit['a2']['c1'] * $bobotNorm['c1']) +
                ($normAlterKrit['a2']['c2'] * $bobotNorm['c2']) +
                ($normAlterKrit['a2']['c3'] * $bobotNorm['c3']) +
                ($normAlterKrit['a2']['c4'] * $bobotNorm['c4']) +
                ($normAlterKrit['a2']['c5'] * $bobotNorm['c5']),

            ($normAlterKrit['a3']['c1'] * $bobotNorm['c1']) +
                ($normAlterKrit['a3']['c2'] * $bobotNorm['c2']) +
                ($normAlterKrit['a3']['c3'] * $bobotNorm['c3']) +
                ($normAlterKrit['a3']['c4'] * $bobotNorm['c4']) +
                ($normAlterKrit['a3']['c5'] * $bobotNorm['c5'])
        );
        dd($preferensi);
    } //end controller hitung
}
