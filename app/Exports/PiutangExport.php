<?php

namespace App\Exports;

use App\Models\JenisPerawatan;
use App\Models\Piutang;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PiutangExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $request = request()->all();
        $year = $request['year'];

        $piutangs = Piutang::when($year, function ($q) use ($year) {
            $date = Carbon::createFromFormat('Y', $year);
            $q->whereYear('created_at', $date->year);
        })
            ->orderBy('id', 'desc')
            ->paginate(25);
        $jenisPerawatans = JenisPerawatan::orderBy('id', 'ASC')->get();
        return view('exports.piutang', compact('piutangs', 'jenisPerawatans', 'year'));
    }
}
