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
            <i class="fa fa-paper-plane-o btn" aria-hidden="true" id="home-btn" name="home"></i>
            
            <i class="fa fa-clone btn" aria-hidden="true" id="myboards-btn" name="My Boards"></i>
            
            <i class="fa fa-plus-square-o btn" aria-hidden="true" id="newboard-btn" name="New Board"></i>
            
            <i class="fa fa-cog btn" aria-hidden="true" id="settings-btn" name="Settings"></i>
<!--
            <div id="settings" class="slideout">
        <ul id="accordion">
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> Board Detail</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo voluptatem, repellendus magnam sit, reiciendis nostrum necessitatibus veniam recusandae ex reprehenderit amet? Sequi pariatur, aut ipsam. Iure natus facilis, reprehenderit libero.</p>
            </li>
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> Board Description</h2>
                <p>Aperiam assumenda unde cupiditate quis labore ipsa nulla voluptatum repudiandae alias consequatur, delectus adipisci amet eveniet earum reprehenderit voluptatibus veniam ducimus accusamus cum, nesciunt odit, sint nisi! Quis, ipsam, aliquid.</p>
            </li>
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> Board Background</h2>
                <p>Ipsum corporis rem quibusdam, nisi enim numquam ad beatae repudiandae blanditiis maxime consequuntur, omnis tempore suscipit doloribus doloremque totam aut mollitia sed dolorem tenetur nam, ab quod! Eos officiis, laborum.</p>
            </li>
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> People</h2>
                <p>Corporis rem fugiat vel officia incidunt temporibus, minima consequuntur provident, dolorum ab laboriosam eos voluptate cupiditate nemo recusandae quos vero modi exercitationem tempora ratione animi error! Beatae quo quidem facere!</p>
            </li>
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> Share this board</h2>
                <p>Quas maxime hic quisquam voluptatem, quia nam eos repellat veniam saepe quidem quasi sapiente, aut nulla natus, repudiandae porro cumque odit velit autem harum libero voluptates! Vel sequi, aliquam inventore?</p>
            </li>
        </ul>
    </div>
-->
        </div>
        
        
        <div class="icons" id="bottom">
            <i class="fa fa-user" aria-hidden="true" name="Profile"></i>
            
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
    
    
    <div id="settings" class="slideout">
        <ul id="accordion">
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> Board Detail</h2>
                <div>
                  <br>
                   <p>Name</p>
                   <p>Username</p>
                   <p>Date</p>
                    
                </div>
                
            </li>
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> Board Description</h2>
                <div>
                   <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, corporis.</p>
                </div>
            </li>
            
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> Board Background</h2>
                <div class="bgoptions"><!--Flex this -->
                   <br>
                    <img src="{{asset('images/swirl.png')}}" alt="">
                    <img src="{{asset('images/wood.png')}}" alt="">
                    <img src="{{asset('images/woven.png')}}" alt="">
                    <img src="{{asset('images/triangles.png')}}" alt="">
                    <img src="{{asset('images/diagnal-fabric.png')}}" alt="">
                    <img src="{{asset('images/school.png')}}" alt="">
                </div>
            </li>
            
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> Users</h2>
                <div class="avatars"><!--Flex this -->
                   <br>
                    <img src="{{asset('images/avatars/1.png')}}" alt="">
                    <img src="{{asset('images/avatars/2.png')}}" alt="">
                    <img src="{{asset('images/avatars/3.png')}}" alt="">
                </div>
            </li>
            
            <li>
                <h2 data-state="close"><i class="fa fa-caret-down" aria-hidden="true"></i> Share this board</h2>
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
            <div></div>
            <div></div>
            <div></div>
            <div></div>
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