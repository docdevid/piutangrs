<?php

namespace App\Http\Controllers;

use App\Charts\JenisPerawatanChart;
use App\Charts\KunjunganYearly;
use App\Charts\RoleUserChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __construct(public $title = 'Dashboard')
    {
    }
    public function __invoke(Request $request, RoleUserChart $chart, JenisPerawatanChart $jenisPerawatanChart, KunjunganYearly $kunjunganChart)
    {
        $title = $this->title;
        $chart = $chart->build();
        $jenisPerawatanChart = $jenisPerawatanChart->build();
        $kunjunganChart = $kunjunganChart->build();
        return view('dashboard', compact('title', 'chart', 'jenisPerawatanChart', 'kunjunganChart'));
    }
}
