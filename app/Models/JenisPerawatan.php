<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function biayaPerawatan(): HasMany
    {
        return $this->hasMany(BiayaPerawatan::class, 'jenis_perawatan_id', 'id');
    }
}
