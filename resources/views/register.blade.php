@extends('nonav')

@section('content')

    <section class="front" id="registerpage">
           <div class="container">
               
                <a href="{{url('/')}}" class="welcomelogo noselect">Note.</a>

                <div id='registerbox' class="inputbox">
                    {!! Form::open(['url' => 'register']) !!}
                        {{form::text('username', null, ['required' => 'required', 'placeholder' => 'Username'])}}

                        {{form::text('name', null, ['required' => 'required', 'placeholder' => 'Name'])}}

                        {{form::text('email', null, ['required' => 'required', 'placeholder' => 'example@email.com'])}}

                        {{form::password('password', ['required' => 'required', 'placeholder' => 'Password'])}}

                        {{form::password('password_confirmation', ['required' => 'required', 'placeholder' => 'Confirm password'])}}

                        <br>

                        {{form::submit('Register')}}

                    {!! Form::close() !!}<br>

                    <p>Already done this before? Login <a href="login">here</a>!</p>
                </div>


               
               
           </div>
           
    </section>
    
@stop