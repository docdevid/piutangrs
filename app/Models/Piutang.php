<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Piutang extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $table = 'piutang';
    protected $fillable = ['pasien_id'];

    protected $with = ['pasien'];

    protected $casts = [
        'tgl_masuk' => 'date',
        'tgl_keluar' => 'date',
    ];

    public function pasien(): HasOne
    {
        return $this->hasOne(Pasien::class, 'id', 'pasien_id');
    }
}
