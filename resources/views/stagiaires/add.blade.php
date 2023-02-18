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
    <br><br><br>
    <h3 class="text-center ">Ajouter Stagiaire</h3>
    <form method="POST" action={{route('stagiaire.store')}} enctype="multipart/form-data" style="margin-left:35%;margin-top:50px" >
        @csrf
<div class="form-row">
        <div class="form-group col-md-6"> 
  <label>id :</label>  <input type="number" name="id" class="form-control">
            </div>
        <div class="form-group col-md-6"> 
           <label >nom :</label> <input type="text" name="nom" class="form-control">
        </div>
        <div class="form-group col-md-6"> 
            <label >prenom :</label><input type="text" name="prenom" class="form-control">
        </div>
        <div class="form-group col-md-6"> 
            <label >genre :</label><input type="text" name="genre" class="form-control">
        </div>
        <div class="form-group col-md-6"> 
            <label >adresse :</label><input type="adresse" name="adresse" class="form-control">
        </div>
        <div class="form-group col-md-6"> 
            <label >age :</label><input type="number" name="age" class="form-control">
        </div>
        <div class="form-group col-md-6"> 
            <label >telephone :</label><input type="telephone" name="telephone" class="form-control">
        </div>
        <div class="form-group col-md-6"> 
            <label>Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group col-md-6">
            <label>groupes_id</label> 
            <select name="groupes_id"  class="form-control" >
               <option value="choose an id" aria-readonly="false">choose an id</option>
               @foreach ($groupes as $groupes)
                   <option value="{{ $groupes->id }}">{{ $groupes->id }}</option>
               @endforeach
           </select>
       
           </div><br/>

    <input type="submit" value="add Stagiaire"class="btn btn-primary"/>
</div>
    </form>
</body>
