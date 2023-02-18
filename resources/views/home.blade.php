@vite(['resources/js/app.js'])
@extends('layouts.app')

@section('content')

<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 250px;height:92vh;position:relative;bottom:24px;">
  
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{url('MainPage')}}" class="nav-link active  m-2 " aria-current="page">
           <img src="images/home.png" width="40px" height="30px"  style="margin-right: 20px" >
         
          Home
        </a>
      </li>
      <li>
        <a href="{{url('stagiaire')}}" class="nav-link text-white  m-2 ">
          <img src="images/student.png" width="40px" height="30px"  style="margin-right: 20px" > 
          {{__('message.Students')}}
        </a>
      </li>
      <li>
        <a href="{{url('groupe')}}" class="nav-link text-white  m-2 ">
          <img src="images/groupes.png" width="40px" height="25px"  style="margin-right: 20px" >
          {{__('message.Groups')}}
        </a>
      </li>
      
      <li>
        <a href="{{url('filiere')}}" class="nav-link text-white  m-2">
          <img src="images/sector.png" width="40px" height="30px"  style="margin-right: 20px" >
          {{__('message.Sector')}}
        </a>
      </li>
      <li> 
        <a href="{{url('Examen')}}" class="nav-link text-white  m-2 ">
          <img src="images/exams.png" width="40px" height="30px"  style="margin-right: 20px" >
          {{__('message.Tests')}}
        </a>
      </li>
      <li> 
        <a href="{{url('Notes')}}" class="nav-link text-white  m-2 ">
          <img src="images/grade.png" width="40px" height="30px"  style="margin-right: 20px" >
          {{__('message.Grades')}}
        </a>
      </li>
      <li> 
        <a href="{{url('Module')}}" class="nav-link text-white  ">
          <img src="images/module.png" width="40px" height="40px"  style="margin-right: 20px" >
         Module
        </a>
      </li>
    
    </ul>
    <hr>
   
</div>

@endsection
