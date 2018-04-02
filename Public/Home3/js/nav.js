/*!
* parlx.js v1.1 beta 1
* Copyright 2017-2018 Jakub Biesiada
* MIT License
*/

 // Fixed Menu
// function() {
    
//       $(".nav-opener").on("click", function(e) {
//         jQuery(this).toggleClass('active').find('i').toggleClass('fa-bars fa-times');
//   jQuery('.main-nav').toggleClass('nav-active');
//   e.preventDefault();
// });
  

//     if ($(".side-nav-btn").length) {
// $(".side-nav-btn").on("click", function(e) {
//   jQuery(this).toggleClass('active').find('i').toggleClass('fa-bars fa-times');
//   jQuery('.side-nav').toggleClass('active');
//   e.preventDefault();
// });
//     };


//  if ($(".s-btn, .home3 .search-form .s-btn:before").length) {
//     jQuery('.s-btn, .home3 .search-form .s-btn:before').on("click", function(e) {
//    $(this).parent().toggleClass('round fullw');
//    $(this).find('i').toggleClass('flaticon-magnifier-tool fa-times');
//    e.preventDefault();
//  });
//     };

// },

$(document).ready(function(){
   $(".nav-opener").click(function(){
     $(".main-nav").toggleClass("nav-active",1000, "easeInOutExpo")
   });
});