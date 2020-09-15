$(document).ready(function(){
        /* Evento Click */
        $('.card-header').click(function(){
            $(this).css("background","#343a40")
            .css("font-size","22px")
            .css("color","rgba(255,255,255,.5)");
        })
    
        /* Evento Doble Click */
        $('.card-header').dblclick(function(){
            $(this).css("background","rgba(0,0,0,.03)")
            .css("color","#212529")
            .css("font-size: 22px")
            .css("font-weight: bold");
        });
});