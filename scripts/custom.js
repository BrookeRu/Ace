/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

$(document).ready(function () {

    //----------hamburger navigation ----------------//

    //alert("the link to the .js file is correct!");
    var cross = $(".cross");
    var menu = $(".menu");
    var hamburger = $(".hamburger");

    cross.hide();
    menu.hide();
    hamburger.show();

    hamburger.on("click", function () {
        menu.animate({
            width: "toggle"
        });
        hamburger.hide();
        cross.show();
    });

    cross.on("click", function () {
        menu.animate({
            width: "toggle"
        });
        cross.hide();
        hamburger.show();
    });
    //-----------end--------//


    //----------- FAQ hide/show -------------------//

    $("dd").hide();
    $("dt").on("click", function () {
        $(this).toggleClass("open").next().slideToggle();

    });
    //----------end-----------//



    //-----------------Slide Show----------------------//
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    /*

    var slides = document.getElementsByClassName('mySlides');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide, 5000);

    function nextSlide() {
        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].className = 'slide showing';
    }
    */
    /*
    //--------------there is no pause button in the html --------------//
    var playing = true;
    var pauseButton = document.getElementById('pause');

    function pauseSlideshow() {
        pauseButton.innerHTML = 'Play';
        playing = false;
        clearInterval(slideInterval);
    }


    function playSlideshow() {
        pauseButton.innerHTML = 'Pause';
        playing = true;
        slideInterval = setInterval(nextSlide, 5000);
    }

    function clickFunction () {
        if (playing) {
            pauseSlideshow();
        } else {
            playSlideshow();
        }
    }

    pauseButton.addEventListener("click",  clickFunction);

    //-------------end-------------//
    */
});