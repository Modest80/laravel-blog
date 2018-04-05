@extends('layouts.app_prof');

@section('content')
 <div class="container">
   <div class="row">
     <div class="col-sm-3">
       <div class="jumbotron">
       <p>
         <span class="label label-primary">
           Профессий 0
         </span>
       </p>
       </div>
     </div>
     <div class="col-sm-3">
       <div class="jumbotron">
       <p>
         <span class="label label-primary">
           Специализаций 0
         </span>
       </p>
       </div>
     </div>
     <div class="col-sm-3">
       <div class="jumbotron">
       <p>
         <span class="label label-primary">
           Участников 0
         </span>
       </p>
       </div>
     </div>
   </div>
   
   <div class="row">
     <div class="col-sm-6">
       <a class="btn btn-block btn-default" href="#">Создать профессию</a>
       <a class="list-group-item" href="#">
         <h4 class="list-group-item-heading">Профессия первая</h4>
         <p class="list-group-item-text">
           Количество участников 0
         </p>
       </a>
     </div>
     
     <div class="col-sm-6">
       <a class="btn btn-block btn-default" href="#">Создать специализацию</a>
       <a class="list-group-item" href="#">
         <h4 class="list-group-item-heading">Последняя специализация</h4>
         <p class="list-group-item-text">
           Специализация: 
         </p>
       </a>
     </div>
   </div>
   
 </div>
@endsection