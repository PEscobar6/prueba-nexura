<?php

namespace App\Models;

use Database\Factories\EmpleadosRolFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoRol extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'empleado_id',
        'rol_id'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return new EmpleadosRolFactory();
    }

    public function Empleado()
    {
        $this->belongsTo(Empleados::class);
    }

    public function Area()
    {
        $this->belongsTo(Areas::class);
    }
}
