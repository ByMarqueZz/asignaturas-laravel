<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = "asignaturas";

    protected $fillable = ['codAs', 'user_id', 'nombreAs', 'nombreCortoAs', 'profesorAs', 'colorAs'];

    protected $primaryKey = 'codAS';
    protected $keyType = 'string';
    public function obtenerAsignaturas()
    {
        return Asignatura::all();
    }
    public function obtenerAsignaturaPorCod($codAs)
    {
        return Asignatura::find($codAs);
    }
}
