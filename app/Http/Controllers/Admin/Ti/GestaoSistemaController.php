<?php

namespace App\Http\Controllers\Admin\Ti;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGestaoSistemaRequest;
use App\Http\Requests\UpdateGestaoSistemaRequest;
use App\Models\GestaoSistema;
use Illuminate\Http\Request;

class GestaoSistemaController extends Controller
{
    protected $model;

    public function __construct(GestaoSistema $gestao)
    {
        $this->model = $gestao;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulos_tabela = [
            'id' => 'Id',
            'descricao' => 'Descrição',
            'link'=>'Link',
            'usuario'=>'Usuário',
            'senha'=>'Senha',
            'acoes'=>'Ações'
        ];
        $datas = GestaoSistema::all();
        return view('admin.ti.gestao_sistemas.index', compact('datas','titulos_tabela'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ti.gestao_sistemas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGestaoSistemaRequest $request)
    {
        //$data = $request->all();
        $data = $request->only([
            'descricao',
            'link',
            'usuario',
            'senha'
        ]);
        GestaoSistema::create($data);
        return redirect()->route('admin.ti.sistemas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($gestaoSistema)
    {
        if (!$data = $this->model->find($gestaoSistema)){
            return redirect()->route('admin.ti.sistemas.index');
        }
        //return view('admin.ti.gestao_sistemas.show', compact('data'));
        return view('admin.ti.gestao_sistemas.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($gestaoSistema)
    {
        //$data = GestaoSistema::find($gestaoSistema);
        //return view('admin.ti.gestao_sistemas.edit')->with('data',$data);
        //return view('admin.ti.sistemas.edit')->with('data',$data);
        if (!$data = $this->model->find($gestaoSistema)){
            return redirect()->route('admin.ti.sistemas.index');
        }
        return view('admin.ti.gestao_sistemas.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGestaoSistemaRequest $request, $gestaoSistema)
    {
        if (!$gestao = $this->model->find($gestaoSistema) ){
            return redirect()->route('admin.ti.sistemas.index');
        }
        $data = $request->all();
        $gestao->update($data);
        return redirect()->route('admin.ti.sistemas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($gestaoSistema)
    {
        if (!$gestao = $this->model->find($gestaoSistema) ){
            return redirect()->route('admin.ti.sistemas.index');
        }
        $gestao->delete();
        return redirect()->route('admin.ti.sistemas.index');
    }
}
