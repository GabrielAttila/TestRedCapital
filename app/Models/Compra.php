<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = ['producto', 'cantidad'];

    public function detalleCompra()
    {
        return $this->hasOne(DetalleCompra::class);
    }
}
