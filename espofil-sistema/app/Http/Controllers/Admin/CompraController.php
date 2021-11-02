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
            $selectedID=0;
            $empresas = Empresa::select('id', 'nome')
            ->orderByDesc('nome')
            ->get();
           // echo "<pre>";
           // print_r($empresas); die(0);
            return view('admin.compras.create', compact('empresas', 'selectedID'));
    
        }
    }

    public function store(Request $request)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            
            $requestData = $request->all();
            
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
