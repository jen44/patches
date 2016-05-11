@extends('withnav')

@section('content')


<section class="main" id="dashboard">
    <div class="container">
     
      <section class="sidebar">
          
           <div class="banner">
               
                <img src="{{asset('images/avatars/'.Auth::User()->avatar)}}" alt="">
                
            </div>
            
            <div class="details">
               
                <ul>
                    <li>
                        <h2>Username</h2> 
                        <p>{{Auth::User()->username}}</p> 
                        <i class="fa fa-pencil" aria-hidden="true"></i>             
                    </li>

                    <li>
                        <h2>Name</h2>
                        <p>{{Auth::User()->name}}</p>
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </li>

                    <li>
                        <h2>Email</h2>
                        <p>{{Auth::User()->email}}</p>
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </li>
                </ul>
                
            </div>
          
      </section>
      
      
      <section class="maincontent">
        
        <h1>Dashboard</h1>
         
         <div class="column">
             
              <h3>My boards</h3>

               <div class="myboardslinks">
                @foreach(Auth::User()->boards as $board)

                   <div class="boardslink">
                        <img src="{{asset('images/backgrounds/'.$board->background)}}" alt="">
                        <a href="{{url('board/'.$board->id)}}">{{$board->name}}</a>
                    </div>

                @endforeach   
                </div>

        <!--        <a href="">View all</a>-->
             
             <div class="bar"></div>

             <h3>Following boards</h3>

               <div class="followingboardslinks">
                @foreach(Auth::User()->boards as $board)

                   <div class="boardslink">
                        <img src="{{asset('images/backgrounds/'.$board->background)}}" alt="">
                        <a href="{{url('board/'.$board->id)}}">{{$board->name}}</a>
                    </div>

                @endforeach   
                </div>
             
         </div>
          
      </section>

    </div>
</section>


@stop