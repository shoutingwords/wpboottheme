$(document).ready(function(){function t(t){tallest=0,t.each(function(){thisHeight=$(this).height(),thisHeight>tallest&&(tallest=thisHeight)}),t.each(function(){$(this).height(tallest)})}function o(){var t=$(window).scrollTop(),o=$(".sidebar").offset().top,e=$("#subscribe, #coupon-subscribe, #review-subscribe");t>o?e.addClass("stick"):e.removeClass("stick")}$(".dropdown-toggle").dropdown(),$(".dropdown input, .dropdown label").click(function(t){t.stopPropagation()}),$("body").append('<div class="back-to-top hidden-xs"><span class="glyphicon glyphicon-chevron-up"></span></div>');var e=220,i=500;$(window).scroll(function(){$(this).scrollTop()>e?$(".back-to-top").fadeIn(i):$(".back-to-top").fadeOut(i)}),$(".back-to-top").click(function(t){return t.preventDefault(),$("html, body").animate({scrollTop:0},i),!1}),$("li").tooltip({selector:"a[data-toggle=tooltip]"}),$("h3").tooltip({selector:"a[data-toggle=tooltip]"}),$(".post-videos").fitVids(),$("#single-carousel").carousel({interval:5e3}),$("#coupon-carousel").carousel({interval:5e3}),$("#feature-post-carousel").carousel({interval:3e3}),t($(".coupon-thumbnail")),$(function(){window.prettyPrint&&prettyPrint()}),$(function(){$(window).scroll(o),o()})});