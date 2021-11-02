@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('includes.sidebar')

            @role('super', 'manager')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Cadastrar nova empresa</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/empresas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/empresas') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.empresas.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
            @endrole
        </div>
    </div>
@endsection
