<?php

namespace App\Controllers;

use App\Models\mMaster;
use App\Models\mBobot;
use App\Models\mAlterKrit;

class Home extends BaseController
{
    public function index()
    {
        // read data master
        $dbMaster = new mMaster;
        $dbBobot = new mBobot;
        $dbBobot        = new mBobot;
        $dbAlterKrit   = new mAlterKrit;

        $master     = $dbMaster->findAll();
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
            'master'            => $master,
            'bobot'             => $bobot,
            'total'             => $totalBobot,
            'normBobot'         => $normBobot,
            'totalNormBobot'    => $totalNormBobot,
            'alterKrit'         => $alterKrit,
            'totalAlterKrit'    => $countAlterKrit,
            'pembagi'           => $pembagi
        ];

        // cek data
        // dd($data);

        return view('home', $data);
    }
}
