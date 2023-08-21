<?php

namespace App\Imports;

use App\Models\Pasien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PasienImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pasien([
            'nama' => $row['nama'] ?? fake()->name(),
            'no_rm' => $row['no_rm'] != '' ? $row['no_rm'] : fake()->numberBetween(726927, 996927),
            'alamat' => $row['alamat'] ?? fake()->address(),
            'asli_daerah' => str($row['asli_daerah']),
        ]);
    }
}
