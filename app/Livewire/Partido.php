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
    public $events = [];
    public $gameObject;

    public function mount($id, $localPlayers, $awayPlayers)
    {
        //dd($localPlayers);
        $this->id = $id;
        $game = Game::with('localTeam', 'awayTeam', 'referee.people', 'tournament', 'reservation.instalation', 'events.playerTeam')->findOrFail($id);
        $game->load('localTeam.players', 'awayTeam.players');
        $this->game = $game->toArray();
    }

    public function countEvents()
    {
        if ($this->game['events']) {
            foreach ($this->game['events'] as $event) {
                //dd($event);
                $thing = [];
                switch ($event['event']) {
                    case 'goal':
                        $thing['image'] = 'assets/img/soccer_ball.png';
                        if ($event['player_team']['team_id'] == $this->game['local_team']['id']) {
                            $this->localTeamGoals++;
                            $thing['time'] = $event['minute'];
                            $thing['name'] = $this->game['local_team']['name'];
                        } else {
                            $this->awayTeamGoals++;
                            $thing['time'] = $event['minute'];
                            $thing['name'] = $this->game['away_team']['name'];
                        }
                        $this->events[] = $thing;
                        break;
                    case 'yellowcard':
                        $thing['image'] = 'assets/img/yellow_card.jpg';
                        $thing['time'] = $event['minute'];
                        $thing['name'] = $this->game['local_team']['name'];
                        break;
                    case 'redcard':
                        $thing['image'] = 'assets/img/red_card.png';
                        $thing['time'] = $event['minute'];
                        $thing['name'] = $this->game['local_team']['name'];
                        break;

                    default:
                        # code...
                        break;
                }
            }
            usort($this->events, function ($a, $b) {
                return $a['time'] <=> $b['time']; // Orden ascendente por 'time'
            });
        }
    }

    public function render()
    {
        $this->countEvents();
        return view('livewire.partido', [
            'game' => $this->game,
            'localTeamGoals' => $this->localTeamGoals,
            'awayTeamGoals' => $this->awayTeamGoals,
            'events' => $this->events,
        ]);
    }
}
