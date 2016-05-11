@extends('nonav')

@section('content')


<section class="hero">
   <div class="container">
       
       <header>
           <ul>
              @if(Auth::check())
               <li><a href="{{url('dashboard/'.Auth::User()->id)}}">Dashboard</a></li>  
               <li><a href="{{url('logout')}}">Logout</a></li>            
              @else
               <li><a href="{{url('login')}}">Login</a></li>
               <li><a href="{{url('register')}}">Register</a></li>
              @endif
               
           </ul>
       </header>
       
        <div class="headingtext">
            <h1>Header</h1>
        </div>
    </div>
</section>


<section class="description">
  
  
   
    <div class="container">
        <div class="innertext">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</h3>
        </div>
    </div>
    
</section>


<section class="demo">
    <div class="container">
        <img src="" alt="">
    </div>
</section>


@stop