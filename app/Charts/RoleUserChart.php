<?php

namespace App\Charts;

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
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->addData([20, 24, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }
}
