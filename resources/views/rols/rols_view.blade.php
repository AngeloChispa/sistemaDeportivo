@extends('layouts.admin_view', ['headers'=>['id','name','description']])

@section('title', 'Rols table')
@section('name', 'Rols Table')

@section('content')
    <p class="text-center">Rols that users can have</p>
@endsection

@section('table-rows')
    <tr>
        <td>1</td>
        <td>Coaches</td>
        <td>Responsible for teaching rules and techniques to the team, it has access to many tables</td>
        <td class="flex">
            <a href="#" class="bg-blue-500 px-9 py-2 rounded hover:bg-blue-600 m-2">Edit</a>
            <a href="#" class="bg-red-500 px-9 py-2 rounded hover:bg-red-600 m-2">Delete</a>
        </td>    
    </tr>
@endsection