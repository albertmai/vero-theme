jQuery(window).load(function(){jQuery("pre.okaidia").find("code").addClass("okaidia")}),jQuery(document).ready(function(){jQuery("#workflows-ui-nodes li.hover-box").click(function(e){console.log("hello");var r=jQuery(this);r.hasClass("active")||(r.siblings(".hover-box").removeClass("active"),r.addClass("active"))}),jQuery(".feature-swapper-option").click(function(e){var r=jQuery(this).data("swap-to"),a=jQuery(this).parents(".feature-swapper");a.find("li.active").removeClass("active"),jQuery(this).parent("li").addClass("active"),a.find(".active-feature").removeClass("active-feature").addClass("inactive-feature");var s="#"+r;a.find(s).removeClass("inactive-feature").addClass("active-feature")})}),jQuery(document).ready(function(){var a,r;(jQuery("a[rel*=leanModal]").leanModal({top:80,closeButton:".modal-close"}),jQuery(".js-blog-subscribe-btn").leanModal({top:300,closeButton:".modal-close"}),window.location.hash)&&("demo"==window.location.hash.substring(1)&&jQuery("#demo-trigger").click());jQuery("#high-volume-sender-form").submit(function(e){return e.preventDefault(),r(e),!1}),jQuery(".js-blog-subscribe-form").submit(function(e){return e.preventDefault(),subscribeBlog(e),!1}),a=function(){var e,r,a,s,o,i;return i=!0,s=jQuery("#sender_name"),r=jQuery("#sender_email_address"),e=jQuery("#sender_company_name"),o=jQuery("#sender_subscribers"),a=jQuery("#sender_emails"),""!==s.val()?s.removeClass("error"):(s.addClass("error"),i=!1),""!==r.val()?r.removeClass("error"):(r.addClass("error"),i=!1),""!==e.val()?e.removeClass("error"):(e.addClass("error"),i=!1),""!==o.val()?o.removeClass("error"):(o.addClass("error"),i=!1),""!==a.val()?a.removeClass("error"):(a.addClass("error"),i=!1),i},r=function(e){if(console.log("Trying to validate"),a()){var r=jQuery("#high-volume-sender-form").attr("action");jQuery.ajax({type:"POST",url:r,data:jQuery("#high-volume-sender-form").serialize(),success:function(e){console.log("Demo sent!"),jQuery("#high-volume-sender-form").hide(),jQuery("#enquire-intro").hide(),jQuery("#thanks").show()}})}},subscribeBlog=function(e){if(console.log("Trying to validate"),a()){var r=jQuery(".js-blog-subscribe-form").attr("action");jQuery.ajax({type:"POST",url:r,data:jQuery(".js-blog-subscribe-form").serialize(),success:function(e){jQuery(".js-blog-subscribe-form").hide(),jQuery("#enquire-intro").hide(),jQuery("#thanks").show()}})}}});