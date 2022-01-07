<?php

namespace App\Http\Livewire\Modules;

use App\Models\Empleados as ModelsEmpleados;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Empleados extends Component
{
    use WithPagination;

    public $search = "";
    public $order = "id";
    public $direction = "desc";

    protected $listeners = ['renderTable' => 'render'];

    public function render()
    {
            $empleadoData = DB::table('empleados')
                            ->select('empleados.id', 'empleados.nombre', 'empleados.email', 'empleados.sexo', 'empleados.area_id', 'empleados.boletin', 'empleados.description', 'areas.nombre AS area')
                            ->join('areas', 'empleados.area_id', 'areas.id')
                            ->where('empleados.nombre', 'like', '%'.$this->search.'%')
                            ->orderBy($this->order, $this->direction)
                            ->paginate(10);
        return view('livewire.modules.empleados', [
            'empleados' => $empleadoData
        ])
        ->layout('layouts.guest');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function order($sort)
    {
        if ($this->order == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            }else {
                $this->direction = 'desc';
            }
        }else {
            $this->order = $sort;
            $this->direction = 'asc';
        }
    }
}
