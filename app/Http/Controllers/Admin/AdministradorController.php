<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\User;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradores = User::whereHas('administrador')->get();

        return view('admin.administrador.index')->with([
            'usuarios' => $administradores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.administrador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $usuario = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        Administrador::create([
            'user_id' => $usuario->id
        ]);

        return redirect()->route('admin.administrador.index')->with([
            'success' => 'Usuário administrador criado com sucesso'
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
        $administrador = User::findOrFail($id);
        return view('admin.administrador.edit')->with([
            'usuario' => $administrador
        ]);
    }

    public function perfil(){
        return redirect()->route('admin.administrador.edit',Auth::administrador()->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $administrador = User::findOrFail($id);
        $request->validate([
            'name' => ['required'],
        ]);
        if($request->email != $administrador->email){
            $request->validate([
                'email' => ['unique:administradors']
            ]);
        }
        if($request->password == ''){
            $request->merge([
                'password' => $administrador->password
            ]);
        }
        else{
            $request->validate([
                'password' => ['string', 'min:8', 'confirmed'],
            ]);
            $request->merge([
                'password' => Hash::make($request->password)
            ]);
        }
        $administrador->update($request->all());
        return redirect()->back()->with([
            'success' => 'Dados editados com Sucesso'
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
        $administrador = User::findOrFail($id);
        $administrador->delete();
        return redirect()->back()->with([
            'success' => 'User removida com Sucesso'
        ]);
    }
}
