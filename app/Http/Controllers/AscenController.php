<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Referee;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;

class AscenController extends Controller
{
    public function index(){
        $users = User::all();
        return view('ascend.ascend_view', compact('users'));
    }

    public function upgradePlayer(User $user){
        $person = $user->people;
        return view('ascend.player', compact('person'));
    }

    public function storePlayer(Request $request, $id){
        Player::create(
            [
                'people_id' => $id,
                'status' => $request->status,
                'height' => $request->height,
                'bestSide' => $request->bestSide,
            ]
        );

        return redirect()->route('ascend.index');
    }

    public function upgradeTrainer(User $user){
        $person = $user->people;
        return view('ascend.trainers', compact('person'));
    }

    public function storeTrainer(Request $request,$id){
        Trainer::create(
            [
                'people_id' => $id,
                'description' => $request->description,
            ]
        );
        return redirect()->route('ascend.index');
    }

    public function upgradeReferee(User $user){
        $person = $user->people;
        return view('ascend.referees', compact('person'));
    }

    public function storeReferee(Request $request, $id){
        Referee::create(
            [
                'people_id' => $id,
                'description' => $request->description,
            ]
        );
        return redirect()->route('ascend.index');
    }
}
