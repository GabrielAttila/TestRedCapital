@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listado de compras</div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($detalleCompras as $detalleCompra)
                                <tr>
                                    <th scope="row">{{ $detalleCompra->compra_id }}</th>
                                    <th scope="row">{{ $detalleCompra->categoria->nombre }}</th>
                                    <th scope="row">{{ $detalleCompra->compra->producto }}</th>
                                    <th scope="row">{{ $detalleCompra->compra->cantidad }}</th>
                                    <th scope="row">{{ $detalleCompra->precio }}</th>
                                    <th scope="row">{{ number_format($detalleCompra->precio * $detalleCompra->compra->cantidad, 2, '.', ',') }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection