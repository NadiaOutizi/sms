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
  
<form action="{{route('stagiaire.update', $stagiaire->id)}}" method="POST" enctype="multipart/form-data"style="margin-left:35%;margin-top:70px">
    <div class="form-row">
        <div class="form-group col-md-6">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text" name="nom" value="{{$stagiaire->nom}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="prenom">Prénom:</label>
      <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $stagiaire->prenom }}">
    </div>
    <div class="form-group">
      <label for="genre">Genre:</label>
      <input type="text" name="genre" class="form-control" value="{{$stagiaire->genre}}" >
    </div>
    <div class="form-group">
      <label for="adresse">Adresse:</label>
      <input type="text" name="adresse" class="form-control"value="{{$stagiaire->adresse}}" >
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" name="age" class="form-control"value="{{$stagiaire->age}}" >
    </div>
    <div class="form-group">
      <label for="tele">Telephone:</label>
      <input type="text" name="telephone" class="form-control" value="{{$stagiaire->telephone}}" >
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div><br>
    <button type="submit" class="btn btn-primary">Modifier</button>
        </div></div>
  </form>
</body>
</html>