(function ($, root, undefined) {

  $(function () {

    'use strict';

     function runScroll() {
       scrollTo(document.body, 0, 600);
     }

     var scrollme;
     scrollme = document.querySelector(".back-to-top");
     scrollme.addEventListener("click",runScroll,false)

     function scrollTo(element, to, duration) {

       if (duration <= 0) return;

       var difference = to - element.scrollTop;
       var perTick = difference / duration * 10;

       setTimeout(function() {
         element.scrollTop = element.scrollTop + perTick;
         if (element.scrollTop == to) return;
         scrollTo(element, to, duration - 10);
       }, 10);

     }

  });

})(jQuery, this);
