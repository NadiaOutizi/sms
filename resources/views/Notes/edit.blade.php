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
  
<form action="{{route('Notes.update', $note->id)}}" method="POST" enctype="multipart/form-data"style="margin-left:35%;margin-top:70px">
    <div class="form-row">
        <div class="form-group col-md-6">
    @csrf
    @method('PUT')
    <div class="form-group">
<label for="id">id</label><input type="number" name="id" value="{{$note->id}}"class="form-control">
    </div>
    <div class="form-group">
        <label for="stagiaire_id">stagiaire_id</label>
        <select name="stagiaire_id"  class="form-control" >
            <option value="choose an id" aria-readonly="false">choose an id</option>
            @foreach ($stagiaire as $stg)
                <option value="{{ $stg->id }}">{{ $stg->id }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="examen_id">examen_id</label>
        <select name="examen_id"  class="form-control" >
            <option value="choose an id" aria-readonly="false">choose an id</option>
            @foreach ($examen as $exo)
                <option value="{{ $exo->id }}">{{ $exo->id }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="note">note</label>
        <input type="number" name="note" value="{{$note->note}}"class="form-control">
    </div><br>
    <button type="submit" class="btn btn-primary">Modifier</button>
</div>
</div>
</form>
</body>
</html>