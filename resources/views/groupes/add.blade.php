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
    <h3 class="text-center ">Ajouter Groupe</h3>
    <form method="POST" action={{route('groupe.store')}} style="margin-left:35%;margin-top:70px" >
       
        <div class="form-row">
            <div class="form-group col-md-6">   
            @csrf
            </div>
    <div class="form-group col-md-6">
                
    <label>id : </label> <input type="number" name="id" class="form-control">
    </div>
    <div class="form-group col-md-6">
    <label>Intitule : </label> <input type="text" name="intitule" class="form-control">
    </div>
    <div class="form-group col-md-6">
    <label>Annee : </label><input type="text" name="Annee" class="form-control">
    </div><br>
    <div class="form-group col-md-6">
     <label>filieres_id</label> 
     <select name="filieres_id"  class="form-control" >
        <option value="choose an id" >choose an id</option>
        @foreach ($filieres as $filiere)
            <option value="{{ $filiere->id }}">{{ $filiere->id }}</option>
        @endforeach
    </select>

    </div><br/>
    <input type="submit" value="add Groupe" class="btn btn-primary"/>
    </form>  
</body>
</html>
