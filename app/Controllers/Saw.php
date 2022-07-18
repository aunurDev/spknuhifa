<?php


namespace App\Controllers;

use App\Models\mBobot;
use App\Models\mAlterKrit;

class Saw extends BaseController
{
    public function index()
    {
        $dbBobot        = new mBobot;
        $dbAlterKrit   = new mAlterKrit;

        // read data bobot
        $bobot          = $dbBobot->findAll();
        $nilaiBobot     = $dbBobot->findColumn('nilai_bobot');

        // cek data
        // dd($bobot);
        // echo $bobot[0]['nilai_bobot'];
        // die;

        // total nilai bobot
        $totalBobot = array_sum($nilaiBobot);

        // normalisasi bobot
        $normBobot  = [
            'c1' => $bobot[0]['nilai_bobot'] / $totalBobot,
            'c2' => $bobot[1]['nilai_bobot'] / $totalBobot,
            'c3' => $bobot[2]['nilai_bobot'] / $totalBobot,
            'c4' => $bobot[3]['nilai_bobot'] / $totalBobot,
            'c5' => $bobot[4]['nilai_bobot'] / $totalBobot
        ];

        // cekd data
        // dd($normBobot);

        // validasi normalisasi bobot
        $countBobot     = count($nilaiBobot);
        $totalNormBobot = 0;
        for ($x = 0; $x < $countBobot; $x++) {
            $totalNormBobot += $nilaiBobot[$x] / $totalBobot;
        }

        // nilai pembagi max dan min
        $pembagi = [
            'c1' => max($dbAlterKrit->findColumn('nilai_presensi')),
            'c2' => min($dbAlterKrit->findColumn('nilai_pelanggaran')),
            'c3' => max($dbAlterKrit->findColumn('nilai_pengetahuan')),
            'c4' => max($dbAlterKrit->findColumn('nilai_keterampilan')),
            'c5' => max($dbAlterKrit->findColumn('nilai_keaktifan'))
        ];

        // cek data
        // dd($pembagi);

        // read data alternatif dan kriteria
        $alterKrit      = $dbAlterKrit->findAll();
        $countAlterKrit = count($alterKrit);

        // cek data
        // echo $alterKrit[0]['nilai_presensi'];
        // dd($alterKrit);

        // normalisasi
        $normMatriks = [];
        for ($x = 0; $x < $countAlterKrit; $x++) {
            $normMatriks[$x] = [
                $alterKrit[$x]['nilai_presensi'] / $pembagi['c1'],
                $pembagi['c2'] / $alterKrit[$x]['nilai_pelanggaran'],
                $alterKrit[$x]['nilai_pengetahuan'] / $pembagi['c3'],
                $alterKrit[$x]['nilai_keterampilan'] / $pembagi['c4'],
                $alterKrit[$x]['nilai_keaktifan'] / $pembagi['c5'],
            ];
        }

        // cek data
        // dd($normMatriks);
        // dd($normMatriks[2]);
        // echo $normMatriks[2]['normC5'];
        // die;

        $data = [
            'bobot'             => $bobot,
            'total'             => $totalBobot,
            'normBobot'         => $normBobot,
            'totalNormBobot'    => $totalNormBobot,
            'alterKrit'         => $alterKrit,
            'totalAlterKrit'    => $countAlterKrit,
            'pembagi'           => $pembagi
        ];

        return view('saw', $data);
    }







    // public function hitung()
    // {
    //     //read data nilai bobot db
    //     // $dbBobot    = new mBobot;

    //     // $data = [
    //     //     'nPrestasi' => $dbBobot->findColumn('nilai_bobot')
    //     // ];


    //     // dd($data['nPrestasi']);



    //     return view('saw');


    //     // read data nilai bobot
    //     $bobot = array(
    //         'bPresensi'      => 20,
    //         'bPelanggaran'   => 15,
    //         'bPengetahuan'   => 30,
    //         'bKeterampilan'  => 35,
    //         'bKeaktifan'     => 10
    //     );

    //     // penjumlahan keseluruhan bobot
    //     $totalBobot = array_sum($bobot);

    //     // echo $totalBobot;
    //     // die;

    //     $bobotNorm = array(
    //         'c1' => $bobot['bPresensi'] / $totalBobot,
    //         'c2' => $bobot['bPelanggaran'] / $totalBobot,
    //         'c3' => $bobot['bPengetahuan'] / $totalBobot,
    //         'c4' => $bobot['bKeterampilan'] / $totalBobot,
    //         'c5' => $bobot['bKeaktifan'] / $totalBobot
    //     );

    //     // dd($bobotNorm);
    //     // valid

    //     // read data alternatif dan masing masing nilai kriterianya
    //     $alterKrit = array(
    //         'a1' => array(
    //             'nama'      => 'Putri Alfiana',
    //             'kelas'     => 11,
    //             'rombel'    => 'XI-MM-A',
    //             'c1'        => 0.96,
    //             'c2'        => 14,
    //             'c3'        => 84,
    //             'c4'        => 85,
    //             'c5'        => 19
    //         ),
    //         'a2' => array(
    //             'nama'      => 'Yuyun Setyowati',
    //             'kelas'     => 11,
    //             'rombel'    => 'XI-MM-A',
    //             'c1'        => 0.92,
    //             'c2'        => 41,
    //             'c3'        => 83,
    //             'c4'        => 85,
    //             'c5'        => 23
    //         ),
    //         'a3' => array(
    //             'nama'      => 'Muchammad Sholli Sajidin',
    //             'kelas'     => 11,
    //             'rombel'    => 'XI-MM-A',
    //             'c1'        => 0.96,
    //             'c2'        => 10,
    //             'c3'        => 85,
    //             'c4'        => 85,
    //             'c5'        => 15
    //         )
    //     ); //end alterKrit array

