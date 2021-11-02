<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome da Empresa' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ isset($empresa->nome) ? $empresa->nome : ''}}" >
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}">
    <label for="endereco" class="control-label">{{ 'Endereço' }}</label>
    <input class="form-control" name="endereco" type="text" id="endereco" value="{{ isset($empresa->endereco) ? $empresa->endereco : ''}}" >
    {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('cnpj') ? 'has-error' : ''}}">
    <label for="cnpj" class="control-label">{{ 'CNPJ' }}</label>
    <input class="form-control" name="cnpj" type="text" id="cnpj" value="{{ isset($empresa->cnpj) ? $empresa->cnpj : ''}}" >
    {!! $errors->first('cnpj', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
    <label for="telefone" class="control-label">{{ 'Telefone' }}</label>
    <input class="form-control" name="telefone" type="text" id="telefone" value="{{ isset($empresa->telefone) ? $empresa->telefone : ''}}" >
    {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('cep') ? 'has-error' : ''}}">
    <label for="cep" class="control-label">{{ 'CEP' }}</label>
    <input class="form-control" name="cep" type="text" id="cep" value="{{ isset($empresa->cep) ? $empresa->cep : ''}}" >
    {!! $errors->first('cep', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'E-mail' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($empresa->email) ? $empresa->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('inscricao_estadual') ? 'has-error' : ''}}">
    <label for="inscricao_estadual" class="control-label">{{ 'Inscrição Estadual' }}</label>
    <input class="form-control" name="inscricao_estadual" type="text" id="inscricao_estadual" value="{{ isset($empresa->inscricao_estadual) ? $empresa->inscricao_estadual : ''}}" >
    {!! $errors->first('inscricao_estadual', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('prazo_pgto') ? 'has-error' : ''}}">
    <label for="prazo_pgto" class="control-label">{{ 'Prazo de Pagamento' }}</label>
    <input class="form-control" name="prazo_pgto" type="text" id="prazo_pgto" value="{{ isset($empresa->prazo_pgto) ? $empresa->prazo_pgto : ''}}" >
    {!! $errors->first('prazo_pgto', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('banco') ? 'has-error' : ''}}">
    <label for="banco" class="control-label">{{ 'Banco' }}</label>
    <input class="form-control" name="banco" type="text" id="banco" value="{{ isset($empresa->banco) ? $empresa->banco : ''}}" >
    {!! $errors->first('banco', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('local_entrega') ? 'has-error' : ''}}">
    <label for="local_entrega" class="control-label">{{ 'Local de Entrega' }}</label>
    <input class="form-control" name="local_entrega" type="text" id="local_entrega" value="{{ isset($empresa->local_entrega) ? $empresa->local_entrega : ''}}" >
    {!! $errors->first('local_entrega', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('comprador') ? 'has-error' : ''}}">
    <label for="comprador" class="control-label">{{ 'Comprador' }}</label>
    <input class="form-control" name="comprador" type="text" id="comprador" value="{{ isset($empresa->comprador) ? $empresa->comprador : ''}}" >
    {!! $errors->first('comprador', '<p class="help-block">:message</p>') !!}
</div>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
