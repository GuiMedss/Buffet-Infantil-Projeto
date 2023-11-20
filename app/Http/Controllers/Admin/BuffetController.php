<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buffet;
use Illuminate\Http\Request;

class BuffetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buffets = Buffet::all();
		return view('admin.buffet.index')->with([
			'buffets' => $buffets,
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.buffet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required',
            'comidas' => 'required',
            'bebidas' => 'required',
            'valor' => 'required',
            'img1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('img1')) {
            $data['img1'] = $request->file('img1')->store('images', 'public');
        }

        if($request->hasFile('img2')) {
            $data['img2'] = $request->file('img2')->store('images', 'public');
        }

        if($request->hasFile('img3')) {
            $data['img3'] = $request->file('img3')->store('images', 'public');
        }

        Buffet::create($data);

        return redirect()->route('admin.buffet.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buffet  $buffet
     * @return \Illuminate\Http\Response
     */
    public function show(Buffet $buffet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buffet  $buffet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buffet = Buffet::findOrFail($id);
		return view('admin.buffet.edit')->with([
			'buffet' => $buffet
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buffet  $buffet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buffet = Buffet::findOrFail($id);

        $data = $request->validate([
            'titulo' => 'required',
            'comidas' => 'required',
            'bebidas' => 'required',
            'valor' => 'required',
            'img1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('img1')) {
            $data['img1'] = $request->file('img1')->store('images', 'public');
        }

        if($request->hasFile('img2')) {
            $data['img2'] = $request->file('img2')->store('images', 'public');
        }

        if($request->hasFile('img3')) {
            $data['img3'] = $request->file('img3')->store('images', 'public');
        }

        $buffet->update($data);

        return redirect()->route('admin.buffet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buffet  $buffet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buffet = Buffet::findOrFail($id);
        $buffet->delete();

        return redirect()->route('admin.buffet.index')->with('success', 'Buffet excluída com sucesso.');
    }
}
