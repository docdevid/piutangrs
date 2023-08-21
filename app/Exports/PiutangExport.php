<?php

namespace App\Exports;

use App\Models\JenisPerawatan;
use App\Models\Piutang;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
        $month = $request['month'];

        $piutangs = Piutang::has('pasien')->when($year, function ($q) use ($month, $year) {
            $year = Carbon::createFromFormat('Y', $year);
            if ($month) {
                $month = Carbon::createFromFormat('m', $month) ?? null;
                $q->whereMonth('tgl_keluar', $month);
            }
            $q->whereYear('tgl_keluar', $year);
        })
            ->orderBy('id', 'desc')
            ->paginate(25);

        $jenisPerawatans = JenisPerawatan::orderBy('id', 'ASC')->get();

        if ($piutangs->isEmpty()) {
            return view('exports.piutang-empty', compact('piutangs', 'jenisPerawatans', 'month', 'year'));
        }
        return view('exports.piutang', compact('piutangs', 'jenisPerawatans', 'month', 'year'));
    }
}
