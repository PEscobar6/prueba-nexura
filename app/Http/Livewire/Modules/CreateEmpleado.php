<?php

namespace App\Http\Livewire\Modules;

use App\Models\Areas;
use App\Models\EmpleadoRol;
use App\Models\Empleados;
use Exception;
use Livewire\Component;

class CreateEmpleado extends Component
{
    public $isOpen = false;

    public $id_empleado = 0;

    public $nombre;
    public $email;
    public $sexo;
    public $area;
    public $boletin;
    public $roles = [];
    public $description;

    protected $listeners = ['openModal' => 'openModal'];

    protected function rules()
    {
        return [
            'nombre'    => 'required|min:6|regex:/^[A-Za-z0-9 ]+$/|max:255',
            'email'     => 'required|email|string|max:255|unique:empleados,email,' . $this->email . '',
            'sexo'      => 'required',
            'area'      => 'required',
            'description' => 'required|min:20',
            'roles'     => 'required|array'
        ];
    }

    protected $messages = [
        'nombre.required' => 'El nombre no puede ser vacío.',
        'nombre.min'  => 'El nombre debe contener por lo menos :min caracteres.',
        'nombre.regex'  => 'No se permiten carácteres especiales',
        'nombre.max'  => 'El nombre debe contener maximo :min caracteres.',
        'email.required' => 'El correo no puede ser vacío.',
        'email.email' => 'La dirección de correo no es válida.',
        'email.unique' => 'La dirección de correo electrónico ya se encuentra registrada con otro empleado.',
        'email.max'  => 'El email debe contener maximo :min caracteres.',
        'sexo.required' => 'Debe seleccionar una opción.',
        'area.required' => 'Debe seleccionar una opción.',
        'description'   => 'La descripción es requerida.',
        'description.min'   => 'La descripción debe contener por lo menos :min caracteres',
        'roles.required'         => 'Debe elegir por lo menos 1 rol'
    ];

    protected $validationAttributes = [
        'email' => 'email address'
    ];

    public function render()
    {
        return view('livewire.modules.create-empleado', [
            'areas' => Areas::orderBy('nombre')->get()
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        try {
            $dataEmpleado = Empleados::create([
                'nombre'    => $this->nombre,
                'email'     => $this->email,
                'sexo'      => $this->sexo,
                'area_id'   => $this->area,
                'boletin'   => $this->boletin,
                'description' => $this->description
            ]);

            foreach ($this->roles as $key => $value) {
                EmpleadoRol::create([
                    'empleado_id'   => $dataEmpleado->id,
                    'rol_id'        => $value
                ]);
            }

            $this->reset();
            $this->emit('renderTable');
            $this->emit('alert', 'Operación exitosa', 'Se ha guardado el empleado exitosamente', 'success');
            $this->isOpen = false;
        } catch (Exception $e) {
            $this->emit('alert', 'Operación fallida', 'Comuniquese con un administrador: ' . $e->getMessage(), 'danger');
        }
    }

    public function openModal()
    {
        $this->isOpen = true;
    }
}
