<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setings extends Model
{
    use HasFactory;
    protected $fillable = ['tanda_tangan', 'nip'];
}
