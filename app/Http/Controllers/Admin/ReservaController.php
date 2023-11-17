<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use App\Models\Buffet;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
		return view('admin.reserva.index')->with([
			'reservas' => $reservas,
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
        return view('admin.reserva.create')->with([
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
            'data' => $request->data,
            'qtd_convidados' => $request->qtd_convidados,
            'aniversariante' => $request->aniversariante,
            'idade' => $request->idade,
            'status' => $request->status,
        ]);

        return redirect()->back()->with([
			'success' => 'Reserva criada com sucesso',
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        $buffets = Buffet::all();
		return view('admin.reserva.edit')->with([
			'reserva' => $reserva,
            'buffets' => $buffets,
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $reserva
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
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();

        return redirect()->route('admin.reserva.index')->with('success', 'Reserva excluída com sucesso.');
    }
}
