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
                
                @if(Auth::User()->admin !== 1)
                
                <i class="fa fa-user btn" aria-hidden="true" id="profile-btn" name="Profile"></i>
                
                @endif

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
    
    @if(Auth::User()->admin !== 1)
    
    <section class="slideouts">
        <div class="slideout" id="profile">
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
    
    @endif 
    
    <section class="main" id="dashboard">
       
        <div class="container">
           
            <div class="columns">
               
            @if(Auth::User()->admin == false)<!-- if not admin -->
                
                <div class="column1" id="userBoards">
                   
           <h1>Dashboard</h1>
                   
                    <!-- My boards -->
                <h3>My boards</h3>
                    
                    @if(Auth::User()->boards()->count() == 0)
               
                        <span class="nothing">You don't have any boards created yet!</span>
               
                    @else
                    
                    <div class="boardslinkdiv">
               
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
                        
                    </div> 
                
                    @endif 
                    
                </div>
                
                
                <div class="column2" id="rightside">
                    <!-- Help / social -->
                    
                    <div class="logo">
                       <a href="{{url('/')}}" class="noselect">Note.</a>
                    </div>
                    
                    <img src="{{url('images/avatars/'.Auth::User()->avatar)}}" alt="">
                    <p>Welcome, <strong>{{Auth::User()->username}}</strong>!</p>
                    
                    
                    <div class="tipsdiv">
                       
                        <h3>Need help?</h3>
                    
                        <ul class="tips">
                            <li>Make a board by clicking on the '+' button on the navigation bar on the left of your screen!</li>

                            <li>You can create notes by double clicking on the board.</li>

                            <li>Double click on the note's title or content to edit it!</li>

                            <li>Don't like your note there anymore? Drag and drop it into the trash bin on the bottom right corner of your screen!</li>

                            <li>Follow someone else's board by clicking on the heart button.</li>
                        </ul>

                    </div>
                    
                    <div class="footer">
                        
                        <ul class="social">

                          <li>
                              <i class="fa fa-facebook-square" aria-hidden="true"></i>
                          </li>

                          <li>
                              <i class="fa fa-twitter" aria-hidden="true"></i>
                          </li>

                          <li>
                              <i class="fa fa-google-plus" aria-hidden="true"></i>
                          </li>

                        </ul>
                        
                        
                        <p class="copyright">Copyright &copy; <span>Note.</span> 2016</p>

                    </div>
                    
                </div>
                
                 <div class="column3" id="userFollowing">
                    <!-- Following boards -->
                    
                    <h3>Following</h3>
                   
                    @if(Auth::User()->boards()->count() == 0)
               
                        <span class="nothing">You are not following any board yet!</span>
               
                    @else
                    
                    <div class="boardslinkdiv">
               
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
                    
                    </div>
                
                    @endif 
                    
                </div>
                
                
                
            @else <!-- end of if not admin -->
                
                <div class="column1" id="adminBoards">
                   
                   <h1>Dashboard</h1>
                    <!-- Users boards -->
                    <h3>Boards</h3>
                    
                    @if(App\Models\Board::all()->count() == 0)
               
                        <span class="nothing">There are no boards</span>
                    
                    @else
                       
                    <div class="boardslinkdiv">
                       
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
                        
                    </div>
                        
                    @endif
                    
                </div>
                
                
                <div class="column2" id="rightside">
                    <!-- Help / social -->
                    
                    <div class="logo">
                       <a href="{{url('/')}}" class="noselect">Note.</a>
                    </div>
                    
                    <img src="{{asset('images/avatars/'.Auth::User()->avatar)}}" alt="">
                    <p>Welcome, Admin <strong>{{Auth::User()->username}}</strong>!</p>
                    
                    
                    <div class="footer">
                        
                        <ul class="social">

                          <li>
                              <i class="fa fa-facebook-square" aria-hidden="true"></i>
                          </li>

                          <li>
                              <i class="fa fa-twitter" aria-hidden="true"></i>
                          </li>

                          <li>
                              <i class="fa fa-google-plus" aria-hidden="true"></i>
                          </li>

                        </ul>

                        <p class="copyright">Copyright &copy; <span>Note.</span> 2016</p>
                    </div>
                    
                </div>
                
                
                
                <div class="column3" id="adminUsers">
                    <!-- All Users -->
                    <h3>All Users</h3>
                    
                    
                    @if(App\Models\User::all()->count() == 0)
               
                        <span class="nothing">There are no Users</span>
                    
                    @else   
                    
                    <div class="usersdiv">
                       
                        @foreach(App\Models\User::all() as $eachuser)
                        <div class="popupProfile">

                        </div>
                        @endforeach
                        
                    </div>
                        
                    @endif
                </div>
                
            @endif <!-- End of if admin -->
                      
            </div>
            
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
 