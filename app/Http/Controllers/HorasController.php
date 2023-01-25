<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horas;
use App\Models\Asignatura;

class HorasController extends Controller
{
    protected $horas;
    public function __construct(Horas $horas)
    {
        $this->horas = $horas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturas = Asignatura::all();
        $horas = $this->horas->obtenerHoras();
        return view('horas.lista', ['horas' => $horas, 'asignaturas' => $asignaturas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $asignaturas = Asignatura::all();
        return view('horas.crear', ['asignaturas' => $asignaturas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horas = new Horas($request->all());
        $horas->save();
        return redirect()->action([HorasController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horas = $this->horas->obtenerHorasPorId($id);
        return view('horas.ver', ['horas' => $horas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horas = $this->horas->obtenerHorasPorId($id);
        return view('horas.editar', ['horas' => $horas]);
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
        $horas = Horas::find($id);
        $horas->fill($request->all());
        $horas->save();
        return redirect()->action([HorasController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horas = Horas::find($id);
        $horas->delete();
        return redirect()->action([HorasController::class, 'index']);
    }
}
