@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('includes.sidebar')

            @role('super', 'manager')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Empresa {{ $empresa->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/empresas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/admin/empresas/' . $empresa->id . '/edit') }}" title="Edit Empresa"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/empresas' . '/' . $empresa->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Deletar Empresa?" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $empresa->id }}</td>
                                    </tr>

                                    <tr>
                                        <th> Name </th>
                                    <td> {{ $empresa->nome }} </td>
                                </tr>



                                <tr>
                                    <th> Endereço </th>
                                <td> {{ $empresa->endereco }} </td>
                            </tr>

                            <tr>
                                    <th> CNPJ </th>
                                <td> {{ $empresa->cnpj }} </td>
                            </tr>

                            <tr>
                                    <th> Telefone </th>
                                <td> {{ $empresa->telefone }} </td>
                            </tr>

                            <tr>
                                    <th> CEP </th>
                                <td> {{ $empresa->cep }} </td>
                            </tr>

                            <tr>
                                    <th> E-mail </th>
                                <td> {{ $empresa->email }} </td>
                            </tr>

                            <tr>
                                    <th> Inscrição Estadual </th>
                                <td> {{ $empresa->inscricao_estadual }} </td>
                            </tr>

                            <tr>
                                    <th> Prazo de Pagamento</th>
                                <td> {{ $empresa->prazo_pgto }} </td>
                            </tr>

                            <tr>
                                    <th> Banco</th>
                                <td> {{ $empresa->banco }} </td>
                            </tr>

                            <tr>
                                    <th> Local Entrega

                        
                                    </th>
                                <td> {{ $empresa->local_entrega }} </td>
                            </tr>

                            <tr>
                                    <th> Comprador</th>
                                <td> {{ $empresa->comprador }} </td>
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
