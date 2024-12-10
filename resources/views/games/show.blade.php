@extends('layouts.admin_view')

@section('title')
    {{ $game->localTeam->name }} - {{ $game->awayTeam->players }}
@endsection

@section('content')
    <livewire:partido :id="$game->id" :localPlayers="$game->localTeam->players" :awayPlayers="$game->awayTeam->players"/>
    @section('scripts', '@livewireScripts')

@endsection
