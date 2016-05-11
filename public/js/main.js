$(function(){
    
    
/*
|--------------------------------------------------------------------------
| All Slide outs
|--------------------------------------------------------------------------
|
*/
    
    
    /* My Boards slide out*/
   
    $('#myboards-btn').on('click',function(){

		if($('#myboards').hasClass('open') == false){
			//open slider
            
            if($('#settings').hasClass('open')){
                
                $('#settings-btn').removeClass('active-btn');
                $('#settings').removeClass('open');
            
            }
            
            if($('#profile').hasClass('open')){
                
                $('#profile-btn').removeClass('active-btn');
                $('#profile').removeClass('open');
            
            }
            
            if($('#info').hasClass('open')){
                
                $('#info-btn').removeClass('active-btn');
                $('#info').removeClass('open');
            
            }

            if($('.modal').hasClass('fadeIn')){


                $('.modal').removeClass('fadeIn');
                $('#newboard-btn').removeClass('active-btn');

            }
            
            $('#myboards-btn').addClass('active-btn');
			$('#myboards').addClass('open');
			
    
		}else{
            
			//close slider
            $('#myboards-btn').removeClass('active-btn');
			$('#myboards').removeClass('open');

		}
        
	});
    
    /* Board info slide out*/
   
    $('#info-btn').on('click',function(){

		if($('#info').hasClass('open') == false){
			//open slider
            
            if($('#settings').hasClass('open')){
                
                $('#settings-btn').removeClass('active-btn');
                $('#settings').removeClass('open');
            
            }
            
            if($('#myboards').hasClass('open')){
                
                $('#myboards-btn').removeClass('active-btn');
                $('#myboards').removeClass('open');
            
            }
            
            if($('#profile').hasClass('open')){
                
                $('#profile-btn').removeClass('active-btn');
                $('#profile').removeClass('open');
            
            }
            
            if($('.modal').hasClass('fadeIn')){


                $('.modal').removeClass('fadeIn');
                $('#newboard-btn').removeClass('active-btn');

            }
            
            $('#info-btn').addClass('active-btn');
			$('#info').addClass('open');
			
    
		}else{
            
			//close slider
            $('#info-btn').removeClass('active-btn');
			$('#info').removeClass('open');

		}
        
	});
    
    
    
    /* Settings slide out*/
    
     $('#settings-btn').on('click',function(){
    
    
        if($('#settings').hasClass('open') == false){
                //open slider

                if($('#profile').hasClass('open')){

                    $('#profile-btn').removeClass('active-btn');
                    $('#profile').removeClass('open');

                }

                if($('#myboards').hasClass('open')){

                    $('#myboards-btn').removeClass('active-btn');
                    $('#myboards').removeClass('open');

                }

                if($('#info').hasClass('open')){

                    $('#info-btn').removeClass('active-btn');
                    $('#info').removeClass('open');

                }
            
                if($('.modal').hasClass('fadeIn')){


                    $('.modal').removeClass('fadeIn');
                    $('#newboard-btn').removeClass('active-btn');

                }

                $('#settings-btn').addClass('active-btn');
                $('#settings').addClass('open');
            
            

            }else{

                //close slider
                $('#settings-btn').removeClass('active-btn');
                $('#settings').removeClass('open');

            }
     });
    
    /* Profile Slide out */
    
    $('#profile-btn').on('click',function(){

		
        if($('#profile').hasClass('open') == false){
                //open slider

            if($('#settings').hasClass('open')){

                $('#settings-btn').removeClass('active-btn');
                $('#settings').removeClass('open');

            }

            if($('#info').hasClass('open')){

                $('#info-btn').removeClass('active-btn');
                $('#info').removeClass('open');

            }
            
            if($('#myboards').hasClass('open')){
                
                $('#myboards-btn').removeClass('active-btn');
                $('#myboards').removeClass('open');
            
            }

            $('#profile-btn').addClass('active-btn');
            $('#profile').addClass('open');
            
            if($('.modal').hasClass('fadeIn')){
                
            
                $('.modal').removeClass('fadeIn');
                $('#newboard-btn').removeClass('active-btn');
        
            }


        }else{

            //close slider
            $('#profile-btn').removeClass('active-btn');
            $('#profile').removeClass('open');

        }

	});
    
    
    /* Close all slides on board click */
    
    $('#board').on('click', function(){
        
        if($('.slideout').hasClass('open')){
            $('.slideout').removeClass('open');
            $('.btn').removeClass('active-btn');
        }
        
        if($('.modal').hasClass('fadeIn')){
            
            $('.modal').removeClass('fadeIn');
            $('.btn').removeClass('active-btn');
        }
        
    });
    
    $('#dashboard').on('click', function(){
        
        if($('.slideout').hasClass('open')){
            $('.slideout').removeClass('open');
            $('.btn').removeClass('active-btn');
        }
        
        if($('.modal').hasClass('fadeIn')){
            
            $('.modal').removeClass('fadeIn');
            $('.btn').removeClass('active-btn');
        }
        
    });
    
/*
|--------------------------------------------------------------------------
| New board: New board form slide down
|--------------------------------------------------------------------------
|
*/
    
    
    $('#newboard-btn').on('click', function(){
        
        if($('.modal').hasClass('fadeIn') == false){
            
			$('#newboard-btn').addClass('active-btn');
            $('.modal').addClass('fadeIn');
            $('.slideout').removeClass('open');
			$('#settings-btn').removeClass('active-btn');
			$('#profile-btn').removeClass('active-btn');
			$('#info-btn').removeClass('active-btn');
			$('#myboards-btn').removeClass('active-btn');
            
            
        } else {
            
            $('.modal').removeClass('fadeIn');
			$('#newboard-btn').removeClass('active-btn');
        
        }
        
        
    });
    
    
    
    
    
    
/*
|--------------------------------------------------------------------------
| Settings: Background toggle
|--------------------------------------------------------------------------
|
*/
    
    /* Background option toggle current */
    
    $('.bgoptions img').on('click', function(){
        
        
        if($(this).hasClass('bgcurrent') == false){
            
            $(this).addClass('bgcurrent').siblings('img').removeClass('bgcurrent');
            
            
        } else {
            
             $(this).removeClass('bgcurrent');
            
        }
        
    
    /* Background image toggle */
        
        
        $('#board').css('background-image','url('+$(this).attr('src')+')');
        
        var newbg = $(this).attr('data-file');
        
        var board_id = $('#board').attr('data-id');
        
        var url = $('#public').html() + '/board/' + board_id;
        
        var data =  { background: newbg,
                      _token: $('#token').html(),
                      _method: 'PUT'

                    };
//        
//        var jpg = ".jpg";
//        var png = ".png";
//        console.log(newbg.indexOf(jpg));
//        
//        
//        if(newbg.indexOf(jpg) != -1){
//            
//            $('#board').addClass('jpg');
//            $('#board').removeClass('png');
//            
//        }
//        
//        if(newbg.indexOf(png) != -1){
//            
//            $('#board').addClass('png');            
//            $('#board').removeClass('jpg');
//            
//        }
//        
        $.post(url, data,function(res){

            console.log(res);
        }); 

        
        
        
        
    });
           
    
    

    /* */
    
   
    
    
    
    
    
    
    
/*
|--------------------------------------------------------------------------
| All Notes
|--------------------------------------------------------------------------
|
*/
    
    
    /* Note Draggable and add class on drag start*/

    $(".note").draggable(
        { containment: "#board",
          helper: "original",
            start: function(event, ui){
                $(this).addClass("draggable-helper");

            },

            stop: function(event, ui){

                $(this).removeClass("draggable-helper");

                var pos_x = ui.offset.left;
                var pos_y = ui.offset.top;
//
//                console.log(pos_x);
//                console.log(pos_y);
//
//                console.log($(this).data('id'));

                var url = $('#public').html() + '/notes/' + $(this).data('id');

                var data =  { pos_x: pos_x, 
                            pos_y: pos_y,
                            _token: $('#token').html(),
                            _method: 'PUT'

                          };
                $.post( url, data,function(res){

                }); 


        }


    });


    /* Create note on double click */
    
//    $('#board').dblclick(function(){
//        
//        $('<div class="note"><h2>{{$note->title}}</h2><h3>Post by {{$note->user->username}}</h3><p>{{$note->content}}</p></div>')
//    
//    }).appendTo('.draggables');
        
    
});