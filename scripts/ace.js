/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint 

$(document).ready(function () {

//alert("the link to the .js file is correct!"); 
    
    $(".cross").hide();
    $(".menu").hide();
    $(".hamburger").show();
         
    $(".hamburger").on("click", function () {
        $(".menu").animate({width: "toggle"});
        $(".hamburger").hide();
        $(".cross").show();
    });
    
    $(".cross").on("click", function () {
        $(".menu").animate({width: "toggle"});
        $(".cross").hide();
        $(".hamburger").show();
    });
});

