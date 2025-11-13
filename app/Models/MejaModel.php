<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MejaModel extends Model
{
    use HasFactory;

    protected $table = 'mejas';

    protected $fillable = [
        'nomor_meja',
        'status',
        'kapasitas',
    ];
}
