// as you scroll the page
//      if the page has scrolled down from 0 (the top of the page)
//      -- then add a class on the navbar to make it less transparent (more opaque)
//      else (its at the top of the page)
//      -- then remove the class on the navbar to make it the original transparency

$(function() {
    $(window).on('scroll', function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 0) {
            $('.navbar').addClass('navbar-scrolled');
        } else {
            $('.navbar').removeClass('navbar-scrolled');
        }
    });
});