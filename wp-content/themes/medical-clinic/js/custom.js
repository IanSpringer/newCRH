var $ = jQuery;

$(document).ready(function(){
  $('.home .custom_html').on("mouseover", function(){
    $(this).children('a').addClass("fade-in")
  })
  $('.home .custom_html').on("mouseleave", function(){
    $(this).children('a').removeClass("fade-in")
  })
  // $(window).scroll(function() {
  //   $('#cmsmasters_row_zk7zqjv8n9 .home #cmsmasters_icon_list_items_ .cmsmasters_icon_list_icon').each(function(){
  //   var imagePos = $(this).offset().top;

  //   var halfWay = $(document).height()/2;
  //       if (imagePos < halfWay) {
  //           $('#cmsmasters_row_zk7zqjv8n9 .home #cmsmasters_icon_list_items_ .cmsmasters_icon_list_icon').addClass("icon-fade");
  //       }
  //   });
  // });
})
