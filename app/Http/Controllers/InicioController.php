<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;

class InicioController extends Controller
{
    protected $asignatura;
    public function __construct(Asignatura $asignatura)
    {
        $this->asignatura = $asignatura;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lunes0 = $this->asignatura->obtenerAsignaturaPorHorario(0, 0);
        $lunes1 = $this->asignatura->obtenerAsignaturaPorHorario(0, 1);
        $lunes2 = $this->asignatura->obtenerAsignaturaPorHorario(0, 2);
        $lunes3 = $this->asignatura->obtenerAsignaturaPorHorario(0, 3);
        $lunes4 = $this->asignatura->obtenerAsignaturaPorHorario(0, 4);
        $lunes5 = $this->asignatura->obtenerAsignaturaPorHorario(0, 5);

        $martes0 = $this->asignatura->obtenerAsignaturaPorHorario(1, 0);
        $martes1 = $this->asignatura->obtenerAsignaturaPorHorario(1, 1);
        $martes2 = $this->asignatura->obtenerAsignaturaPorHorario(1, 2);
        $martes3 = $this->asignatura->obtenerAsignaturaPorHorario(1, 3);
        $martes4 = $this->asignatura->obtenerAsignaturaPorHorario(1, 4);
        $martes5 = $this->asignatura->obtenerAsignaturaPorHorario(1, 5);

        $miercoles0 = $this->asignatura->obtenerAsignaturaPorHorario(2, 0);
        $miercoles1 = $this->asignatura->obtenerAsignaturaPorHorario(2, 1);
        $miercoles2 = $this->asignatura->obtenerAsignaturaPorHorario(2, 2);
        $miercoles3 = $this->asignatura->obtenerAsignaturaPorHorario(2, 3);
        $miercoles4 = $this->asignatura->obtenerAsignaturaPorHorario(2, 4);
        $miercoles5 = $this->asignatura->obtenerAsignaturaPorHorario(2, 5);
        
        $jueves0 = $this->asignatura->obtenerAsignaturaPorHorario(3, 0);
        $jueves1 = $this->asignatura->obtenerAsignaturaPorHorario(3, 1);
        $jueves2 = $this->asignatura->obtenerAsignaturaPorHorario(3, 2);
        $jueves3 = $this->asignatura->obtenerAsignaturaPorHorario(3, 3);
        $jueves4 = $this->asignatura->obtenerAsignaturaPorHorario(3, 4);
        $jueves5 = $this->asignatura->obtenerAsignaturaPorHorario(3, 5);

        $viernes0 = $this->asignatura->obtenerAsignaturaPorHorario(4, 0);
        $viernes1 = $this->asignatura->obtenerAsignaturaPorHorario(4, 1);
        $viernes2 = $this->asignatura->obtenerAsignaturaPorHorario(4, 2);
        $viernes3 = $this->asignatura->obtenerAsignaturaPorHorario(4, 3);
        $viernes4 = $this->asignatura->obtenerAsignaturaPorHorario(4, 4);
        $viernes5 = $this->asignatura->obtenerAsignaturaPorHorario(4, 5);

        return view('dashboard', [
            'lunes0' => $lunes0,
            'lunes1' => $lunes1,
            'lunes2' => $lunes2,
            'lunes3' => $lunes3,
            'lunes4' => $lunes4,
            'lunes5' => $lunes5,

            'martes0' => $martes0,
            'martes1' => $martes1,
            'martes2' => $martes2,
            'martes3' => $martes3,
            'martes4' => $martes4,
            'martes5' => $martes5,

            'miercoles0' => $miercoles0,
            'miercoles1' => $miercoles1,
            'miercoles2' => $miercoles2,
            'miercoles3' => $miercoles3,
            'miercoles4' => $miercoles4,
            'miercoles5' => $miercoles5,

            'jueves0' => $jueves0,
            'jueves1' => $jueves1,
            'jueves2' => $jueves2,
            'jueves3' => $jueves3,
            'jueves4' => $jueves4,
            'jueves5' => $jueves5,

            'viernes0' => $viernes0,
            'viernes1' => $viernes1,
            'viernes2' => $viernes2,
            'viernes3' => $viernes3,
            'viernes4' => $viernes4,
            'viernes5' => $viernes5,
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
        //
    }
}
