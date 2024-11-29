<?php

namespace App\Livewire;

use App\Models\People;
use Livewire\Component;

class Filtro extends Component
{

    public $birthplace;
    public $filteredPeople = [];

    public function search(){
        $query = People::query();
        if ($this->birthplace) {
            $query->where('birthplace', 'LIKE', "%{$this->birthplace}%");
        }
        $query->with('player');
        $this->filteredPeople = $query->get()->toArray();
    }

    public function render()
    {
        return view('livewire.filtro', [
            'filteredPeople' => $this->filteredPeople, 
        ]);
    }
}