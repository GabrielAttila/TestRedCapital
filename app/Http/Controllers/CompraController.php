<?php

namespace App\Http\Controllers;

use App\Models\DetalleCompra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function list()
    {
        $detalleCompras = DetalleCompra::query()
            ->with(['compra', 'categoria'])
            ->join('categorias', 'categorias.id', 'detalle_compras.categoria_id')
            ->orderBy('categorias.nombre', 'DESC')
            ->get();

        return view('page.compra.list', compact('detalleCompras'));
    }

}
