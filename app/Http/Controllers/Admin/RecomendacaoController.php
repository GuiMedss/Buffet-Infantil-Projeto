<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recomendacao;
use Illuminate\Http\Request;

class RecomendacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recomendacoes = Recomendacao::all();
		return view('admin.recomendacao.index')->with([
			'recomendacoes' => $recomendacoes,
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recomendacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recomendacao = Recomendacao::create($request->all());

        return redirect()->back()->with([
			'success' => 'Recomendaçãoo criada com sucesso',
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recomendacao  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Recomendacao $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recomendacao  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recomendacao = Recomendacao::findOrFail($id);

		return view('admin.recomendacao.edit')->with([
			'recomendacao' => $recomendacao,
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recomendacao  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recomendacao = Recomendacao::findOrFail($id);

        $recomendacao->update($request->all());

		return redirect()->back()->with([
			'success' => 'Recomendacao editado com sucesso',
		]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recomendacao  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recomendacao = Recomendacao::findOrFail($id);
        $recomendacao->delete();

        return redirect()->route('admin.recomendacao.index')->with('success', 'Recomendação excluída com sucesso.');
    }
}
