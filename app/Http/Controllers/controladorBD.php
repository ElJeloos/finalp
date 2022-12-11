<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorContactos;
use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaContactos=DB::table('tb_contactos')->get();

        return view('Registrar', compact('ConsultaContactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ConsultaContactos=DB::table('tb_contactos')->get();

        return view('Registrar', compact('ConsultaContactos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorContactos $request)
    {
        DB::table('tb_contactos')->insert([
            "Nombre"=>$request->input('txtnombre'),
            "Numero"=>$request->input('txtnumero'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()


        ]);

        return redirect('contacto/create')->with('confirmacion','Registro exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultarId=DB::table('tb_contactos')->where('idContacto',$id)->first();
        return view('eliminar',compact('consultarId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultarId=DB::table('tb_contactos')->where('idContacto',$id)->first();
        return view('editar',compact('consultarId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorContactos $request, $id)
    {
        DB::table('tb_contactos')->where('idContacto',$id)->update([
            "Nombre"=> $request->input('txtnombre'),
            "Numero"=> $request->input('txtnumero'),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('Contacto')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultarId=DB::table('tb_contactos')->where('idContacto',$id)->delete();
        return redirect('Contacto')->with('Eliminado','Actor eliminado');
    }
}