    //     // dd($alterKrit);
    //     // valid

    //     // ambil nilai pembagi yakni terkecil untuk cost dan terbesar benefit
    //     $pembagi = array(
    //         'c1' => max(
    //             $alterKrit['a1']['c1'],
    //             $alterKrit['a2']['c1'],
    //             $alterKrit['a3']['c1']
    //         ),
    //         'c2' => min(
    //             $alterKrit['a1']['c2'],
    //             $alterKrit['a2']['c2'],
    //             $alterKrit['a3']['c2']
    //         ),
    //         'c3' => max(
    //             $alterKrit['a1']['c3'],
    //             $alterKrit['a2']['c3'],
    //             $alterKrit['a3']['c3']
    //         ),
    //         'c4' => max(
    //             $alterKrit['a1']['c4'],
    //             $alterKrit['a2']['c4'],
    //             $alterKrit['a3']['c4']
    //         ),
    //         'c5' => max(
    //             $alterKrit['a1']['c5'],
    //             $alterKrit['a2']['c5'],
    //             $alterKrit['a3']['c5']
    //         )
    //     );
    //     // dd($pembagi);
    //     // valid


    //     // normalisasi matrix x ke y
    //     // cost nilai pembagi dibagi nilai kriteria
    //     // benefit nilai kriteria dibagi nilai pebagi
    //     $normAlterKrit = array(
    //         'a1' => array(
    //             'nama'  => $alterKrit['a1']['nama'],
    //             'c1'    => $alterKrit['a1']['c1'] / $pembagi['c1'],
    //             'c2'    => $pembagi['c2'] / $alterKrit['a1']['c2'],
    //             'c3'    => $alterKrit['a1']['c3'] / $pembagi['c3'],
    //             'c4'    => $alterKrit['a1']['c4'] / $pembagi['c4'],
    //             'c5'    => $alterKrit['a1']['c5'] / $pembagi['c5']
    //         ),
    //         'a2' => array(
    //             'nama'  => $alterKrit['a2']['nama'],
    //             'c1'    => $alterKrit['a2']['c1'] / $pembagi['c1'],
    //             'c2'    => $pembagi['c2'] / $alterKrit['a2']['c2'],
    //             'c3'    => $alterKrit['a2']['c3'] / $pembagi['c3'],
    //             'c4'    => $alterKrit['a2']['c4'] / $pembagi['c4'],
    //             'c5'    => $alterKrit['a2']['c5'] / $pembagi['c5']
    //         ),
    //         'a3' => array(
    //             'nama'  => $alterKrit['a3']['nama'],
    //             'c1'    => $alterKrit['a3']['c1'] / $pembagi['c1'],
    //             'c2'    => $pembagi['c2'] / $alterKrit['a3']['c2'],
    //             'c3'    => $alterKrit['a3']['c3'] / $pembagi['c3'],
    //             'c4'    => $alterKrit['a3']['c4'] / $pembagi['c4'],
    //             'c5'    => $alterKrit['a3']['c5'] / $pembagi['c5']
    //         )
    //     );
    //     // dd($normAlterKrit);
    //     // valid

    //     // proses preferensi
    //     // matrix x ke y yang ternormalisasi x bobot ternormalisasi
    //     $preferensi = array(

    //         ($normAlterKrit['a1']['c1'] * $bobotNorm['c1']) +
    //             ($normAlterKrit['a1']['c2'] * $bobotNorm['c2']) +
    //             ($normAlterKrit['a1']['c3'] * $bobotNorm['c3']) +
    //             ($normAlterKrit['a1']['c4'] * $bobotNorm['c4']) +
    //             ($normAlterKrit['a1']['c5'] * $bobotNorm['c5']),

    //         ($normAlterKrit['a2']['c1'] * $bobotNorm['c1']) +
    //             ($normAlterKrit['a2']['c2'] * $bobotNorm['c2']) +
    //             ($normAlterKrit['a2']['c3'] * $bobotNorm['c3']) +
    //             ($normAlterKrit['a2']['c4'] * $bobotNorm['c4']) +
    //             ($normAlterKrit['a2']['c5'] * $bobotNorm['c5']),

    //         ($normAlterKrit['a3']['c1'] * $bobotNorm['c1']) +
    //             ($normAlterKrit['a3']['c2'] * $bobotNorm['c2']) +
    //             ($normAlterKrit['a3']['c3'] * $bobotNorm['c3']) +
    //             ($normAlterKrit['a3']['c4'] * $bobotNorm['c4']) +
    //             ($normAlterKrit['a3']['c5'] * $bobotNorm['c5'])
    //     );
    //     // dd($preferensi);
    // } //end controller hitung
}
