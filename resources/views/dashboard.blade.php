<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/avatar.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
    
<header class="sidenav">
    <nav class="navicons">
       <div class="icons" id="top">
           
            <a href="{{url('/')}}"><i class="fa fa-paper-plane-o" aria-hidden="true" id="home-btn" name="home"></i></a>
            
            <i class="fa fa-plus-square-o btn" aria-hidden="true" id="newboard-btn" name="New Board"></i>
            
        </div>
        
        
        <div class="icons" id="bottom">
            
            <a href="{{url('logout')}}"><i class="fa fa-sign-out btn" aria-hidden="true" name="logout"></i></a>
            
        </div>
    </nav>
</header>
    

   
<section class="modal">
       <div id="modalbox" class="">
            <h2>Create a new board</h2>
            {!! Form::open(['url' => 'boards', 'method' => 'POST']) !!}
                {{form::text('name', null, ['required' => 'required', 'placeholder' => 'Board name'])}}
                
                {{form::textarea('description', null, ['required' => 'required', 'placeholder' => 'What will this board be about?'])}}
                
            <br>
                {{form::submit('Create')}}
         {!! Form::close() !!}

        </div>    
       
</section>    

<section class="main" id="dashboard">
    <div class="container">
     
      <section class="sidebar">
          
           <div class="banner avatar-upload" data-id="{{Auth::User()->id}}">
               
                <img src="{{asset('images/avatars/'.Auth::User()->avatar)}}">
                
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
            
            @if(Auth::User()->admin)
                <h3>User's boards</h3>

               <div class="myboardslinks">
               
               @if(App\Models\Board::all()->count() == 0)
               
               <span>There are no boards</span>
               
               @else
               
                @foreach(App\Models\Board::all() as $board)

                   <div class="boardslink">
                        <div class="boardoverlay">
                            <a href="{{url('board/'.$board->id.'/delete')}}">
                                <i class="fa fa-trash-o" aria-hidden="true">
                                </i>
                            </a>
                            
                        </div>
                        <img src="{{asset('images/backgrounds/'.$board->background)}}" alt="">
                        
                        <br>
                        <a href="{{url('board/'.$board->id)}}">{{$board->name}}</a>
                    </div>

                @endforeach  
                
                 
                @endif 
                </div>
                
            
            @else
             
              <h3>My boards</h3>

               <div class="myboardslinks">
               
               @if(Auth::User()->boards()->count() == 0)
               
               <span>You don't have any boards created yet!</span>
               
               @else
               
                @foreach(Auth::User()->boards as $board)

                   <div class="boardslink">
                        <div class="boardoverlay">
                            <a href="{{url('board/'.$board->id.'/delete')}}">
                                <i class="fa fa-trash-o" aria-hidden="true">
                                </i>
                            </a>
                            
                        </div>
                        <img src="{{asset('images/backgrounds/'.$board->background)}}" alt="">
                        
                        <br>
                        <a href="{{url('board/'.$board->id)}}">{{$board->name}}</a>
                    </div>

                @endforeach  
                
                 
                @endif 
                </div>
                

        <!--        <a href="">View all</a>-->
             
             <div class="bar"></div>

             <h3>Following boards</h3>

               <div class="followingboardslinks"> 
               
               @if(Auth::User()->boards()->count() == 0)
               
               <span>You aren't following any boards!</span>
               
               @else
                @foreach(Auth::User()->boards as $board)

                   <div class="boardslink">
                       <div class="boardoverlay">
                           <i class="fa fa-trash-o" aria-hidden="true">
                               <a href="{{url('board/'.$board->id.'/delete')}}"></a>
                           </i>
                       </div>
                        <img src="{{asset('images/backgrounds/'.$board->background)}}" alt="">
                        <br>
                        <a href="{{url('board/'.$board->id)}}">{{$board->name}}</a>
                    </div>

                @endforeach   
                 
                @endif 
                
            @endif
                </div>
                
<!--
                
            <footer>
              <ul class="social">
                  <li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
                  <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                  <li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
              </ul>
          
          </footer>
-->
          
             
         </div>
         
         
      </section>
      
      

    </div>
</section>

<div id="public" class="hidden">{{url('/')}}</div>
<div id="token" class="hidden">{{csrf_token()}}</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/vue/1.0.21/vue.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>
