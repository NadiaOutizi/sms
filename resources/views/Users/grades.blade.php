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
        <h1>Grades</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Note</th>
                    <th>Stagiaire</th>
                    <th>Group</th>
                    <th>Filiere</th>
                    <th>Module</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->note }}</td>
                    <td>{{ $note->nom_stagiaire }} {{ $note->prenom_stagiaire }}</td>
                   
                    <td>{{ $note->intitule_groupe }}</td>
                    <td>{{ $note->Libelle_Filliere }}</td>
                    <td>{{ $note->Libelle_module }}</td>
                    @if($note->note >= 10)
                    <td>Status: <span style="color:blue;font-size:larger">Succeeded</span> </td>
                @else
                    <td>Status: <span style="color:red;font-size:larger">Failed</span></td>
                @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection
    </div>
</body>
</html>