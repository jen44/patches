$(function(){
    
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
        
    });
    
    
    /* Background option toggle current */
    
    $('.bgoptions img').on('click', function(){
        
        if($(this).hasClass('bgcurrent') == false){
            
            $(this).addClass('bgcurrent').siblings('img').removeClass('bgcurrent');
            
            
        } else {
            
             $(this).removeClass('bgcurrent');
            
        }
        
          
        
    });
    

	///--------------accordion sliding

//	$('#accordion li').on('click',function(){
//        
//		if(($(this).find('h2')).data('state') == 'close'){
//			//open the P
//			($(this).find('h2')).next().addClass('open');
//
//			($(this).find('h2')).next().one('transitionend',function(){
//
//				($(this).find('h2')).prev().find('i')
//							.removeClass('fa-caret-down')
//			 				.addClass('fa-caret-up');
//			});
//
//			$(this).find('h2').data('state','open'); // updating Dom state
//
//		}else{
//
//			//close the P
//			($(this).find('h2')).next().removeClass('open');
//
//			($(this).find('h2')).next().one('transitionend',function(){
//
//				$(this).prev().find('i')
//							.removeClass('fa-caret-up')
//			 				.addClass('fa-caret-down');
//			});
//
//			($(this).find('h2')).data('state','close'); // updating Dom state
//		}
//		
//	});
    
    
    /* Note Draggable */
//    
//    $('.note').draggable();

});