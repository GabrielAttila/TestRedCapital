<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $fillable = ['nombre', 'precio'];

    protected $table = 'detalle_compras';

    public function compra()
    {
        return $this->belongsTo(Compra::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
