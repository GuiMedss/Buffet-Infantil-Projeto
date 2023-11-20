<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Convidado;

class ConvidadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $reserva = Reserva::findOrFail($id);
        $convidados = Convidado::where('reserva_id', $id)->get();

        return view('convidado.index')->with([
            'reserva' => $reserva,
            'convidados' => $convidados,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createWithId($id)
    {
        $reserva = Reserva::findOrFail($id);

        return view('convidado.create')->with([
            'reserva' => $reserva,
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
        $reservaId = $request->input('reserva_id');

        foreach ($request->input('name') as $key => $name) {
            $convidado = new Convidado();
            $convidado->name = $name;
            $convidado->cpf = $request->input('cpf')[$key];
            $convidado->idade = $request->input('idade')[$key];
            $convidado->reserva_id = $reservaId;
            $convidado->save();
        }

        // Redireciona ou faz o que for necessário após o armazenamento
        return redirect()->route('home');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convidado = Convidado::findOrFail($id);
        $convidado->delete();

        return redirect()->back();
    }
}
