

/*====================jquery for pre loader */
jQuery(window).on('load', function () { 
  jQuery('#loader').delay(200).fadeOut(); 
  jQuery('#preloader').delay(500).fadeOut('slow');  
  jQuery('body').delay(550).css({ 'overflow': 'visible' });
})

// ===========js for animate elements in the html 
new WOW().init();


// =====================js for scroll to top and fixed header
var scroll = document.querySelector(".scroll");
var mynav = document.querySelector("nav");

window.onscroll = function(){
  if(window.scrollY > 100){
    scroll.style.transform = 'translateY(0px)';
    mynav.classList.add("show");
  }
  else{
    scroll.style.transform = 'translateY(-1500px)';
    mynav.classList.remove("show")
  }
}
scroll.onclick = function(){
  window.scrollTo({
    top : '0' , 
    behavior : 'smooth'
  })
}

// ================js for open and close the search-modal
var search = document.querySelector(".search");
var search_modal = document.querySelector(".search-modal");
var close_search = document.querySelector(".close-search");
var bodyel = document.getElementsByTagName('body')[0];

search.onclick = function(){
  search_modal.style.transform = 'translateY(0%)'
}
close_search.onclick = function(){
  search_modal.style.transform = 'translateY(-100%)'
}
search_modal.onmouseover = function(){
  bodyel.style.overflow = "hidden"
}
search_modal.onmouseout = function(){
  bodyel.style.overflow = "auto"
}



// ================ js for open and close mobile-nav 
var small_mobile_icon = document.querySelector(".mobile-icon");
var mobile_nav = document.querySelector(".mobile-nav");
var close_nav = document.querySelector(".close-nav");

small_mobile_icon.onclick = function(){
  mobile_nav.style.left = "0%"
}
close_nav.onclick = function(){
  mobile_nav.style.left = "-100%"
}
mobile_nav.onmouseover = function(){
  bodyel.style.overflow = "hidden"
}
mobile_nav.onmouseout = function(){
  bodyel.style.overflow = "auto"
}

// ========================= js for slick slider at the our-offers section
$(document).ready(function(){
  $('.our-offers .offers').slick({
    dots: true,
    infinite: true,
    speed: 400,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay : true ,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  })

  $('.related-products .offers').slick({
    dots: true,
    infinite: true,
    speed: 400,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay : true ,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  })
})

