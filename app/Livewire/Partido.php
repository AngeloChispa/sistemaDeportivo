<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Component;

class Partido extends Component
{
    public $id;
    public $game = [];
    public $localTeamGoals = 0;
    public $awayTeamGoals = 0;

    public function mount($id)
    {
        $this->id = $id;
        $game = Game::with('localTeam', 'awayTeam','referee.people', 'tournament', 'reservation.instalation', 'events.playerTeam')->findOrFail($id);
        $this->game = $game->toArray();
        //dd($this->game);
    }

    public function countEvents(){
        if($this->game['events']){
            foreach($this->game['events'] as $event){
                //dd($event);
                switch ($event['event']) {
                    case 'goal':
                        if($event['player_team']['team_id'] == $this->game['local_team']['id']){
                            $this->localTeamGoals ++;
                        }else{
                            $this->awayTeamGoals++;
                        }
                        break;
                    
                    default:
                        # code...
                        break;
                }
            }
        }
    }

    public function render()
    {
        $this->countEvents();
        return view('livewire.partido', [
            'game' => $this->game,
            'localTeamGoals' => $this->localTeamGoals,
            'awayTeamGoals' => $this->awayTeamGoals,
        ]);
    }
}
