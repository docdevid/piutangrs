<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPerawatan extends Model
{
    use HasFactory;
    protected $table = 'jenis_perawatan';

    protected $fillable = ['nama', 'biaya'];

    public $timestamps = false;

    public function biayaInRupiah()
    {
        return 'Rp ' . number_format($this->biaya, 2, ',', '.');
    }
}
