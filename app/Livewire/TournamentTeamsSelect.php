<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Tournament;
use App\Models\Team;

class TournamentTeamsSelect extends Component
{
    public $tournamentId = null;
    public $teams = [];

    // Este método se ejecutará cuando cambie el torneo seleccionado
    public function updatedTournamentId($tournamentId)
    {
        $this->teams = $tournamentId 
            ? Tournament::find($tournamentId)->teams->pluck('id', 'name') 
            : Team::all()->pluck('id', 'name'); // Si no hay torneo seleccionado, muestra todos los equipos
    }

    public function render()
    {
        return view('livewire.tournament-teams-select');
    }
}
