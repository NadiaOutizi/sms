<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body style="overflow:hidden;">  
      @include('home')

    
        <div class="container" style="position:relative;bottom:600px;left:200px ;font-weight:bold;font-size:medium;font-family: 'Times New Roman', Times, serif">
            <div class="row no-gutters justify-content-center" > 
                <div class="col-sm-4 mb-2">
                  <div class="card bg-info" style="width: 14rem;">
                    <a href="{{url('stagiaire')}}">
                        <img src="images/students.jpg" height='240px' width='400px'class="card-img-top bg-primary" alt="...">
                    </a>
                    
                    <div class="card-body">
                      <p class="card-text text-light">{{__('message.parafirst')}} <span style="font-size:large">{{ $count }} </span> {{__('message.students')}}.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 mb-2">
                  <div class="card bg-primary" style="width: 14rem;">
                    <a href="{{url('groupe')}}">
                    <img src="images/groupes.jpg" height='240px' width='400px' class="card-img-top bg-primary" alt="...">
                    </a>
                    <div class="card-body">
                      <p class="card-text text-light">{{__('message.parafirst')}} <span style="font-size:large">{{ $groupe }}</span> {{__('message.groups')}} .</p>
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-4 mb-2">
                    <div class="card " style="width: 14rem;background:blue">
                        <a href="{{url('Notes')}}">
                      <img src="images/fs.jpg" height='220px' width='400px'  class="card-img-top bg-primary" alt="...">
                        </a>
                      <div class="card-body">
                        <p class="card-text text-light">{{__('message.parafirst')}} <span style="font-size:large">{{ $failedPeople }}</span> {{__('message.failed')}} <span style="font-size:large">{{$succededPeople}}</span> {{__('message.succeded')}} </p>
                      </div>
                    </div>
                  </div>
                
            </div>
        </div>

   
</body>
</html>