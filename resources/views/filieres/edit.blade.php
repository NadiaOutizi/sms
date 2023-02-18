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
    <form action="{{route('filiere.update', $filiere->id)}}" method="POST" style="margin-left:35%;margin-top:70px">
        <div class="form-row">
            <div class="form-group col-md-6">   
            @csrf
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">  
        @method('PUT')
        id :<input type="text" name="id" value="{{$filiere->id}}"  class="form-control"><br>
        Libelle_Filliere : <input type="text" name="Libelle_Filliere" value="{{$filiere->Libelle_Filliere}}"class="form-control"><br><br>
       <br>
        <button type="submit"class="btn btn-primary">Update</button>
                </div></div></div>
    </form> 
    
</body>
</html>
