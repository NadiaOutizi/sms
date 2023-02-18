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
    <h3 class="text-center ">Ajouter Examen</h3>
    <form method="POST" action={{route('Examen.store')}} style="margin-left:35%;margin-top:70px" >
       
        <div class="form-row">
            <div class="form-group col-md-6">   
            @csrf
            </div>
    <div class="form-group col-md-6">
                
    <label>id : </label> <input type="number" name="id" class="form-control">
    </div>
    <div class="form-group col-md-6">
    <label>Date : </label> <input type="date" name="date" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="module_id">module_id:</label>
        <select name="module_id"  class="form-control" >
            <option value="choose an id" aria-readonly="false">choose an id</option>
            @foreach ($module as $md)
                <option value="{{ $md->id }}">{{ $md->id }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <input type="submit" value="add Examen" class="btn btn-primary"/>
    </form>  
</body>
</html>
