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
   <form action="{{route('Examen.update', $Examen->id)}}" method="POST"  style="margin-left:35%;margin-top:70px">
    <div class="form-row">
        <div class="form-group col-md-6"> 
    @csrf
        </div>
    @method('PUT')

        <div class="form-group col-md-6"> 
    id :<input type="text" name="id" value="{{$Examen->id}}" class="form-control">
        </div>
      
        <div class="form-group col-md-6"> 
    Date : <input type="text" name="date" value="{{$Examen->date}}" class="form-control">
        </div>
        <div class="form-group col-md-6"> 
            <label for="module id">module id:</label>
            <select name="module_id"  class="form-control" >
                <option value="choose an id" aria-readonly="false">choose an id</option>
                @foreach ($module as $md)
                    <option value="{{ $md->id }}">{{ $md->id }}</option>
                @endforeach
            </select>
                </div><br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form> 
    </body>
    </html>