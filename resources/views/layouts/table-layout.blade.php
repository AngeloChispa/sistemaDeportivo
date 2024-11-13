@extends('layouts.table')

@section('table-header')
    <tr class="text-center">
        @foreach ($headers as $header)
            <th class="p-4 text-gray-400">{{ $header }}</th>
        @endforeach
        <th class="p-4 text-gray-400">actions</th>
    </tr>
@endsection

@section('table-rows')

@endsection
