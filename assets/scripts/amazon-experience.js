// Generated by CoffeeScript 1.8.0
(function() {
  jQuery(document).one('scroll', function() {
    jQuery("div[id*='email']").each(function() {
      var self;
      self = this;
      jQuery(self).scrollWatch().on("scroll", function(event) {
        var id, tweetable_bottom_from_top, tweetable_from_top;
        tweetable_from_top = jQuery(self).offset().top;
        tweetable_bottom_from_top = jQuery(self).offset().top + jQuery(self).outerHeight(true);
        id = jQuery(self).attr('id');
        console.log(id + " has visibility: " + event.visibility + " and current_scroll: " + jQuery(document).scrollTop() + " and from_top: " + tweetable_from_top + " from bottom: " + tweetable_bottom_from_top);
        if ((jQuery(document).scrollTop() >= tweetable_from_top) && (jQuery(document).scrollTop() < tweetable_bottom_from_top)) {
          jQuery("#link-to-" + id).addClass('active');
        } else {
          jQuery("#link-to-" + id).removeClass('active');
        }
      });
    });
  });

  jQuery(document).on("scroll", function() {
    var first_heading_from_top;
    first_heading_from_top = jQuery("#start-here").offset().top;
    first_heading_from_top = first_heading_from_top + jQuery("#start-here").outerHeight(true);
    if (jQuery(document).scrollTop() > first_heading_from_top) {
      jQuery("#top-bar-journey").show();
    } else {
      jQuery("#top-bar-journey").hide();
    }
  });

  jQuery(document).ready(function() {
    var first_heading_from_top;
    first_heading_from_top = jQuery("#start-here").offset().top;
    first_heading_from_top = first_heading_from_top + jQuery("#start-here").outerHeight(true);
    if (jQuery(document).scrollTop() > first_heading_from_top) {
      jQuery("#top-bar-journey").show();
    } else {
      jQuery("#top-bar-journey").hide();
    }
  });

}).call(this);
