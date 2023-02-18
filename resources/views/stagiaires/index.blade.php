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
                            
                                <form action="{{url('/searchstagiaire')}}" method="get" >
                                    <div class="input-group " style="position: relative;left:200px">
                                        <input class="input-group-text "name='query' type="search" placeholder="{{__('message.chercher')}}" aria-label="Search">
            
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">{{__('message.chercher')}}</button>
                                        </div> 
                            
                                   </form>
                                  
                                 
                        <div style="position:relative;right:100px;bottom:60px">
                            <form action="{{url('/chercher')}}" method="post">
                                @csrf
                                <select name="groupe_id" >
                                  @foreach ($groupes as $groupe)
                                    <option value="{{ $groupe->id }}" >{{ $groupe->intitule }}</option>
                                  @endforeach
                                </select>
                                <button type="submit"class="btn btn-outline-dark my-2 my-sm-0">Filter</button>
                              </form> 
                           </div>
          <table class="table text-center " >
    <tr>
        <th>id</th>  
        <th>Nom</th>  
        <th>Prenom</th>  
        <th>Genre</th>  
        <th>Adresse</th>  
        <th>Age</th>  
        <th>Telephone</th>  
        <th>groupe id</th>  
        <th>intitule</th>  
        <th>Image</th>  
        <th>Action</th> 
    </tr>
    @if(count($stagiaire)>0)
                 @foreach ($stagiaire as $stg)
                <tr>
    <td>
        {{$stg->id}}
    </td>
    <td>
        {{$stg->nom}}  
    </td>     
    <td>
        {{$stg->prenom}}
    </td>
    <td>
        {{$stg->genre}}
    </td>
    <td>
        {{$stg->adresse}}
    </td>
    <td>
        {{$stg->age}}
    </td>  
    <td>
        {{$stg->telephone}}
    </td> 
    <td>
        {{$stg->groupes_id}}
    </td> 
    <td>
        @foreach ($groupes as $g)
            @if ($g->id === $stg->groupes_id)
                {{ $g->intitule }}
            @endif
        @endforeach
    </td>
    <td>
        <img src="{{ asset('images/'.$stg->image) }}" class="card-img-top" alt="{{ $stg->nom }}">
    {{-- <img src="{{asset('storage/app/upload' . $stg->image) }}" alt="IMG"> --}}
    </td>    

    <td>
        <form method="POST" action="{{route("stagiaire.destroy", $stg->id)}}">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">{{__('message.delete')}}</button>
        </form>
    </td>
    <td>
    
    
            <button type="submit" class="bg-primary border-primary rounded">
                <a href={{route("stagiaire.edit",$stg->id)}} class="text-white text-decoration-none">{{__('message.edit')}}</a>
            </button>
         
         
    </td>
    
            </tr>
           
            </div>
    
        @endforeach
          </table>
          @else
          <p> no stagiaire found </p>
          
      @endif 
        <p class="text-center" >
         
            <a  class="btn btn-primary"  href="{{ route('stagiaire.create') }}" title="Créer un stagiaire" >{{__('message.ajouter')}}</a>
            {{-- <a href="{{Route('stagiaire.edit',['stagiaire'=>100])}}">page</a> --}}
           {{$stagiaire->appends($_GET)->links()}}
        </p>
        {{-- <x-title> --}}
       
    </div>
     </div>
    </div>
    </div>


   
</body>
</html>
