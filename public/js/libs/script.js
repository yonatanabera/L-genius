$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
  
    $('.s-navbar').css({
      opacity: function() {
        var elementHeight = $(this).height();
        return 1.5 - (elementHeight - scrollTop) / elementHeight;
      }
    });
  });

 