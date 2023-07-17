<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    use HasFactory;
    protected $table = "tb_barang";
    protected $primaryKey = "produk_id";
    protected $guarded = [];


    public function pelanggan(): HasMany
    {
        return $this->hasMany(Pelanggan::class, 'pel_id_brg', 'produk_id');
    }
}
