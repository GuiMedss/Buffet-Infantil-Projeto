<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $segunda = Agenda::where('dia_da_semana', 'segunda')->get();
        $terca = Agenda::where('dia_da_semana', 'terca')->get();
        $quarta = Agenda::where('dia_da_semana', 'quarta')->get();
        $quinta = Agenda::where('dia_da_semana', 'quinta')->get();
        $sexta = Agenda::where('dia_da_semana', 'sexta')->get();
        $sabado = Agenda::where('dia_da_semana', 'sabado')->get();
        $domingo = Agenda::where('dia_da_semana', 'domingo')->get();

        return view('admin.agenda.index')
            ->with('segunda', $segunda)
            ->with('terca', $terca)
            ->with('quarta', $quarta)
            ->with('quinta', $quinta)
            ->with('sexta', $sexta)
            ->with('sabado', $sabado)
            ->with('domingo', $domingo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agenda = Agenda::create($request->all());

		return redirect()->back()->with([
			'success' => 'Agenda criada com sucesso',
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
		return view('admin.agenda.edit')->with([
			'agenda' => $agenda
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agenda = Agenda::findOrFail($id);

        $agenda->update($request->all());

		return redirect()->back()->with([
			'success' => 'Agenda editado com sucesso',
		]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda excluída com sucesso.');
    }
}
