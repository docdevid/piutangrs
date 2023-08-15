<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaPerawatan extends Model
{
    use HasFactory;

    protected $table = 'biaya_perawatan';

    protected $fillable = ['piutang_id', 'jenis_perawatan_id', 'biaya'];

    public function biayaInRupiah()
    {
        return number_format($this->biaya, 2, '.', ',');
    }
}
