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
           
            <a href="{{url('dashboard/'.Auth::User()->id)}}"><i class="fa fa-paper-plane-o" aria-hidden="true" id="home-btn" name="home"></i></a>
            
            <i class="fa fa-clone btn" aria-hidden="true" id="myboards-btn" name="My Boards"></i>
            
            <i class="fa fa-info-circle btn" aria-hidden="true" id="info-btn" name="Board info"></i>
            
            <i class="fa fa-plus-square-o btn" aria-hidden="true" id="newboard-btn" name="New Board"></i>
            
            <i class="fa fa-cog btn" aria-hidden="true" id="settings-btn" name="Settings"></i>
            
           @if(Auth::User()->id !== $board->user_id)
               
            <i class="fa fa-heart btn" aria-hidden="true" id="follow-btn" name="Follow"></i>
               
           
           @endif
            
            
         
           
           
            
        </div>
        
        
        <div class="icons" id="bottom">
            <i class="fa fa-user btn" aria-hidden="true" id="profile-btn" name="Profile"></i>
            
            <a href="{{url('logout')}}"><i class="fa fa-sign-out btn" aria-hidden="true" name="logout"></i></a>
            
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
    
    <div id="settings" class="slideout">
        <ul id="accordion">
           
           @if(Auth::User()->id !== $board->user_id)
           
            <li>
                <h2>Share this board</h2>
                <div>
                   <br>
                   
                      <i class="fa fa-facebook-square" aria-hidden="true">

                          <a href=""></a>

                       </i>


                      <i class="fa fa-twitter" aria-hidden="true">

                        <a href=""></a>

                      </i>


                      <i class="fa fa-google-plus" aria-hidden="true">

                            <a href=""></a>

                      </i>
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
                   
                    <div id="dropzonebox">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </div>

                </div>
                
                
                <div class="clear"></div>
            </li>
            
            
            <li>
                
                <h2>Edit Board Name</h2>
                <br>
                {!! Form::open(['url' => 'board/'.$board->id.'/update', 'method' => 'PUT']) !!}
                    {{Form::text('name', $board->name, ['class' => 'editInput'])}}
                    {{Form::submit('Save')}}
                {!! Form::close() !!}
                

            </li>
            
            
            <li>
                
                <h2>Edit Board description</h2>
                <br>
                {!! Form::open(['url' => 'board/'.$board->id.'/update', 'method' => 'PUT']) !!}
                    {{Form::textarea('description', $board->description, ['class' => 'editInput'])}}
                    {{Form::submit('Save')}}
                {!! Form::close() !!}
                
                

            </li>
           
            
             <li>
                <h2>Share this board</h2>
                <div>
                   <br>
                   
                      <i class="fa fa-facebook-square" aria-hidden="true">

                          <a href=""></a>

                       </i>


                      <i class="fa fa-twitter" aria-hidden="true">

                        <a href=""></a>

                      </i>


                      <i class="fa fa-google-plus" aria-hidden="true">

                            <a href=""></a>

                      </i>
                </div>
            </li>
            
            
            
            <li>
                <h2>Clear all notes</h2>
                <br>
                <a href="{{url('board/'.$board->id.'/clear')}}"><i class="fa fa-trash-o" aria-hidden="true"></i> Clear board contents</a>
                
            </li>
            
            <li>
                <h2>Delete Board</h2>
                <br>
                <a href="{{url('board/'.$board->id.'/delete')}}"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete board</a>
                
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
    <script type="text/javascript" src="{{asset('js/dropzone.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>