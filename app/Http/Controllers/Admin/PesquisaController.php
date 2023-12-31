<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesquisa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesquisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesquisas = Pesquisa::all();
		return view('admin.pesquisa.index')->with([
			'pesquisas' => $pesquisas,
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesquisa  $pesquisa
     * @return \Illuminate\Http\Response
     */
    public function show(Pesquisa $pesquisa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesquisa  $pesquisa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesquisa $pesquisa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesquisa  $pesquisa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesquisa $pesquisa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesquisa  $pesquisa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesquisa $pesquisa)
    {
        //
    }
}
