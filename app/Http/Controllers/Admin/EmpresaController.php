<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use App\Http\Requests;



use App\Models\Empresa;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class EmpresaController extends Controller

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

                $empresas = Empresa::where('nome', 'LIKE', "%$keyword%")

                ->orWhere('cnpj', 'LIKE', "%$keyword%")

                ->orderBy('id')

                ->latest()

                ->paginate($perPage);

            } else {

                $empresas = Empresa::orderBy('id')->latest()->paginate($perPage);

            }



            return view('admin.empresas.index', compact('empresas'));

        }

    }



    public function create()

    {

        $auth = Auth::user()->hasRole('super', 'manager');

        if((!$auth)){

            return view('home');

        }else{

            return view('admin.empresas.create');

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
		        
                'nome' => 'required',
		        'endereco' => 'required',
		        'cnpj' => 'required',
                'telefone' => 'required',
                'cep' => 'required',
                'email' => 'required',
                'inscricao_estadual' => 'required',
                
		    ], [
                'nome.required' => 'Adicione o Nome da Empresa!',
                'endereco.required' => 'Adicione o Endereço!',
                'cnpj.required' => ' Adicione um CNPJ!',
                'telefone.required' => ' Adicione um Telefone!',
                'cep.required' => 'Adicione um CEP!',
                'email.required' => 'Adicione um E-mail!',
                'inscricao_estadual.required' => 'Adicione a Inscrição Estadual!',
                
            
            ]);
            Empresa::create($requestData);



            return redirect('admin/empresas')->with('flash_message', 'Empresa added!');

        }

    }



    public function show($id)

    {

        $auth = Auth::user()->hasRole('super', 'manager');

        if((!$auth)){

            return view('home');

        }else{

            $empresa = Empresa::findOrFail($id);



            return view('admin.empresas.show', compact('empresa'));

        }

    }



    public function edit($id)

    {

        $auth = Auth::user()->hasRole('super', 'manager');

        if((!$auth)){

            return view('home');

        }else{

            $empresa = Empresa::findOrFail($id);



            return view('admin.empresas.edit', compact('empresa'));

        }

    }



    public function update(Request $request, $id)

    {

        $auth = Auth::user()->hasRole('super', 'manager');

        if((!$auth)){

            return view('home');

        }else{

            

            $requestData = $request->all();

            

            $empresa = Empresa::findOrFail($id);

            $empresa->update($requestData);



            return redirect('admin/empresas')->with('flash_message', 'Empresa updated!');

        }

    }



    public function destroy($id)

    {

        $auth = Auth::user()->hasRole('super', 'manager');

        if((!$auth)){

            return view('home');

        }else{

            Empresa::destroy($id);



            return redirect('admin/empresas')->with('flash_message', 'Empresa deleted!');

        }

    }

}

