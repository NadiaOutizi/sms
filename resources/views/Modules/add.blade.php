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
    <h3 class="text-center ">Ajouter Module</h3>
    <form method="POST" action={{route('Module.store')}} enctype="multipart/form-data" style="margin-left:35%;margin-top:50px" >
        @csrf
<div class="form-row">
    <div class="form-group col-md-6"> 
          <label for="id"></label><input type="number" name="id"class="form-control" >
    </div>
          <div class="form-group col-md-6"> 
          <label for="Libelle_module">Libelle_module</label>
          <input type="text" name="Libelle_module" id="Libelle_module"class="form-control">
          </div><br> 
          <input type="submit" value="add module"class="btn btn-primary"/>

</div>
</form>
</body>
</html>