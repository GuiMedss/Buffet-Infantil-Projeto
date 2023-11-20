<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use App\Models\Buffet;
use App\Models\Recomendacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::where('user_id', Auth::user()->id)->get();
        $buffets = Buffet::all();
        $recomendacoes = Recomendacao::all();

		return view('user.reserva.index')->with([
            'buffets' => $buffets,
			'reservas' => $reservas,
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
        $buffets = Buffet::all();
        return view('user.reserva.create')->with([
            'buffets' => $buffets,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva = Reserva::create([
            'buffet_id' => $request->buffet,
            'user_id' => Auth::user()->id,
            'data' => $request->data,
            'qtd_convidados' => $request->qtd_convidados,
            'aniversariante' => $request->aniversariante,
            'idade' => $request->idade,
            'status' => 1,
        ]);

        return redirect()->back()->with([
			'success' => 'Reserva criada com sucesso',
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reserva = Reserva::findOrFail($id);

        $reserva->update($request->all());

		return redirect()->back()->with([
			'success' => 'Reserva editado com sucesso',
		]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
