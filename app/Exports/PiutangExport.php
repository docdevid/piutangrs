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
        $date = $request['date'];

        $piutangs = Piutang::has('pasien')
            ->when($date, function ($query) use ($date) {
                $date = explode(' - ', $date);
                $startDate = Carbon::createFromFormat('Y-m-d', $date[0]);
                $endDate = Carbon::createFromFormat('Y-m-d', $date[1]);
                $query->whereBetween('tgl_keluar', [$startDate, $endDate]);
            }, function ($q) {
                $q->whereMonth('tgl_keluar', now()->month);
                $q->whereYear('tgl_keluar', now()->year);
            })
            ->orderBy('tgl_keluar', 'ASC')->get();

        $jenisPerawatans = JenisPerawatan::orderBy('id', 'ASC')->get();

        if ($piutangs->isEmpty()) {
            return view('exports.piutang-empty', compact('piutangs', 'jenisPerawatans'));
        }
        return view('exports.piutang', compact('piutangs', 'jenisPerawatans'));
    }
}
