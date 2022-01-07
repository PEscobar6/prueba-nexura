<?php

namespace App\Models;

use Database\Factories\EmpleadosFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre',
        'email',
        'sexo',
        'area_id',
        'boletin',
        'description'
    ];



    public function Area()
    {
        $this->belongsTo(Areas::class);
    }


    public function getAvatarAttribute()
    {
        return "https://ui-avatars.com/api/?name=". $this->nombre . "&color=7F9CF5&background=EBF4FF";
    }

    public function getFullNameAttribute()
    {
        if ($this->sexo == 'M') {
            return 'Masculino';
        }else{
            return 'Femenino';
        }
    }
}
