<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Tournament;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     */
    public function playerReport(Request $request)
    {
        $query = Player::query();

        if ($request->has('nationality') && $request->nationality != '') {
            $query->where('nationality', 'like', '%' . $request->nationality . '%');
        }


        

        $players = $query->get();

        $pdf = PDF::loadView('reports.player_report', compact('players'));

        return $pdf->download('player_report.pdf');
    }

    /**
     */
    public function tournamentReport(Request $request)
    {
        $query = Tournament::query();

        if ($request->has('start_date') && $request->has('end_date')) {
            $query->whereBetween('start_date', [$request->start_date, $request->end_date]);
        }

        $tournaments = $query->get();

        $pdf = PDF::loadView('reports.tournament_report', compact('tournaments'));

        return $pdf->download('tournament_report.pdf');
    }
}
