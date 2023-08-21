<?php

namespace App\Imports;

use App\Models\BiayaPerawatan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BiayaPerawatanImport implements ToModel, WithHeadingRow
{
    public function __construct(public $id_jenis_perawatan = 1, public $jenis_perawatan = '')
    {
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new BiayaPerawatan([
            'piutang_id' => $row['no'],
            'jenis_perawatan_id' => $this->id_jenis_perawatan,
            'biaya' => (int) $row[$this->jenis_perawatan] ?? 0
        ]);
    }
}
