$(function(){
  var flag=0;
  
  $('.share').on('click',function(){
   if(flag == 0)
    {
      $(this).siblings('.one').animate({
      top:'660px',
      left:'5%',
    },200);
    
     $(this).siblings('.two').delay(200).animate({
      top:'730px',
      left:'5%'
    },200);
    
     $(this).siblings('.three').delay(300).animate({
      top:'800px',
      left:'5%'
    },200);
              
    $('.one i,.two i, .three i').delay(500).fadeIn(200);  
      flag = 1;
    }
    
    
  else{
    $('.one, .two, .three').animate({
        top:'90%',
        left:'5%'
      },200);
      
  $('.one i,.two i, .three i').delay(500).fadeOut(200);
      flag = 0;
    }
  });
});