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
    <h3 class="text-center">Ajouter Filiere</h3>
    <form method="POST" action={{route('filiere.store')}} style="margin-left:35%;margin-top:70px">
        <div class="form-row">
            <div class="form-group col-md-6">   
            @csrf
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">   
                 <label for="id">id</label><input type="number" name="id" class="form-control">
                </div>
                <div class="form-group col-md-6">   
                 <label for="Libelle_Filliere">Libelle_Filliere</label><input type="text" name="Libelle_Filliere" class="form-control">
                </div><br>
   
                <input type="submit" value="add Filiere" class="btn btn-primary"/>
        
    </form>
</body>
</html>