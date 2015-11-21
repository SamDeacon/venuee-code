$(document).ready(function(){
    $('.carousel').carousel({
      interval: 4000
    });
    
    $('#googleplaybutton').on('hover', function(){
        $(this).toggle("scale");
    });
    
});