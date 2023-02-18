<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Exams Passed</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Module</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($OldExams as $exam)
            <tr>
                <td>{{ $exam->id }}</td>
                <td>{{ $exam->Libelle_module }}</td>
                <td>{{ $exam->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <h3>New Exams</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Module</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($NewExams as $exam)
            <tr>
                <td>{{ $exam->id }}</td>
                <td>{{ $exam->Libelle_module }}</td>
                <td>{{ $exam->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</body>
</html>