<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/opentip.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/avatar.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>


<header class="sidenav">
    <nav class="navicons">
        <div class="icons" id="top">
           
            <a href="{{url('dashboard/'.Auth::User()->id)}}"><i class="fa fa-tachometer" aria-hidden="true" id="dashboard-btn" name="dashboard" data-ot="My Dashboard" data-ot-style="glass" data-ot-tipJoint="left"></i></a>
            
            <i class="fa fa-clone btn" aria-hidden="true" id="myboards-btn" name="My Boards" data-ot="My Boards" data-ot-style="glass" data-ot-tipJoint="left"></i>
            
            <i class="fa fa-info-circle btn" aria-hidden="true" id="info-btn" name="Board info" data-ot="Board Information" data-ot-style="glass" data-ot-tipJoint="left"></i>
            
            <i class="fa fa-plus-square-o btn" aria-hidden="true" id="newboard-btn" name="New Board" data-ot="New Board" data-ot-style="glass" data-ot-tipJoint="left"></i>
            
            <i class="fa fa-cog btn" aria-hidden="true" id="settings-btn" name="Settings" data-ot="Settings" data-ot-style="glass" data-ot-tipJoint="left"></i>
            
           @if(Auth::User()->id !== $board->user_id)
               
            <i class="fa fa-heart btn" aria-hidden="true" id="follow-btn" name="Follow" data-ot="Follow this Board" data-ot-style="glass" data-ot-tipJoint="left"></i>
               
           
           @endif
            
            
         
           
           
            
        </div>
        
        
        <div class="icons" id="bottom">
            <i class="fa fa-user btn" aria-hidden="true" id="profile-btn" name="Profile" data-ot="Profile" data-ot-style="glass" data-ot-joint="left"></i>
            
            <a href="{{url('logout')}}"><i class="fa fa-sign-out btn" aria-hidden="true" name="logout" data-ot="Logout" data-ot-style="glass" data-ot-tipJoint="left"></i></a>
            
        </div>
    
    
    </nav>
</header>
    
<section class="slideouts">
    
    

    <div id="myboards" class="slideout">
        <ul>
           <h2 class="subtitle">My Boards</h2>
            @foreach(Auth::User()->boards as $myboard)
            
            <li>
                <a href="{{url('board/'.$myboard->id)}}">{{$myboard->name}}</a>
                <h2>Created by: {{Auth::User()->username}}</h2>
                <p></p>
                <p>{{$myboard->description}}</p>
            </li>
            
            @endforeach
            
             @foreach(Auth::User()->boards as $myboard)
            
            <li>
                <a href="{{url('board/'.$myboard->id)}}">{{$myboard->name}}</a>
                <h2>Created by: Others</h2>
                <p></p>
                <p>{{$myboard->description}}</p>
            </li>
            
            @endforeach
            
        </ul>
    </div>
    
    <div id="info" class="slideout">
        <ul>
            <li>
                
                <h2>Created By</h2>
                <p>{{$board->user->username}}</p>
                

            </li>
            
            <li>
                
                <h2>Board description</h2>
                <p>{{$board->description}}</p>
                

            </li>

            <li>
                <h2>Fellow borders</h2>
                @foreach(App\Models\User::all() as $user)

                <div class="boarders">

                    <img src="{{asset('images/avatars/'.$user->avatar)}}" alt="">
                    <p>{{$user->username}}</p>

                </div>
                
                @endforeach

                <div class="clear"></div>

            </li>

            <li>

                <h2>Total notes</h2>
                <p>{{$board->notes->count()}}</p>

            </li>

            <li>

                <h2>Created at</h2>
                <p>{{$board->created_at}}</p>

            </li>

        </ul>
    </div>
    
    <div id="settings" class="slideout scrollbar-green">
        <ul id="accordion">
           
           @if(Auth::User()->id !== $board->user_id && Auth::User()->admin == 1)
           
                 
            <li>
                <h2>Clear all notes</h2>
                <br>
                <div class="trashicon">
                    <a href="{{url('board/'.$board->id.'/clear')}}">
                       <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>

            </li>

            <li>
                <h2>Delete Board</h2>
                <br>

                <div class="trashicon">
                    <a href="{{url('board/'.$board->id.'/delete')}}">
                       <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>

            </li>
            
            
            @elseif(Auth::User()->id !== $board->user_id)
            
            <li>
                <h2>Share this board</h2>
               <div class="social">
                   
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class="facebook">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>

                    <a href="https://twitter.com/home?status={{Request::url()}}" class="twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>

                    <a href="https://plus.google.com/share?url={{Request::url()}}" class="google-plus">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
               </div>
                
            </li>
            
            
            
            @else
            
            <li>
                <h2>Board Background</h2>
                <div class="bgoptions"><!--Flex this -->
                   <br>
                   
               @foreach(App\Models\Background::all() as $background)
                  
                   
                    @if($board->background == $background->filename)
                        <img src="{{asset('images/backgrounds/'.$background->filename)}}" class="bgcurrent" data-file="{{$background->filename}}">


                    @else 

                        <img src="{{asset('images/backgrounds/'.$background->filename)}}" class="" data-file="{{$background->filename}}">

                    @endif
                @endforeach
