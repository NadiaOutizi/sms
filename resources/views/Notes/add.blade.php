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
    <h3 class="text-center ">Ajouter Note</h3>
    <form method="POST" action={{route('Notes.store')}} enctype="multipart/form-data" style="margin-left:35%;margin-top:50px" >
        @csrf
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="id">id</label>
        <input type="number" name="id"  class="form-control">
    </div>
        <div class="form-group col-md-6">
            
            <label>stagiaire_id</label> 
            <select name="stagiaire_id"  class="form-control" >
               <option value="choose an id" aria-readonly="false">choose an id</option>
               @foreach ($stagiaire as $stg)
                   <option value="{{ $stg->id }}">{{ $stg->id }}</option>
               @endforeach
           </select>
       
           </div> 
           <div class="form-group col-md-6">
            <label>examen_id</label> 
            <select name="examen_id"  class="form-control" >
               <option value="choose an id" aria-readonly="false">choose an id</option>
               @foreach ($examen as $exo)
                   <option value="{{ $exo->id }}">{{ $exo->id }}</option>
               @endforeach
           </select>
       
           </div>
           <div class="form-group col-md-6">
      <label for="note">note</label>
      <input type="number" name="note" class="form-control">
           </div>
</div>
</div>
<br><br>
<input type="submit" value="add Note"class="btn btn-primary"/>
    </form>
</body>
</html>