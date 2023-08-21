<?php

namespace App\Imports;

use App\Models\Piutang;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

Carbon::setLocale('en_EN');
class PiutangImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Piutang([
            'pasien_id' => $row['no'],
            'tgl_masuk' => $row['tgl_masuk'] ? Date::excelToDateTimeObject($row['tgl_masuk']) : now(),
            'tgl_keluar' => $row['tgl_keluar'] ? Date::excelToDateTimeObject($row['tgl_keluar']) : now(),
            'zaal' => $row['zaal'] ?? 'A',
            'total' => $row['total'] ?? 0,
            'cicilan' => $row['cicilan'] ?? 0,
            'sisa' => $row['sisa'] ?? 0,
            'keterangan' => $row['ket'] ?? '',
        ]);
    }
}
