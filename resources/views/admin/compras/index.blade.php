@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('includes.sidebar')

            @role('super', 'manager', 'user')
            <div class="col-md-9">
                <div class="card">
                    @role('super', 'manager')
                    <div class="card-header">Compras</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/compras/create') }}" class="btn btn-success btn-sm" title="Adicione nova Compra">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar novo
                        </a>

                        <form method="GET" action="{{ url('/admin/compras') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Pesquisar" value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    @endrole
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                        <th>Data</th>
                          <th>Nota Fiscal</th>
                         <!-- <th>Quantidade</th>
                          <th>Material</th>
                          <th>Valor Unitário</th>-->
                          
                          
                          
                          
                          
                                        
                                        @role('super', 'manager')
                                        <th>Ações</th>
                                        @endrole
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($compras as $item)
                                    <tr>
                                    <td>{{ $item->id   }}</td>
                                    <td>{{ $item->data }}</td>
            <td>{{ $item->nota_fiscal }}</td>
           <!-- <td>{{ $item->quantidade }}</th>
            <td>{{ $item->material }}</td>
            <td>{{ $item->preco_unitario }}</td>
            
            <th>{{ $item->valor_total }}</th>
            <th>{{ $item->ipi }}</th>
            <th>{{ $item->vencimento}}</th>
            <th>{{ $item->data_pagamento}}</th>-->
                                        
                                        <td>
                                @role('super', 'manager')
                                            <a href="{{ url('/admin/compras/' . $item->id) }}" title="Visualizar Compra"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Visualizar</button></a>
                                            <a href="{{ url('/admin/compras/' . $item->id . '/edit') }}" title="Editar Compra"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/compras' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Deletar Compra?" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                            </form>
                                @endrole
                                        </td>
</tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $compras->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
            @endrole
        </div>
    </div>
@endsection
