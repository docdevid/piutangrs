<?php

namespace App\Http\Controllers;

use App\Charts\RoleUserChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, RoleUserChart $chart)
    {
        $chart = $chart->build();
        return view('dashboard', compact('chart'));
    }
}