<!--
                   
                    <div id="dropzonebox">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </div>
-->

                </div>
                
                
                <div class="clear"></div>
            </li>
            
            
            <li>
                
                <h2>Edit Board Name</h2>
                <i id="boardnameEdit" class="fa fa-pencil" aria-hidden="true"></i>
<!--                <br>-->
                
                <p id="boardnameTarget" class="editInput">{{$board->name}}</p>
                

            </li>
            
            
            <li>
                
                <h2>Edit Board description</h2>
                <i id="boarddesEdit" class="fa fa-pencil" aria-hidden="true"></i>
<!--                <br>-->
                
                <p id="boarddesTarget" class="editInput">{{$board->description}}</p>
                
                

            </li>
           
            
             <li>
               
                <h2>Share this board</h2>
                <div class="social">
                    
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class="facebook">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>

                   <a href="https://twitter.com/home?status={{Request::url()}}" class="twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>

                    <a href="https://plus.google.com/share?url={{Request::url()}}" class="google-plus">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a> 
                
                    
                    
                </div>
                
            </li>
            
            
            <li>
                <h2>Clear all notes</h2>
                <br>
                <div class="trashicon">
                    <a href="{{url('board/'.$board->id.'/clear')}}">
                       <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>

            </li>

            <li>
                <h2>Delete Board</h2>
                <br>

                <div class="trashicon">
                    <a href="{{url('board/'.$board->id.'/delete')}}">
                       <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>

            </li>
            
            @endif
        </ul>
    </div>
    
    <div id="profile" class="slideout">
        <div class="banner">
           <div class="avatar-upload" data-id="{{Auth::User()->id}}">
               
                <img src="{{asset('images/avatars/'.Auth::User()->avatar)}}" alt="">
               
            </div>
           
        </div>
        <div class="details">
            <ul>
                <li>
                    <h2>Username</h2> 
                    <i class="fa fa-pencil edit" aria-hidden="true"></i> 
                    <p>{{Auth::User()->username}}</p>             
                </li>
                
                <li>
                    <h2>Name</h2>
                    <i class="fa fa-pencil edit" aria-hidden="true"></i>
                    <p>{{Auth::User()->name}}</p>
                </li>
                
                <li>
                    <h2>Email</h2>
                    <i class="fa fa-pencil edit" aria-hidden="true"></i>
                    <p>{{Auth::User()->email}}</p>
                </li>
                
                
            </ul>
        </div>
        
        
    </div>



</section>
  
      @yield('content')
   
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
    
  
    
    
<div id="public" class="hidden">{{url('/')}}</div>
<div id="token" class="hidden">{{csrf_token()}}</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.noty.packaged.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/opentip-jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dropzone.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>