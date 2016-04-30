$(function(){

    //Side Nav slide out
    
    
	var isOpen = false;

    
    /* Board info slide out*/
   
    $('#info-btn').on('click',function(){

		if(isOpen == false){
			//open slider
            
            $('#info-btn').addClass('new');
			$('#info').addClass('open');
//            console.log('blah');
//			$('#settings').one('transitionend', function(){
//                console.log('blah');
//				$('#settings-btn').addClass('new');
//			});						
			
    
            
			isOpen = true;

		}else{
			//close slider
            $('#info-btn').removeClass('new');
			$('#info').removeClass('open');
//			$('#settings').one('transitionsend',function(){
//                    
//				$('#settings-btn').removeClass('new');
//			});	
			isOpen = false;

		}
        
	});
    
    
    /* Settings slide out*/
    
	$('#settings-btn').on('click',function(){

		if(isOpen == false){
            
            $('#settings-btn').addClass('new');
			$('#settings').addClass('open');
    
            
			isOpen = true;

		}else{
            
            $('#settings-btn').removeClass('new');
			$('#settings').removeClass('open');
            
			isOpen = false;

		}
        
	});
    
    /* Profile Slide out */
    
    $('#profile-btn').on('click',function(){

		if(isOpen == false){
            
            $('#profile-btn').addClass('new');
			$('#profile').addClass('open');
    
            
			isOpen = true;

		}else{
            
            $('#profile-btn').removeClass('new');
			$('#profile').removeClass('open');
            
			isOpen = false;

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
    


});