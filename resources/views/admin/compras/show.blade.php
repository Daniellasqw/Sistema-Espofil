@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('includes.sidebar')

            @role('super', 'manager')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Compra {{ $compra[0]->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/compras') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/admin/compras/' . $compra[0]->id . '/edit') }}" title="Edit Compra"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/compras' . '/' . $compra[0]->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Deletar Compra?" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $compra[0]->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nome da Empresa </th>
                                    <td> {{ $compra[0]->empresa_nome }} </td>
                                </tr>

                                    <tr>
                                        <th> Data </th>
                                    <td> {{ $compra[0]->data }} </td>
                                </tr>



                                <tr>
                                    <th> Nota Fiscal </th>
                                <td> {{ $compra[0]->nota_fiscal }} </td>
                            </tr>

                            <tr>
                                    <th> Quantidade </th>
                                <td> {{ $compra[0]->quantidade }} </td>
                            </tr>

                            <tr>
                                    <th> Material </th>
                                <td> {{ $compra[0]->material }} </td>
                            </tr>

                            <tr>
                                    <th> Valor Unitário </th>
                                <td> {{ $compra[0]->preco_unitario }} </td>
                            </tr>

                            <tr>
                                    <th> Valor Total </th>
                                <td> {{ $compra[0]->valor_total }} </td>
                            </tr>

                            <tr>
                                    <th> Ipi </th>
                                <td> {{ $compra[0]->ipi }} </td>
                            </tr>

                            <tr>
                                    <th> Vencimento</th>
                                <td> {{ $compra[0]->vencimento }} </td>
                            </tr>

                            <tr>
                                    <th> Data de Pagamento</th>
                                <td> {{ $compra[0]->data_pagamento }} </td>
                            </tr>

                            

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @endrole
        </div>
    </div>
@endsection
