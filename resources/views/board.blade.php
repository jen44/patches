@extends('withnav')

@section('content')


<section class="main" id="board">
      <div class="container">
         
         
          <div id="help" class="hidden">
               <i class="fa fa-question-circle" aria-hidden="true"></i>
               <div class="helpinfo hidden">
                  <!-- This will be a pop up -->
                   <h2>Need some help?</h2>
                   <p><em>Double-click</em> on the board to create a new note! You can click again to edit/delete the note you created.</p>
                   <p><em>Oh! Also...</em><br>Try clicking on the settings button on the right! You can change the background of your board.</p>
                   <h3>Have fun! :)</h3>
               </div>
           </div><!-- End of help -->

         
         <div class="draggables">
             
              <div class="note">
                  <p>This is a draggable note...</p>

              </div>

              <div class="note">
                  <p>This is a draggable note...</p>

              </div>
             
         </div><!-- End of draggables -->
          
          
      </div><!-- End of container -->
         
</section><!-- End of main board-->



@stop