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
  
<form action="{{route('Module.update', $module->id)}}" method="POST" enctype="multipart/form-data"style="margin-left:35%;margin-top:70px">
    <div class="form-row">
        <div class="form-group col-md-6">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="id">id</label><input type="number" name="id" value="{{$module->id}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="Libelle_module">Libelle_module</label>
        <input type="text" name="Libelle_module" value="{{$module->Libelle_module}}" class="form-control"><br>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </div>
</form>
</body>
</html>