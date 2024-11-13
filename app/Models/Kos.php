<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Kos extends Model
{
    protected $fillable = [
        'no_kamar',
        'harga_sewa',
        'nama_siswa',
        'fasilitas_id'
    ];

    public function fasilitas(): BelongsTo
    {
        return $this->belongsTo(Fasilitas::class);
    }
}
