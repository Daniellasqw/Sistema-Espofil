<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Compra;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function index(Request $request)
    {
        $auth = Auth::user()->hasRole('super', 'manager', 'user');
        if((!$auth)){
            return view('home');
        }else{
            $keyword = $request->get('search');
            $perPage = 5;

            if (!empty($keyword)) {
                $compras = Compra::where('data', 'LIKE', "%$keyword%")
                ->orWhere('nota_fiscal', 'LIKE', "%$keyword%")
                ->orderBy('id')
                ->latest()
                ->paginate($perPage);
            } else {
                $compras = Compra::orderBy('id')->latest()->paginate($perPage);
            }

            return view('admin.compras.index', compact('compras'));
        }
    }

    public function create()
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            //$compra_id=0;
            $empresas = Empresa::select('id', 'nome')
            ->orderByDesc('nome')
            ->get();
            
            //$compra = Compra::find(1);
           // echo "<pre>";
           // print_r($empresas); die(0);
            return view('admin.compras.create', compact('empresas'));
    
        }
    }

    public function store(Request $request)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            
            $requestData = $request->all();
            $validated = $request->validate([
		        'empresa_id' => 'required',
                'data' => 'required',
		        'nota_fiscal' => 'required',
		        'quantidade' => 'required',
                'material' => 'required',
                'preco_unitario' => 'required',
                'valor_total' => 'required',
                'ipi' => 'required',
                'vencimento' => 'required',
                'data_pagamento' => 'required'
		    ], [
                'empresa_id.required' => 'Selecione a Empresa!',
                'data.required' => 'Adicione uma data!',
                'nota_fiscal.required' => ' Adicione a Nota Fiscal!',
                'quantidade.required' => ' Adicione uma Quantidade!',
                'material.required' => 'Adicione o Material!',
                'preco_unitario.required' => ' Adicione um Valor Unitário!',
                'valor_total.required' => 'Adicione o Valor Total!',
                'ipi.required' => 'Está faltando o ipi!',
                'vencimento.required' => 'Vencimento..',
                'data_pagamento.required' => 'Adicione uma Data de Pagamento!',
            ]);
            
            Compra::create($requestData);

            return redirect('admin/compras')->with('flash_message', 'Compra added!');
        }
    }

    public function show($id)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
           // $compra = Compra::findOrFail($id);
            $compra = Compra::select('compras.*', 'empresas.nome as empresa_nome')
            ->join('empresas', 'compras.empresa_id', '=', 'empresas.id')
            ->where('compras.id',$id)
            ->get();

           //echo "<pre>";
           //print_r($compra); die(0);

            return view('admin.compras.show', compact('compra'));
        }
    }

    public function edit($id)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            $compra = Compra::findOrFail($id);
            $empresas = Empresa::select('id', 'nome')
            ->orderByDesc('nome')
            ->get();

            return view('admin.compras.edit', compact('compra' , 'empresas'));
        }
    }

    public function update(Request $request, $id)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            
            $requestData = $request->all();
            
            $compra = Compra::findOrFail($id);
            $compra->update($requestData);

            return redirect('admin/compras')->with('flash_message', 'Compra updated!');
        }
    }

    public function destroy($id)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            Compra::destroy($id);

            return redirect('admin/compras')->with('flash_message', 'Compra deleted!');
        }
    }
}
