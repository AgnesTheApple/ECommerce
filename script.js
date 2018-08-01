
       $('#cat').width(200);
       $('#cat').mouseover(function()
       {
          $(this).css("cursor","pointer");
          $(this).animate({width: "250px"}, 'slow');
       });
    
    $('#cat').mouseout(function()
      {   
          $(this).animate({width: "200px"}, 'slow');
       });
