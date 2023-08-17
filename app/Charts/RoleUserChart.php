<?php

namespace App\Charts;

use App\Models\Pasien;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class RoleUserChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\pieChart
    {

        return $this->chart->pieChart()
            ->setTitle('Distribusi Pasien Berdasarkan Domisili')
            ->setSubtitle('Tahun 2023')
            ->addData([
                Pasien::where('asli_daerah', '=', '1')->count(),
                Pasien::where('asli_daerah', '=', '0')->count()
            ])
            ->setLabels(['Purworejo', 'Luar Purworejo']);
    }
}
