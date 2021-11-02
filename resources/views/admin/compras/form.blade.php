 <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
    <select  name="empresa_id">
        <option>Selecione Empresa </option>
		@isset($compra)
	        @foreach ($empresas as $empresa)
	            <option value="{{ $empresa->id }}" {{ ($empresa->id == $compra->empresa_id) ? 'selected' : '' }}> 
	                {{ $empresa->nome }} 
	            </option>
	        @endforeach 
		@else
	        @foreach ($empresas as $empresa)
	            <option value="{{ $empresa->id }}"> 
	                {{ $empresa->nome }} 
	            </option>
	        @endforeach 
	    @endisset   


    </select>
</div>  

<div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
    <label for="data" class="control-label">{{ 'Data' }}</label>
    <input class="form-control" name="data" type="date" id="data" value="{{ isset($compra->data) ? $compra->data : ''}}" >
    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('nota_fiscal') ? 'has-error' : ''}}">
    <label for="nota_fiscal" class="control-label">{{ 'Nota Fiscal' }}</label>
    <input class="form-control" name="nota_fiscal" type="text" id="nota_fiscal" value="{{ isset($compra->nota_fiscal) ? $compra->nota_fiscal : ''}}" >
    {!! $errors->first('nota_fiscal', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('quantidade') ? 'has-error' : ''}}">
    <label for="quantidade" class="control-label">{{ 'Quantidade' }}</label>
    <input class="form-control" name="quantidade" type="text" id="quantidade" value="{{ isset($compra->quantidade) ? $compra->quantidade : ''}}" >
    {!! $errors->first('quantidade', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('material') ? 'has-error' : ''}}">
    <label for="material" class="control-label">{{ 'Material' }}</label>
    <input class="form-control" name="material" type="text" id="material" value="{{ isset($compra->material) ? $compra->material : ''}}" >
    {!! $errors->first('material', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('preco_unitario') ? 'has-error' : ''}}">
    <label for="preco_unitario" class="control-label">{{ 'Valor Unitário' }}</label>
    <input class="form-control" name="preco_unitario" type="text" id="preco_unitario" value="{{ isset($compra->preco_unitario) ? $compra->preco_unitario : ''}}" >
    {!! $errors->first('preco_unitario', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('valor_total') ? 'has-error' : ''}}">
    <label for="valor_total" class="control-label">{{ 'Valor Total' }}</label>
    <input class="form-control" name="valor_total" type="text" id="valor_total" value="{{ isset($compra->valor_total) ? $compra->valor_total : ''}}" >
    {!! $errors->first('valor_total', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('ipi') ? 'has-error' : ''}}">
    <label for="ipi" class="control-label">{{ 'Ipi' }}</label>
    <input class="form-control" name="ipi" type="text" id="ipi" value="{{ isset($compra->ipi) ? $compra->ipi : ''}}" >
    {!! $errors->first('ipi', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('vencimento') ? 'has-error' : ''}}">
    <label for="vencimento" class="control-label">{{ 'Vencimento' }}</label>
    <input class="form-control" name="vencimento" type="date" id="vencimento" value="{{ isset($compra->vencimento) ? $compra->vencimento : ''}}" >
    {!! $errors->first('vencimento', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('data_pagamento') ? 'has-error' : ''}}">
    <label for="data_pagamento" class="control-label">{{ 'Data de Pagamento' }}</label>
    <input class="form-control" name="data_pagamento" type="date" id="data_pagamento" value="{{ isset($compra->data_pagamento) ? $compra->data_pagamento : ''}}" >
    {!! $errors->first('data_pagamento', '<p class="help-block">:message</p>') !!}
</div>






<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
