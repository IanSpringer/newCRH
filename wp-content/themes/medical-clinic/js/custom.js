var $ = jQuery;

$(document).ready(function(){
  $('.home .custom_html').on("mouseover", function(){
    $(this).children('a').addClass("fade-in")
  })
  $('.home .custom_html').on("mouseleave", function(){
    $(this).children('a').removeClass("fade-in")
  })

  $('#cmsmasters_row_n987711hsk .cmsmasters_toggle_wrap').first().addClass('current_toggle');
})
