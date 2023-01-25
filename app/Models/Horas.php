<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horas extends Model
{
    use HasFactory;

    protected $table = "horas";

    protected $fillable = ['diaH', 'horaH', 'codAs'];

    protected $primaryKey = ['diaH', 'horaH'];
    protected $keyType = 'string';
    public $incrementing = false;

    public function obtenerHoras()
    {
        return Horas::all();
    }
    public function obtenerHorasPorId($id)
    {
        return Horas::find($id);
    }
}
