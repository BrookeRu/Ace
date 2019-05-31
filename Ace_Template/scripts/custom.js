/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

$(document).ready(function () {

//alert("the link to the .js file is correct!");
    var cross = $(".cross");
    var menu = $(".menu");
    var hamburger = $(".hamburger");

    cross.hide();
    menu.hide();
    hamburger.show();
         
    hamburger.on("click", function () {
        menu.animate({width: "toggle"});
        hamburger.hide();
        cross.show();
    });
    
    cross.on("click", function () {
        menu.animate({width: "toggle"});
        cross.hide();
        hamburger.show();
    });
     
    $("dd").hide();
    $("dt").on("click", function () {
        $(this).toggleClass("open").next().slideToggle();
          
    });
     
    var slides = document.querySelectorAll('#slides .slide');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide, 5000);     
          
    function nextSlide(){
        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide+1)%slides.length;
        slides[currentSlide].className = 'slide showing';
    }

    var playing = true;
    var pauseButton = document.getElementById('pause');

    function pauseSlideshow(){
        pauseButton.innerHTML = 'Play';
        playing = false;
        clearInterval(slideInterval);
    }


    function playSlideshow(){
        pauseButton.innerHTML = 'Pause';
        playing = true;
        slideInterval = setInterval(nextSlide, 5000);
    }

    pauseButton.onclick = function(){
        if(playing){ pauseSlideshow(); }
        else{ playSlideshow(); }
    }
     
});