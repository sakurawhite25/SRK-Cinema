$(window).load(function(){
   
    // Menu
    $('.hadsub').click(function(){
       $(this).toggleClass('active');
         $('.submenu').toggleClass('active');
     });
    
    // Input Hover
    $(".input-effect input").val("");
         
         $(".input-effect input").focusout(function(){
             if($(this).val() != ""){
                 $(this).addClass("filled");
             }else{
                 $(this).removeClass("filled");
             }
         });
 });