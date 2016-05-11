@extends('withnav')

@section('content')


<section class="main" id="board" data-id="{{$board->id}}" style="background-image: url('../images/backgrounds/{{$board->background}}' )">
      <div class="container">

         
         <div class="draggables">
            
            @foreach($board->notes as $note)
             
              <div class="note" data-id='{{$note->id}}' style="position: absolute; top:{{$note->pos_y}}px; left: {{$note->pos_x}}px;">
                 <h2>{{$note->title}}</h2>
                 <h3>Post by {{$note->user->username}}</h3>
                 <p>{{$note->content}}</p>

              </div>
              
            @endforeach
             
         </div><!-- End of draggables -->
          
          
      </div><!-- End of container -->
         
</section><!-- End of main board-->


<div id="public" class="hidden">{{url('/')}}</div>
<div id="token" class="hidden">{{csrf_token()}}</div>
@stop