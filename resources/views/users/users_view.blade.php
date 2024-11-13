@extends('layouts.admin_view', ['headers'=>['id','name','lastname','date birth','phone','rol id','email','registration day']])

@section('title', 'Users table')
@section('name', 'Users Table')

@section('content')
    <p class="text-center">Users that are registered</p>
@endsection

@section('table-rows')
    <tr>
        <td>1</td>
        <td>Juan</td>
        <td>Alonzo Castillo</td>
        <td>19-12-1999</td>
        <td>8349815273</td>
        <td>1</td>
        <td>juan@ejemplo.com</td>
        <td>12-11-2024 19:22:30.567</td>
        <td class="flex">
            <a href="#" class="bg-blue-500 px-9 py-2 rounded hover:bg-blue-600 m-2">Edit</a>
            <a href="#" class="bg-red-500 px-9 py-2 rounded hover:bg-red-600 m-2">Delete</a>
        </td>    
    </tr>
@endsection  