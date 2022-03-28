<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;

    protected $fillable = ['id_gudang','kode_rak'];
    protected $guard = [];

    /**
     * Get the user that owns the Rak
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ditempatkan()
    {
        return $this->belongsTo(Gudang::class, 'id', 'id_gudang');
    }
}
