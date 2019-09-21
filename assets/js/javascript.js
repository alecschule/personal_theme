// Main Javascript file for theme


// if content takes up less than a full page, extend the div to the bottom of the screen for aesthetic purposes

jQuery(window).on("load resize", function() {
  var content_div = jQuery("#main-content-column");
  //console.log("1" + content_div.position());
  //console.log("2" + content_div.height());
  //console.log("4" + jQuery(window).height());
  if (content_div.position().top + content_div.height() < jQuery(window).height()) {
    // content is shorter than page
    content_div.height(jQuery(window).height()-content_div.position().top);
  }
});
