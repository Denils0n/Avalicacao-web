<?php

namespace App\Http\Controllers;

use App\Models\Remedio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RemedioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Remedio::create([
            'nome_marca' => $request->nome_marca,
            'formula' => $request->formula,
            'validade' => $request->mes. "/" . $request-> ano,                                                                                     
            'lote' => $request->lote,
            'nome_remedio' => $request->nome_remedio,
            'valor' => $request->valor,

            'user_id' => Auth::user()->id
 
        ]);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Remedio  $remedio
     * @return \Illuminate\Http\Response
     */
    public function show(Remedio $remedio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Remedio  $remedio
     * @return \Illuminate\Http\Response
     */
    public function edit(Remedio $remedio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Remedio  $remedio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remedio $remedio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Remedio  $remedio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remedio $remedio)
    {
        //
    }
}
