@extends('layouts.admin_view')

@section('title')
    {{ $game->localTeam->name }} - {{ $game->awayTeam->name }}
@endsection

@section('content')
    <livewire:partido :id="$game->id"/>
    @section('scripts', '@livewireScripts')

@endsection
