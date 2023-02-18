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
    
<div class="container" >
<div class="card">
<div class="row justify-content-center p-relative " style="position: relative;bottom:620px;left:70px">
<div class="col-md-8">
    
    <table class="table text-center " >
        <tr>
            <th>id</th>
            <th>Libelle Module</th>
            <th>Actions</th>
        </tr>
        @foreach ($Module as $module)
        <tr>
            <td>{{$module->id}}</td>
            <td>{{$module->Libelle_module}}</td>
            <td>
                <form method="POST" action="{{route("Module.destroy",['Module' => $module->id] )}}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">{{__('message.delete')}}</button>
                </form>
            </td>
            <td>
            
            
                    <button type="submit" class="bg-primary border-primary rounded">
                        <a href={{route("Module.edit",$module->id)}} class="text-white text-decoration-none">{{__('message.edit')}}</a>
                    </button>
                 
                 
            </td>
        </tr>  
        @endforeach
    </table>
    <p class="text-center" >
         
        <a  class="btn btn-primary"  href="{{ route('Module.create') }}" title="Créer un module" >Créer un nouveau module</a>
      
       {{$Module->links()}}
    </p>
   
</div>
</div>
</div>
</div>

              
</body>
</html>