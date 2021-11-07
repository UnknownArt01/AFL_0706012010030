<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pencipta extends Model
{
    use HasFactory;
    protected $primaryKey = 'pencipta_code';
    protected $keyType = 'string';

    protected $fillable = [
        'pencipta_code',
        'pencipta_name',
        'daerah_asal',
        'TTL',
        'description_pencipta'
    ];

    public function tarian()
    {
        return $this->hasMany(tarian::class, 'pencipta_tari', 'pencipta_code');
    }
}
