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
   <form action="{{route('groupe.update', $group->id)}}" method="POST"  style="margin-left:35%;margin-top:70px">
    <div class="form-row">
        <div class="form-group col-md-6"> 
    @csrf
        </div>
    @method('PUT')

        <div class="form-group col-md-6"> 
    id :<input type="text" name="id" value="{{$group->id}}" class="form-control">
        </div>
      
        <div class="form-group col-md-6"> 
    intitule : <input type="text" name="intitule" value="{{$group->intitule}}" class="form-control">
        </div>

        <div class="form-group col-md-6"> 
    Annee : <input type="text" name="Annee" value="{{$group->Annee}}" class="form-control">
        </div>

        {{-- <div class="form-group col-md-6"> 
    Stagiaire_id : <input type="text" name="stagiaire_id"value="{{$group->stagiaire_id}}" class="form-control" >
        </div><br/> --}}
    <button type="submit" class="btn btn-primary">Update</button>
</form> 
</body>
</html>

