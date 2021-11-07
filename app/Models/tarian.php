<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarian extends Model
{
    use HasFactory;

    protected $fillable = [
        'tarian_code',
        'tarian_name',
        'tipe_tarian',
        'pencipta_tari',
        'tanggal',
        'description'
    ];

    public function pencipta()
    {
        return $this->belongsTo(pencipta::class, 'pencipta_tari', 'pencipta_code');
    }
}
