@extends('nonav')

@section('content')


<section class="hero">
   <div class="container">
       
       <header>
          
          
          <div class="navbar">
             
              
                
           </div>
           
           <div class="logo">
               <a href="{{url('/')}}" class="noselect">Note.</a>
           </div>

           <div class="hamburger">
              <button class="hamburger-icon">
                <span class="hamburger-layer"></span>
              </button>
            </div>


               <div class="dropdown">
                   <ul id="navmenu">
                      @if(Auth::check())
                       <li>
                           <a href="{{url('about')}}">About</a>
                       </li> 
                       
                       <li>
                           <a href="{{url('dashboard/'.Auth::User()->id)}}">Dashboard</a>
                       </li> 
                         
                       <li>
                           <a href="{{url('logout')}}">Logout</a>
                       </li>
                       
                        <li>
                           <a href="{{url('contact')}}">Contact</a>
                       </li>                      
                                               
                      @else
                       <li>
                           <a href="{{url('about')}}">About</a>
                       </li> 
                       
                       <li>
                           <a href="{{url('register')}}">Register</a>
                       </li>
                      
                       <li>
                           <a href="{{url('login')}}">Login</a>
                       </li>
                       
                        <li>
                           <a href="{{url('contact')}}">Contact</a>
                       </li> 
                      @endif

                   </ul>
               
               </div>
       
           
       </header>
       
        <div class="headingtext">
            <h1>Note.</h1>
            <h2>A little idea-sharing playground for everyone.</h2>
        </div>
    </div>
</section>


<section class="description">
  
  
   
    <div class="container">
        <div class="innertext">
            <p>Create boards, make notes, link stuff and more!</p>
        </div>
        
        
    </div>
    
    
    
</section>


<section class="demo">
    <div class="container">
        <img src="" alt="">
    </div>
</section>


<footer>
    <div class="container">
           <h1 id="footerText">Keep in touch!</h1>
           
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
            
            
            <p class="copyright">Copyright &copy; Note. 2016</p>
    </div>
    
</footer>


@stop