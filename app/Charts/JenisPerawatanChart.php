<?php

namespace App\Charts;

use App\Models\JenisPerawatan;
use App\Models\Pasien;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class JenisPerawatanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $jenisPerawatan = JenisPerawatan::all();

        $jumlah = [];
        foreach ($jenisPerawatan as $jp) {
            $jumlah[] = $jp->biayaPerawatan()->where('biaya', '>', '0')->count();
        }

        return $this->chart->pieChart()
            ->setTitle('Distribusi Jenis Perawatan')
            ->setSubtitle('Tahun 2023')
            ->addData($jumlah)
            ->setLabels($jenisPerawatan->pluck('nama')->toArray());
    }
}
