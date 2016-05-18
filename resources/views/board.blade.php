@extends('withnav')

@section('content')
<div id="boardNondesktop">
   <div class="content">
        <i class="fa fa-frown-o" aria-hidden="true"></i>
        <p><span>Sorry, love!</span><br>Our boards aren't compatible with mobile devices just yet.<br>We apologize for the inconvenience! <br>Please try again on your desktop.</p>
        <a href="{{URL::previous()}}">Go back</a>
       
   </div>
</div>

<section class="main" id="board" data-id="{{$board->id}}" style="background-image: url('../images/backgrounds/{{$board->background}}' )">
      <div class="container">
         
         <div class="draggables">
            
            @foreach($board->notes as $note)
            @if(Auth::User()->id != $note->user->id)
            
              <div class="note noselect" data-id='{{$note->id}}' style="position: absolute; top:{{$note->pos_y}}px; left: {{$note->pos_x}}px; pointer-events:none;">
                 <h2 class="noteTitle">{{$note->title}}</h2>
                 <h3>Post by {{$note->user->username}}</h3>
                 <p class="noteContent">{{$note->content}}</p>

              </div>
              
              
              @elseif(Auth::User()->admin == 1)
                 
                  <div class="note noselect" data-id='{{$note->id}}' style="position: absolute; top:{{$note->pos_y}}px; left: {{$note->pos_x}}px;">
                     <h2 class="noteTitle">{{$note->title}}</h2>
                     <h3>Post by {{$note->user->username}}</h3>
                     <p class="noteContent">{{$note->content}}</p>

                  </div>
              
              @else
              
              <div class="note noselect" data-id='{{$note->id}}' style="position: absolute; top:{{$note->pos_y}}px; left: {{$note->pos_x}}px;">
                 <h2 class="noteTitle">{{$note->title}}</h2>
                 <h3>Post by {{$note->user->username}}</h3>
                 <p class="noteContent">{{$note->content}}</p>

              </div>
              
              
              
              @endif
              
            @endforeach
            
         </div><!-- End of draggables -->
          
          
      </div><!-- End of container -->
        
        <div id="trash">
            <div class="container">
                <i class="fa fa-trash-o"></i>
            </div>
            
        </div>
         
</section><!-- End of main board-->

<div id="username" class="hidden">{{Auth::User()->username}}</div>
<div id="userid" class="hidden">{{Auth::User()->id}}</div>
<div id="boardid" class="hidden">{{$board->id}}</div>
@stop