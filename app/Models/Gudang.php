<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = ['posisi'];

    /**
     * Get all of the comments for the Gudang
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ditempati()
    {
        return $this->hasMany(Rak::class, 'id_gudang', 'id');
    }
}
