@extends('nonav')

@section('content')

<section class="front" id="loginpage">

      
  
   <div class="container">
      
      
       <a href="{{url('/')}}" class="welcomelogo noselect" >Note.</a>
       
        
        <div class="inputbox">
       
           
              
               {!! Form::open(['url' => 'login']) !!}
                {{form::text('username', null, ['required' => 'required', 'placeholder' => 'Username'])}}
                {!! $errors->first('username')!!}
                {{form::password('password', ['required' => 'required', 'placeholder' => 'Password'])}}
                {!! $errors->first('password')!!}
                
            <br>
               
                {{form::submit('Login')}}
             {!! Form::close() !!}
             
             <br>
             
             <p><em>Or</em> Join us <a href="register">here</a>!</p>
        </div>

   </div>

</section>


@stop