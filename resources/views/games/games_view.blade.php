@extends('layouts.admin_view')

@section('title', 'Games table')
@section('styles', '@livewireStyles')

@section('content')
    @component('_components.table')
        
    @endcomponent

    @section('scripts')
        @include('layouts._partials.swal')
    @endsection
@endsection
