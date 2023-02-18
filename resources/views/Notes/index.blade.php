<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body style="overflow-y:hidden">
    @include('home')
        
    <div class="container" >
       
                        <div class="row justify-content-center p-relative " style="position: relative;bottom:620px;left:70px">
                      
                            <div class="col-md-8">
                <form method="GET" action="{{ route('Notes.index') }}">
                    @csrf
                    <div class="form-group">
                        <label for="grade-filter">Filter by grade:</label>
                        <select id="grade-filter" name="grade">
                            <option value="">All</option>
                            <option value="lt_10">Less than 10</option>
                            <option value="gte_10">Greater than or equal to 10</option>
                        </select>
                        <button type="submit" class="btn btn-outline-dark my-2 my-sm-0">Filter</button>
                    </div>
                </form>
               
            <table class="table text-center">
                <tr>
                <th>id </th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>examen id </th>
                 <th>stagiaire_id </th>
                 <th>note</th>
                 <th >Actions</th>
                </tr>
                @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->stagiaire->nom }}</td>
                    <td>{{ $note->stagiaire->prenom }}</td>
                    <td>{{ $note->examen_id }}</td>
                    <td>{{ $note->stagiaire_id }}</td>
                    <td>{{ $note->note }}</td>
                    <td style="min-width: 200px;">
                        <form action="{{ route('Notes.destroy', $note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('Notes.edit', $note->id) }}" class="btn btn-primary">{{__('message.edit')}}</a>
                            <button type="submit" class="btn btn-danger d-inline" onclick="return confirm('Are you sure you want to delete this note?')">{{__('message.delete')}}</button>
                        </form>
                    </td>
                    {{-- <td>
                        <form method="POST" action="{{ route('Notes.destroy', ['Note'=>$note->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">{{__('message.delete')}}</button>
                        </form>
                    </td> --}}
                    {{-- <td>
                        <button type="submit" class="bg-primary border-primary rounded">
                            <a href="{{route("Notes.edit",$note->id)}}" class="text-white text-decoration-none">{{__('message.edit')}}</a>
                        </button>
                    </td> --}}
                </tr>
                @endforeach
            </table>
            <p class="text-center">
 
                <a  class="btn btn-primary" style="margin-top:20px" href="{{ route('Notes.create') }}" title="Créer une note" >{{__('message.ajouter')}}</a>
              
            </p>
            {{ $notes->links() }}
            </div>
        </div>
     </div>
  
</body>
</html>
