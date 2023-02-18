<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite(['resources/js/app.js'])
  
</head>
<body style="overflow-y:hidden">
 
    @include('home')
    <div class="container " >
        <div class="row justify-content-center " style="position: relative;bottom:600px;left:70px">
            <div class="col-md-8">
                <div class="card">
    <table  class="table text-center " style="width: 100%;">
<tr>
    <th>id</th>
    <th>Intitule</th>
    <th>Annee</th>
    <th>Code Filiere</th>
    <th>Action</th>
</tr>
        @foreach ($groupe as $gr)
    <tr>
        <td>
           {{$gr->id}}
        </td>
      <td>
           {{$gr->intitule}}
      </td>
       <td>
           {{$gr->Annee}}
       </td>
       <td>
           {{$gr->filiere_id}}
       </td>
<td>
    <form method="POST" action="{{route("groupe.destroy", $gr->id)}}">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">{{__('message.delete')}}</button>
    </form>
  
</td>
       
      <td>
        <button type="submit" class="bg-primary border-primary rounded">
            <a href={{route("groupe.edit",$gr->id)}} class="text-white text-decoration-none">{{__('message.edit')}}</a>
        </button>
     
      </td>
        
           
  
@endforeach
    </tr>
   
    </table>
   
<p class="text-center">
 
    <a  class="btn btn-primary" style="margin-top:20px" href="{{ route('groupe.create') }}" title="Créer un groupe" >{{__('message.ajouter')}}</a>
</p>
{{$groupe->Links()}}
</div>
</div>
</div>
</div>
</body>
</html>
