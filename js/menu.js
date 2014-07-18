( function( $ ) {

  $(".menuTrigger").click(function() {
    $(".sideBarNav, .siteWrapper").toggleClass("navVisible");
  });

  $(".sideBarClose").click(function() {
    $(".sideBarNav, .siteWrapper").toggleClass("navVisible");
  });

} )( jQuery );
