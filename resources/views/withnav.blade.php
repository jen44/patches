<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
    
<header class="sidenav">
    <nav class="navicons">
        <div class="icons" id="top">
            <a href="dashboard"><i class="fa fa-paper-plane-o" aria-hidden="true" id="home-btn" name="home"></i></a>
            
            <i class="fa fa-clone" aria-hidden="true" id="myboards-btn" name="My Boards"></i>
            
            <i class="fa fa-info-circle" aria-hidden="true" id="info-btn" name="Board info"></i>
            
            <i class="fa fa-plus-square-o btn" aria-hidden="true" id="newboard-btn" name="New Board"></i>
            
            <i class="fa fa-cog btn" aria-hidden="true" id="settings-btn" name="Settings"></i>
            
        </div>
        
        
        <div class="icons" id="bottom">
            <i class="fa fa-user" aria-hidden="true" id="profile-btn" name="Profile"></i>
            
            <i class="fa fa-sign-out" aria-hidden="true" name="logout"></i>
            
        </div>
    </nav>
</header>
    
<section class="slideouts">

    <div id="myboards" class="slideout">
        <h3>My boards</h3>
        <ul>
            <li><a href="">Board 1</a></li>
            <li><a href="">Board 2</a></li>
            <li><a href="">Board 3</a></li>
        </ul>
    </div>
    
    <div id="info" class="slideout">
        <ul>
            <li>

                <h2>Created By</h2>
                <p>Username</p>

            </li>

            <li>
                <h2>Fellow borders</h2>
                
                <div class="boarders">

                    <img src="{{asset('images/avatars/3.png')}}" alt="">
                    <p>Username1</p>
                    
                </div>
                    
                <div class="boarders">

                    <img src="{{asset('images/avatars/7.png')}}" alt="">
                    <p>Username2</p>
                    
                </div>
                    
                <div class="boarders">

                    <img src="{{asset('images/avatars/9.png')}}" alt="">
                    <p>Username3</p>
                    
                </div>
                    
                <div class="boarders">

                    <img src="{{asset('images/avatars/5.png')}}" alt="">
                    <p>Username4</p>
                    
                </div>
                    
                <div class="boarders">

                    <img src="{{asset('images/avatars/10.png')}}" alt="">
                    <p>Username5</p>
                    
                </div>
                
                <div class="clear"></div>

                
            </li>

            <li>
               
                <h2>Total notes</h2>
                <p>10</p>
                
            </li>

            <li>
               
                <h2>Created at</h2>
                <p>00:00 00/00/0000</p>
                
            </li>

        </ul>
    </div>    
    
    <div id="settings" class="slideout">
        <ul id="accordion">
            <li>
                <h2>Board Background</h2>
                <div class="bgoptions"><!--Flex this -->
                   <br>
                    <img src="{{asset('images/backgrounds/pattern.png')}}" class="bgcurrent" data-file="pattern">
                    <img src="{{asset('images/backgrounds/wood.png')}}" data-file="wood">
                    <img src="{{asset('images/backgrounds/woven.png')}}" data-file="woven">
                    <img src="{{asset('images/backgrounds/triangles.png')}}" data-file="triangles">
                    <img src="{{asset('images/backgrounds/diagnal-fabric.png')}}" alt="diagnal-fabric">
                    <img src="{{asset('images/backgrounds/school.png')}}" data-file="school">
                    <img src="{{asset('images/backgrounds/weather.png')}}" data-file="weather">
                    <img src="{{asset('images/backgrounds/dark_wood.png')}}" data-file="dark_wood">
                    <img src="{{asset('images/backgrounds/cardboard.png')}}" data-file="cardboard">
                    <img src="{{asset('images/backgrounds/swirl.png')}}" data-file="swirl">
                    
                </div>
                <div class="clear"></div>
            </li>
            
           
            
            <li>
                <h2>Share this board</h2>
                <div>
                   <br>
                    <a href="">Facebook</a>
                    <a href="">Google+</a>
                    <a href="">Twitter</a>
                </div>
            </li>
        </ul>
    </div>
    
    <div id="profile" class="slideout">
        <div class="banner">
            <img src="{{asset('images/avatars/4.png')}}" alt="">
        </div>
        <div class="details">
            <ul>
                <li>
                    <h2>Username</h2> 
                    <p>Username</p>              
                </li>
                
                <li>
                    <h2>Name</h2>
                    <p>Name</p>
                </li>
                
                <li>
                    <h2>Email</h2>
                    <p>email@email.com</p>
                </li>
                
                
                <li>
                    <h2><a href=""></a>Edit Profile</h2>
                    
                </li>
                
            </ul>
        </div>
        
    </div>

    <div id="alertout" class="slideout"><!-- Maybe do an alert? -->
        <p>Logging out now. Are you sure?</p>
        <button>Yep!</button>
        <button>Actually, no.</button>
    </div>

</section>
    
    @yield('content')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>