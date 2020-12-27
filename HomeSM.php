<?php
session_start();
if ($_SESSION['user_is_loggedin'] == TRUE || $_SESSION['user_is_loggedin1'] == TRUE || $_SESSION['user_is_loggedin2'] == TRUE || $_SESSION['user_is_loggedin3'] == TRUE){
    header('Location: home.php');
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="Welcome to Fibonia, An easy one-stop destination for local services in California, providing a marketplace for freelance labor.">
    </head>
<title>Welcome | Fibonia</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src= "web.js"></script>
<script type="text/javascript" src= "redirect.js"></script>
<!DOCTYPE html><html class=''>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
  body{background:#ECF0F1}

.load{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);
  /*change these sizes to fit into your project*/
  width:100px;
  height:100px;
  z-index:10000;
}
.load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}

.load :first-child{background:#19A68C;animation-delay:-1.5s}
.load :nth-child(2){background:#F63D3A;animation-delay:-1s}
.load :nth-child(3){background:#FDA543;animation-delay:-0.5s}
.load :last-child{background:#193B48}

@keyframes spin{
  0%,100%{transform:translate(0)}
  25%{transform:translate(160%)}
  50%{transform:translate(160%, 160%)}
  75%{transform:translate(0, 160%)}
}
</style>
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/suez/pen/OjGQza?depth=everything&limit=all&order=popularity&page=59&q=icon&show_forks=false" />


<style class="cp-pen-styles">*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Roboto', Helvetica, Arial, sans-serif;
  background: #FFFFFF;
}

a
{
  color: #000;
  transition: color 0.3s ease;
}

a:hover
{
  color: #000;
}

#menuToggle
{
  display: block;
  position: relative;
  top: -100vh;
  left: 50px;
 
  z-index: 10001;
  
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle input
{
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: 52px;
  left: -5px;
  
  cursor: pointer;
  
  opacity: 0; /* hide this */
  z-index: 10002; /* and place it over the hamburger */
  
  -webkit-touch-callout: none;
}

.border {
    background: red;
    width: 300px;
    height: 200px;
    border: 1px solid green;
    overflow: visible;
    margin: 0;
    padding: 0;
}

.border iframe {
    border: none;
    width: 300px;
    height: 100px;
    margin: 0;
    padding: 0;
    opacity: 0.8;
}

.border .lower {
    height: 100px;
    margin: 0;
    padding: 0;
    background: blue;
    opacity: 0.8;
}

/*
 * Just a quick hamburger
 */
#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  
  background: #FFFFFF;
  border-radius: 3px;
  
  z-index: 10001;
  
  transform-origin: 4px 0px;
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

/* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #FFFFFF;
}

/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu
{
  position: absolute;
  width: 220px;
  height: 2000px;
  margin: -100px 0 0 -50px;
  padding: 50px;
  padding-top: 125px;
  background: rgb(211,211,211);
  opacity: 0.8;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  padding: 10px 0;
  font-size: 22px;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}

.slider {
  overflow: hidden;
  position: relative;
  height: 100vh;
  color: #fff;
}
.slider__top-heading {
  z-index: 12;
  position: absolute;
  left: 0;
  top: 12vh;
  width: 100%;
  text-align: center;
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  -webkit-transition: all 0.5s 1s;
  transition: all 0.5s 1s;
  -webkit-transform: translateY(-30px);
          transform: translateY(-30px);
  opacity: 0;
}
.slider.s--ready .slider__top-heading {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
}
.slider__slides {
  position: relative;
  height: 100%;
}
.slider__slide {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
.slider__slide.s--active {
  pointer-events: auto;
}
.slider__slide-content {
  z-index: 6;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  height: 100%;
  text-transform: uppercase;
  line-height: 1;
}
.slider__slide-subheading {
  margin-bottom: 20px;
  font-size: 24px;
  letter-spacing: 2px;
  -webkit-transform: translateY(20px);
          transform: translateY(20px);
  opacity: 0;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
.slider__slide.s--active .slider__slide-subheading {
  -webkit-transition-delay: 0.65s;
          transition-delay: 0.65s;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.slider__slide-heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 20px;
  font-size: 60px;
  letter-spacing: 12px;
}
.slider__slide-heading span {
  display: block;
  opacity: 0;
  -webkit-transform: translateY(-60px);
          transform: translateY(-60px);
  -webkit-transition: all 0.33333s;
  transition: all 0.33333s;
}
.slider__slide.s--prev .slider__slide-heading span {
  -webkit-transform: translateY(60px);
          transform: translateY(60px);
}
.slider__slide.s--active .slider__slide-heading span {
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.slider__slide-heading span:nth-child(1) {
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(1) {
  -webkit-transition-delay: 0.33333s;
          transition-delay: 0.33333s;
}
.slider__slide-heading span:nth-child(2) {
  -webkit-transition-delay: 0.1s;
          transition-delay: 0.1s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(2) {
  -webkit-transition-delay: 0.43333s;
          transition-delay: 0.43333s;
}
.slider__slide-heading span:nth-child(3) {
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(3) {
  -webkit-transition-delay: 0.53333s;
          transition-delay: 0.53333s;
}
.slider__slide-heading span:nth-child(4) {
  -webkit-transition-delay: 0.3s;
          transition-delay: 0.3s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(4) {
  -webkit-transition-delay: 0.63333s;
          transition-delay: 0.63333s;
}
.slider__slide-heading span:nth-child(5) {
  -webkit-transition-delay: 0.4s;
          transition-delay: 0.4s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(5) {
  -webkit-transition-delay: 0.73333s;
          transition-delay: 0.73333s;
}
.slider__slide-heading span:nth-child(6) {
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(6) {
  -webkit-transition-delay: 0.83333s;
          transition-delay: 0.83333s;
}
.slider__slide-heading span:nth-child(n+7) {
  -webkit-transition-delay: 0.6s;
          transition-delay: 0.6s;
}
.slider__slide.s--active .slider__slide-heading span:nth-child(n+7) {
  -webkit-transition-delay: 0.93333s;
          transition-delay: 0.93333s;
}
.slider__slide-readmore {
  position: relative;
  font-size: 14px;
  text-transform: lowercase;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: translateY(-20px);
          transform: translateY(-20px);
  cursor: pointer;
  opacity: 0;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
.slider__slide.s--active .slider__slide-readmore {
  -webkit-transition-delay: 0.65s;
          transition-delay: 0.65s;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.slider__slide-readmore:before {
  content: '';
  position: absolute;
  left: -2px;
  top: -3px;
  width: calc(100% + 4px);
  height: calc(100% + 6px);
  background: rgba(255, 255, 255, 0.4);
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
          transform-origin: 0 50%;
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
}
.slider__slide-readmore:hover:before {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
}
.slider__slide-parts {
  position: absolute;
  left: 0;
  top: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  height: 100%;
}
.slider__slide-parts:after {
  content: '';
  z-index: 5;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.1);
}
.slider__slide-part {
  position: relative;
  width: 25%;
  height: 100%;
}
.slider__slide-part-inner {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 100%;
  background-size: 0 0;
  background-repeat: no-repeat;
  -webkit-transition: -webkit-transform 0.5s ease-in-out;
  transition: -webkit-transform 0.5s ease-in-out;
  transition: transform 0.5s ease-in-out;
  transition: transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
}
.slider__slide-part-inner:before {
  content: '';
  position: absolute;
  width: 100vw;
  height: 100%;
  background-image: inherit;
  background-size: cover;
  background-position: center center;
  -webkit-transition: opacity 0.25s;
  transition: opacity 0.25s;
  opacity: 0;
}
.slider__slide-part:nth-child(1) .slider__slide-part-inner {
  z-index: 3;
  -webkit-transition-delay: 0.24s;
          transition-delay: 0.24s;
  -webkit-transform: translateX(-32.5%);
          transform: translateX(-32.5%);
}
.slider__slide.s--active .slider__slide-part:nth-child(1) .slider__slide-part-inner {
  -webkit-transition-delay: 0.28s;
          transition-delay: 0.28s;
}
.slider__slide-part:nth-child(1) .slider__slide-part-inner:before {
  left: 0vw;
  -webkit-transition-delay: 0.365s;
          transition-delay: 0.365s;
}
.slider__slide.s--active .slider__slide-part:nth-child(1) .slider__slide-part-inner:before {
  -webkit-transition-delay: 0.28s;
          transition-delay: 0.28s;
}
.slider__slide-part:nth-child(2) .slider__slide-part-inner {
  z-index: 2;
  -webkit-transition-delay: 0.16s;
          transition-delay: 0.16s;
  -webkit-transform: translateX(-65%);
          transform: translateX(-65%);
}

.chat-pop-up {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1195544/element_wave.svg) center 35% no-repeat, linear-gradient(#FBCE3B 36%, #FFFFFF 36%);
  background-size: contain;
  border-radius: 6px;
  bottom: 75px;
  box-shadow: 0 3px 6px 0 rgba(75, 74, 75, 0.2);
  opacity: 0;
  right: 55px;
  padding: 10px;
  position: fixed;
  transform: translatey(20px);
  transition: opacity 0.25s ease, transform 0.25s ease-out;
  width: 402px;
  z-index: 100;
}

.chat-pop-up--heading {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}

.chat-pop-up--heading h3 {
  color: #274666;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 40px;
  font-weight: 700;
  line-height: 44px;
  margin: 10px 0 0;
}

.chat-pop-up--heading h3 span {
  display: block;
}

.chat-pop-up--heading figure {
  margin: 0;
}

.chat-pop-up h4 {
  color: #4A4A4A;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 16px;
  font-weight: 300;
  line-height: 26px;
  margin: 20px 0;
}

.chat-pop-up a {
  background: #FF6B17;
  border-radius: 6px;
  color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 24px;
  font-weight: 600;
  max-width: 225px;
  padding: 12px;
  text-decoration: none;
  transition: background 0.2s ease;
}

.chat-pop-up a:hover, 
a:active {
  background: #FF8D4E;
}

.chat-pop-up a span {
  margin-right: 8px;
}

.toggle-chat {
  background:  #FBCE3B;
  border-radius: 30px;
  border-style: none;
  box-shadow: 0 3px 6px 0 rgba(75, 74, 75, 0.2);
  cursor: pointer;
  display: flex;
  flex-direction: column-reverse;
  align-items: center;
  justify-content: center;
  position: fixed;
  height: 60px;
  bottom: 10px;
  right: 55px;
  padding: 10px;
  transition: width 0.3s ease-in-out, background 0.2s ease;
  outline: none;
  width: 180px;
  z-index: 1000000000000000000000;
}

.toggle-chat:hover, 
.toggle-chat:active {
  background: #FFD95D;
}

.toggle-chat.chat-is-open {
  flex-direction: column;
  width: 60px;
}

.open-chat {
   display: flex;
  align-items: center;
  justify-content: space-between;
  color: #274666;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 20px;
  font-weight: 600;
  line-height: 27px;
  transition: opacity 0.2s 0.2s ease-out;
  width: 144px; 
}

.open-chat {
  position:absolute;
  top:0%;
  right: 5%;
}

.close-chat {
   display: flex;
  align-items: center;
  justify-content: space-between;
  color: #274666;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 50px;
  font-weight: 600;
  line-height: 27px;
  opacity: 1;
  transition: opacity 0.2s 0.2s ease-out;
  width: 144px;  

}

.open-chat {
  margin-top: 2px;
}


.toggle-chat.chat-is-open .open-chat {
  transition: none;
  opacity: 0;
}

.toggle-chat .close-chat {
  margin-top: 2px;
  opacity: 0;
  transform: rotate(-90deg);
}

.toggle-chat.chat-is-open .close-chat {
  position:absolute;
  top:25%;
  right: -163%;
  opacity: 1;
  transform: rotate(0deg);
}

.chat-display-on {
  display: block !important;
}

.chat-visible {
  opacity: 1;
  transform: translatey(0);
}

.slider__slide.s--active .slider__slide-part:nth-child(2) .slider__slide-part-inner {
  -webkit-transition-delay: 0.36s;
          transition-delay: 0.36s;
}
.slider__slide-part:nth-child(2) .slider__slide-part-inner:before {
  left: -25vw;
  -webkit-transition-delay: 0.285s;
          transition-delay: 0.285s;
}
.slider__slide.s--active .slider__slide-part:nth-child(2) .slider__slide-part-inner:before {
  -webkit-transition-delay: 0.36s;
          transition-delay: 0.36s;
}
.slider__slide-part:nth-child(3) .slider__slide-part-inner {
  z-index: 1;
  -webkit-transition-delay: 0.08s;
          transition-delay: 0.08s;
  -webkit-transform: translateX(-97.5%);
          transform: translateX(-97.5%);
}
.slider__slide.s--active .slider__slide-part:nth-child(3) .slider__slide-part-inner {
  -webkit-transition-delay: 0.44s;
          transition-delay: 0.44s;
}
.slider__slide-part:nth-child(3) .slider__slide-part-inner:before {
  left: -50vw;
  -webkit-transition-delay: 0.205s;
          transition-delay: 0.205s;
}
.slider__slide.s--active .slider__slide-part:nth-child(3) .slider__slide-part-inner:before {
  -webkit-transition-delay: 0.44s;
          transition-delay: 0.44s;
}
.slider__slide-part:nth-child(4) .slider__slide-part-inner {
  z-index: 0;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
  -webkit-transform: translateX(-130%);
          transform: translateX(-130%);
}
.slider__slide.s--active .slider__slide-part:nth-child(4) .slider__slide-part-inner {
  -webkit-transition-delay: 0.52s;
          transition-delay: 0.52s;
}
.slider__slide-part:nth-child(4) .slider__slide-part-inner:before {
  left: -75vw;
  -webkit-transition-delay: 0.125s;
          transition-delay: 0.125s;
}
.slider__slide.s--active .slider__slide-part:nth-child(4) .slider__slide-part-inner:before {
  -webkit-transition-delay: 0.52s;
          transition-delay: 0.52s;
}
.slider__slide.s--active .slider__slide-part-inner {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  -webkit-transition-timing-function: ease;
          transition-timing-function: ease;
}
.slider__slide.s--active .slider__slide-part-inner:before {
  opacity: 1;
}
.slider__control {
  z-index: 100;
  position: absolute;
  left: 50px;
  top: 50%;
  width: 50px;
  height: 50px;
  margin-top: -25px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.4);
  -webkit-transform: translateX(-50px);
          transform: translateX(-50px);
  opacity: 0;
  -webkit-transition: all 0.5s 1s;
  transition: all 0.5s 1s;
  cursor: pointer;
}
.slider__control:before {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  width: 20px;
  height: 20px;
  margin-left: -10px;
  margin-top: -10px;
  border: 2px solid #FFFFFF;
  border-bottom: none;
  border-right: none;
  -webkit-transform: translateX(5px) rotate(-45deg);
          transform: translateX(5px) rotate(-45deg);
}
.slider__control--right {
  left: auto;
  right: 50px;
  -webkit-transform: translateX(50px);
          transform: translateX(50px);
}
.slider__control--right:before {
  -webkit-transform: translateX(-5px) rotate(135deg);
          transform: translateX(-5px) rotate(135deg);
}
.slider.s--ready .slider__control {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  opacity: 1;
}

.icon-link {
  transition: 0.4s;
  z-index: 10000000;
  position: absolute;
  right: 50px;
  top: 40px;
  width: 32px;
}
.icon-link:hover{
    -webkit-filter: brightness(70%);
	-moz-filter: brightness(70%);
	-o-filter: brightness(70%);
	-ms-filter: brightness(70%);
	filter: brightness(70%);

}
.icon-link img {
  width: 100%; 
  vertical-align: top;
}
.icon-link--twitter {
  left: auto;
  right: 5px;
  top: 40px
}
.icon-link--ig {
  left: auto;
  right: 95px;
  top: 40px
}

.icon-link1 {
  transition: 0.4s;
  z-index: 10000000;
    position:relative;
    display:block;
}
.icon-link1:hover{
    -webkit-filter: brightness(70%);
	-moz-filter: brightness(70%);
	-o-filter: brightness(70%);
	-ms-filter: brightness(70%);
	filter: brightness(70%);

}


.icon-link2 {
  z-index: 10000000;
    position:relative;
    display:block;
    right: 50px;
  top: 40px;
  width: 32px;
}

.sign-link {
  display: block;
  position: relative;
  width: 100px;
  top: 42px;
  left: 80px;
  
  z-index: 10001;
  
  -webkit-user-select: none;
  user-select: none;
}

.sign-link1 {
  display: block;
  position: relative;
  width: 144px;
  top: 22px;
  left: 170px;
  
  z-index: 10001;
  
  -webkit-user-select: none;
  user-select: none;
    
}

.sign-link2 {
  display: block;
  position: relative;
  width: 20px;
  top: 42px;
  left: 185px;
  
  z-index: 10001;
  
  -webkit-user-select: none;
  user-select: none;
    
}

.profile-link {
  left: auto;
  width: 100px;
  right: 1620px;
  top: 60px
}
html,body
{
    width: 100%;
    height: 100%;
    border: 0px;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
    overflow-y: hidden;
}

.border iframe {
    border: none;
    width: 300px;
    height: 100px;
    margin: 0;
    padding: 0;
    opacity: 0.8;
    display:block; /* Add this */
}

iframe {

    margin: none;
    padding: none;
    border: none;
    line-height: 0;
    float: left; 
}
</style>
</head>
<link rel="icon" type="image/png" href="logo.png"><body>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="colorlib-search-2/css/main.css" rel="stylesheet" />
    <style>
    .s002{
        min-height:10vh;
        background:none;
        position:absolute;
        z-index:10000;
        margin-left: auto;
        margin-right: auto;
        margin: 0 auto;
        top: 30%;
left: 50%;
transform: translate(-50%, -50%);
    }
    .s002 form .inner-form .input-field.first-wrap {
        width:200px;
    }
    </style>
  </head>
  <link rel="icon" type="image/png" href="logo.png"><body>
    <div class="s002">
      <form>

        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
              </svg>
            </div>
            <input id="search" type="text" placeholder="What are you looking for?" />
          </div>
          <div class="input-field second-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
              </svg>
            </div>
            <input class="datepicker" id="depart" type="text" placeholder="29 Aug 2018" />
          </div>
          <div class="input-field third-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
              </svg>
            </div>
            <input class="datepicker" id="return" type="text" placeholder="30 Aug 2018" />
          </div>
          <div class="input-field fouth-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
              </svg>
            </div>
            <select data-trigger="" name="choices-single-defaul">
              <option placeholder="">2 Adults</option>
              <option>3 Adults</option>
              <option>4 Adults</option>
              <option>5 Adults</option>
            </select>
          </div>
          <div class="input-field fifth-wrap">
            <button class="btn-search" type="button">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
    <script src="colorlib-search-2/js/extention/choices.js"></script>
    <script src="colorlib-search-2/js/extention/flatpickr.js"></script>
    <script>
      flatpickr(".datepicker",
      {});

    </script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body>
</html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css' rel='stylesheet' type='text/css'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
!function(a,b,c){"undefined"!=typeof module&&module.exports?module.exports=c():a[b]=c()}(this,"verge",function(){function a(){return{width:k(),height:l()}}function b(a,b){var c={};return b=+b||0,c.width=(c.right=a.right+b)-(c.left=a.left-b),c.height=(c.bottom=a.bottom+b)-(c.top=a.top-b),c}function c(a,c){return a=a&&!a.nodeType?a[0]:a,a&&1===a.nodeType?b(a.getBoundingClientRect(),c):!1}function d(b){b=null==b?a():1===b.nodeType?c(b):b;var d=b.height,e=b.width;return d="function"==typeof d?d.call(b):d,e="function"==typeof e?e.call(b):e,e/d}var e={},f="undefined"!=typeof window&&window,g="undefined"!=typeof document&&document,h=g&&g.documentElement,i=f.matchMedia||f.msMatchMedia,j=i?function(a){return!!i.call(f,a).matches}:function(){return!1},k=e.viewportW=function(){var a=h.clientWidth,b=f.innerWidth;return b>a?b:a},l=e.viewportH=function(){var a=h.clientHeight,b=f.innerHeight;return b>a?b:a};return e.mq=j,e.matchMedia=i?function(){return i.apply(f,arguments)}:function(){return{}},e.viewport=a,e.scrollX=function(){return f.pageXOffset||h.scrollLeft},e.scrollY=function(){return f.pageYOffset||h.scrollTop},e.rectangle=c,e.aspect=d,e.inX=function(a,b){var d=c(a,b);return!!d&&d.right>=0&&d.left<=k()},e.inY=function(a,b){var d=c(a,b);return!!d&&d.bottom>=0&&d.top<=l()},e.inViewport=function(a,b){var d=c(a,b);return!!d&&d.bottom>=0&&d.right>=0&&d.top<=l()&&d.left<=k()},e});

$(document).ready(function() {

  // import view port library function
  jQuery.extend(verge);

  // smooth scrolling of viewport to target
  $('a[href^="#"]').click(function(event) {
    event.preventDefault();
    $('html,body').animate({
      scrollTop: $(this.hash).offset().top - 50
    }, 900);
  });

  $('#down').click(function() {
    $('html,body').animate({
      scrollTop: $('#about').offset().top - 50
    }, 900);
  });

  var currentTime = new Date();
  var year = currentTime.getFullYear();

  // data for the portfolio cards front and back
  var projectData = [{
      title: 'Quotes',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-build-a-random-quote-machine" target="_blank"><i>Build a Random Quote Machine</i></a>. The user is able to show a new random quote and send that quote to Twitter. <strong>Quotes</strong> was designed and optimized to be a mobile web app first.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br> <strong>Graphics Editor:</strong> Gimp, pixlr.com<br> <strong>Images:</strong> lorempixel.com<br> <strong>Fonts:</strong> Font-awesome<br> <strong>Data:</strong> random famous quotes API',

      image: ['http://2am.ninja/img/quotes.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/dojjre'],
        ['Live Site', 'fa-link', 'http://2am.ninja/quotes/']
      ]
    }, {
      title: 'Twitch TV',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-use-the-twitchtv-json-api" target="_blank"><i>Use the Twitchtv JSON API</i></a>. A user can see if Free Code Camp is currently streaming on Twitch.tv.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br> <strong>Fonts:</strong> Ubuntu Mono<br> <strong>Data:</strong> Twitchtv API',

      image: ['http://2am.ninja/img/twitch3.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/jrEBgq']
  //      ,['Live Site', 'fa-link', 'http://2am.ninja/twitch/']
      ]
    }, {
      title: 'Wiki Search',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-build-a-wikipedia-viewer" target="_blank"><i>Build a Wikipedia Viewer</i></a>. A user can search Wikipedia entries in a search box and see the resulting Wikipedia entries.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br> <strong>Graphics Editor:</strong> pixlr.com<br> <strong>Images:</strong> unsplash.com<br> <strong>Data:</strong> Wikipedia API',

      image: ['http://2am.ninja/img/wiki.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/rVRwor']
      ]
    }, {
      title: 'Pomodoro Timer',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-build-a-pomodoro-clock" target="_blank"><i>Build a Pomodoro Clock</i></a>. A user can start a 25 minute pomodoro, and the timer will go off once 25 minutes has elapsed. <strong>Pomodoro Timer</strong> was designed and optimized to be a mobile web app first.</p> <strong>Code:</strong> HTML5, HTML5 Canvas, CSS3, Javascript, jQuery, ion.sound<br> <strong>Layout:</strong> Bootstrap, HTML5 Canvas<br> <strong>Fonts:</strong> IcoMoon',

      image: ['http://2am.ninja/img/timer.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/WvVZyM'],
        ['Live Site', 'fa-link', 'http://2am.ninja/timer/']
      ]
    }, {
      title: 'Local Weather',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-show-the-local-weather" target="_blank"><i>Show the Local Weather</i></a>. A user can see the weather in my current location.. <strong>Local Weather</strong> was designed and optimized to be a mobile web app first.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br> <strong>Images:</strong> flickr.com<br> <strong>Fonts:</strong> Climacons, Open Sans<br> <strong>Data:</strong> Open Weather Map API, IP-API.com Geolocation API',

      image: ['http://2am.ninja/img/weather.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://codepen.io/MutantSpore/full/oXaoxb/']
      ]
    },
    /*                    
                        {
         title: 'Camper News',
         text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-stylize-stories-on-camper-news" target="_blank"><i>Stylize Stories on Camper News</i></a>. The user can browse recent posts from Camper News.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap, Masonary<br> <strong>Graphics Editor:</strong> Gimp, pixlr.com<br> <strong>Images:</strong> unsplash.com<br>  <strong>Data:</strong> Free Code Camp news API',

         image: ['http://2am.ninja/img/news.jpg'],
         site: [
           ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/debug/vOvBqY']
         ]
       }, 
     */
    {
      title: 'Bar Graph',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/visualize-data-with-a-bar-chart" target="_blank"><i>Visualize Data with a Bar Chart </i></a>. The user can see US Gross Domestic Product by quarter, over time, with a mouse over tooltip.</p> <strong>Code:</strong> HTML5, CSS3, D3, SVG, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap',

      image: ['http://2am.ninja/img/bar-graph.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/PNJMpg']
      ]
    }, {
      title: 'Heat Map',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/visualize-data-with-a-heat-map" target="_blank"><i>Visualize Data with a Heat Map</i></a>. The user can view a heat map with data represented both on the Y and X axis, with mouse over tooltip.</p> <strong>Code:</strong> HTML5, CSS3, D3, SVG, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap',

      image: ['http://2am.ninja/img/heat-map.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/VeKNEa']
      ]
    },
    /*                 
                     {
      title: 'Force Graph',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/show-relationships-with-a-force-directed-graph" target="_blank"><i>Show Relationships with a Force Directed Graph</i></a>. The user can see a Force-directed Graph that shows which campers are posting links on Camper News to which domains.</p> <strong>Code:</strong> HTML5, CSS3, D3, SVG, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br>  <strong>Data:</strong> Free Code Camp news API',

      image: ['http://2am.ninja/img/force-graph.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/debug/KVdbMO']
      ]
    }, 
    
    */
    {
      title: 'Tic-Tac-Toe',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/build-a-tic-tac-toe-game" target="_blank"><i>Build a Tic Tac Toe Game</i></a>. The user can play a game of Tic Tac Toe with the computer.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Materialize.css',

      image: ['http://2am.ninja/img/ttt.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/jWWYLo']
      ]
    }
  ];

  // add listener to all the cards for click flipping
  function addListener() {
    var cards = document.querySelectorAll(".card.effect_click");

    for (var i = 0; i < cards.length; i++) {
      clickListener(cards[i]);
    }

    function clickListener(card) {
      card.addEventListener("click", function() {
        this.classList.toggle("flipped");
      });
    }
  }

  // create, populate and show portfolio project cards
  function showProjectCards() {
    var html = '';

    projectData.forEach(function(project) {
      html += '<div class="col-sm-6 col-md-4">';
      html += '<div class="card effect_click"><div class="card_front">';
      html += '<figure><img class="img-responsive" src="' + project.image[0] + '">';
      html += '<figcaption class="project-title">';
      html += project.title;
      html += '</figcaption></figure></div>';

      html += '<div class="card_back"><figure>';
      html += '<div class="project-title">' + project.title + '</div>';
      html += '<figcaption">';
      html += '<div class="project-body">' + project.text + '</div>';
      html += '<div><a data-toggle="tooltip" title="' + project.site[0][0] + '" data-placement="top" href="' + project.site[0][2] + '" target="_blank" class="btn btn-primary btn-lg btn-circle btn-lnk btn-lnk0"><i class="fa ' + project.site[0][1] + '" aria-hidden="true"></i></a>';

      if (typeof project.site[1] !== 'undefined') {
        html += '<a data-toggle="tooltip" title="' + project.site[1][0] + '" data-placement="top" href="' + project.site[1][2] + '" target="_blank" class="btn btn-primary btn-lg btn-circle btn-lnk btn-lnk1"><i class="fa ' + project.site[1][1] + '" aria-hidden="true"></i></a>';
      }

      html += '</div></figcaption></figure></div>';
      html += '</div>';
      html += '</div>';
    });

    $('#theProjects').append(html);
    addListener();
  }

  showProjectCards();
  $(".copyright").append("<span>© " + "2020" + " Fibonia. All rights reserved</span>");

  // turn on bootstrap tooltips
  $('[data-toggle="tooltip"]').tooltip();

  
});
</script>
<style>
#social-footer {
  width: 100%;
  text-align: center;
  color: white;
  background-color: black;
  opacity:0.8;    
}

.fa-stack-1x, .fa-stack-2x {
    left:-1000%;
    top:-110%;
}

#social-footer ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#social-footer ul li {
  display: inline;
  padding: 0.4em;
}

#social-footer a {
/*  color: #939393 !important; */
  color: white !important;
}

.blacktext {
  color: black;
}

footer {
  width: 100vw;
  position: fixed;
  bottom: -6%;
  left: 0;
  padding: 1% 5%;
  text-align: center;
  background-color: #000;
  opacity: 1;
  z-index: 100;

}




.fa-stack {
  margin: -2px;
}

.copyright {
  padding-bottom: 8px;
  padding-top: 2px;
  color: #555;
}

#down {
  position: absolute;
  opacity: 0.20;
  left: 50%;
  bottom: 10%;
  cursor: pointer;
}

.card {
  position: relative;
  width: 300px;
  height: 365px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 20px;
  -webkit-perspective: 2000px;
  -moz-perspective: 2000px;
  perspective: 2000px;
  cursor: pointer;
}

.card img {
  width: calc(300px - 0px);
  height: calc(365px - 45px);
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  border-style: solid;
  border-color: rgba(0,0,0,0.16);
  border-bottom-width: 1px;
}

.card_front, .card_back {
  position: absolute;
  left: 0px;
  top: 0px;
  width: inherit;
  height: inherit;
  border-style: solid;
  border-width: 0px;
  border-radius: 6px;
  border-color: #666;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.9s ease-in-out;
  transition: transform 0.9s ease-in-out;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)
}


.card_front:hover, .card_back:hover {
  left: -4px;
  top: -4px;
  box-shadow: 4px 4px 10px 0px rgba(0, 0, 0, 0.5);
}

.card_front {
  background-color: white;
}

.card_back {
  background-color: #fafffc;
  -webkit-transform: rotateY(179deg);
  -ms-transform: rotateY(179deg);
  transform: rotateY(179deg);
}

.card.effect_click.flipped .card_front {

  -webkit-transform: rotateY(-179deg);
  -ms-transform: rotateY(-179deg);
  transform: rotateY(-179deg);
}

.card.effect_click.flipped .card_back {

  -webkit-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  transform: rotateY(0deg);
}

.highlight {
  opacity: 0.6;
}

.highlight:hover {
  opacity: 1;
}



@media only screen and (max-width: 768px) {
  #contact {
    background-attachment: scroll;
  }

  #twoam {
    background-attachment: scroll;
  }

  .tagline1 {
    font-size: 1.2em;
  }

  .tagline2 {
    font-size: 2.8em;
  }

  .tagline3a, .tagline3b, .tagline3c {
    font-size: 1em;
  }

  .section-title {
    font-size: 2.6em;
  }

  .line {
    height: 2px;
    width: 70px;
    position: relative;
    top: -10px;
    display: inline-block;
    background-color: #666;
  }

  .icon-me {
    font-size: 7.5empx;
    padding-top: 10px;
    padding-bottom: 15px;
  }

  .icon-contact {
    font-size: 4.5em;
    padding-top: 10px;
    padding-bottom: 10px;
  }
}
</style>
</head>
<link rel="icon" type="image/png" href="logo.png"><body>
    <footer id='social-footer'>

<div class="text-center copyright">
        </div>
        <ul>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Email" data-placement="top" href="mailto:2am.ninja@outlook.com">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-envelope fa-stack-1x blacktext"></i>
                </a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="FreeCodeCamp" data-placement="top" href="https://www.freecodecamp.com/mutantspore" target="_blank">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-fire fa-stack-1x blacktext"></i>
                </a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Linkedin" data-placement="top" href="https://www.linkedin.com/in/brucewilliamyoung" target="_blank"><i class="fa fa-linkedin-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Twitter" data-placement="top" href="https://twitter.com/mutantspore" target="_blank"><i class="fa fa-twitter-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="GitHub" data-placement="top" href="https://github.com/mutantspore" target="_blank"><i class="fa fa-github-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="CodePen" data-placement="top" href="https://codepen.io/MutantSpore/" target="_blank">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-codepen fa-stack-1x blacktext"></i>
                </a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Facebook" data-placement="top" href="https://www.facebook.com/bruce.young.7505" target="_blank"><i class="fa fa-facebook-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Google+" data-placement="top" href="https://plus.google.com/102948303758999079100/posts/p/pub?hl=en" target="_blank"><i class="fa fa-google-plus-square fa-stack-2x"></i></a>
            </li>

        </ul>



        <


    </footer>

</body>
</html>
</body></html>

    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
<div id="app"></div>

<nav role="navigation">
  <div class = "fade-in" id="menuToggle">
<a href="logout.php" target="_self" class="icon-link1 sign-link" style = "color: white">Sign Out</a><a target="_self" class="icon-link2 sign-link2" style = "color: white"></a><a href="https://www.fibonia.com/1/html/pages-profile.php" target="_self" class="icon-link1 sign-link1" style = "color: white">Profile</a>
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="home.php"><li>Home</li></a>
      <a href="offersnew.html"><li>Top Offers</li></a>
      <a href="aboutusnew.html"><li>About</li></a>
      <a href="contactusnew.html"><li>Contact Us</li></a>
      <a href="newsletternew.html"><li>Newsletter</li></a>
      <a href="phonepagenew.html"><li>iOS/Android</li></a>
      <a href="faqnew.html"><li>FAQ</li></a>
      <a href="privacynew.html"><li>Privacy</li></a>
      <a href="termsnew.html"><li>Terms</li></a>
    </ul>
  </div>
</nav>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>
<script >'use strict';


function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var CitiesSlider = function (_React$Component) {
  _inherits(CitiesSlider, _React$Component);

  function CitiesSlider(props) {
    _classCallCheck(this, CitiesSlider);

    var _this = _possibleConstructorReturn(this, _React$Component.call(this, props));

    _this.IMAGE_PARTS = 4;

    _this.changeTO = null;
    _this.AUTOCHANGE_TIME = 4000;

    _this.state = { activeSlide: -1, prevSlide: -1, sliderReady: false };
    return _this;
  }

  CitiesSlider.prototype.componentWillUnmount = function componentWillUnmount() {
    window.clearTimeout(this.changeTO);
  };

  CitiesSlider.prototype.componentDidMount = function componentDidMount() {
    var _this2 = this;

    this.runAutochangeTO();
    setTimeout(function () {
      _this2.setState({ activeSlide: 0, sliderReady: true });
    }, 0);
  };

  CitiesSlider.prototype.runAutochangeTO = function runAutochangeTO() {
    var _this3 = this;

    this.changeTO = setTimeout(function () {
      _this3.changeSlides(1);
      _this3.runAutochangeTO();
    }, this.AUTOCHANGE_TIME);
  };

  CitiesSlider.prototype.changeSlides = function changeSlides(change) {
    window.clearTimeout(this.changeTO);
    var length = this.props.slides.length;

    var prevSlide = this.state.activeSlide;
    var activeSlide = prevSlide + change;
    if (activeSlide < 0) activeSlide = length - 1;
    if (activeSlide >= length) activeSlide = 0;
    this.setState({ activeSlide: activeSlide, prevSlide: prevSlide });
  };

  CitiesSlider.prototype.render = function render() {
    var _this4 = this;

    var _state = this.state;
    var activeSlide = _state.activeSlide;
    var prevSlide = _state.prevSlide;
    var sliderReady = _state.sliderReady;

    return React.createElement(
      'div',
      { className: classNames('slider', { 's--ready': sliderReady }) },
      React.createElement(
        'p',
        { className: 'slider__top-heading' },
        'You only need to follow three simple steps!'
      ),
      React.createElement(
        'div',
        { className: 'slider__slides' },
        this.props.slides.map(function (slide, index) {
          return React.createElement(
            'div',
            {
              className: classNames('slider__slide', { 's--active': activeSlide === index, 's--prev': prevSlide === index }),
              key: slide.city
            },
            React.createElement(
              'div',
              { className: 'slider__slide-content' },
              React.createElement(
                'h3',
                { className: 'slider__slide-subheading' },
                slide.country || slide.city
              ),
              React.createElement(
                'h2',
                { className: 'slider__slide-heading' },
                slide.city.split('').map(function (l) {
                  return React.createElement(
                    'span',
                    null,
                    l
                  );
                })
              ),
              React.createElement(
                'p',
                { className: 'slider__slide-readmore',onClick: function onClick(){window.location = 'offersnew.html'}},
                'read more'
              )
            ),
            React.createElement(
              'div',
              { className: 'slider__slide-parts' },
              [].concat(Array(_this4.IMAGE_PARTS).fill()).map(function (x, i) {
                return React.createElement(
                  'div',
                  { className: 'slider__slide-part', key: i },
                  React.createElement('div', { className: 'slider__slide-part-inner', style: { backgroundImage: 'url(' + slide.img + ')' } })
                );
              })
            )
          );
        })
      ),
      React.createElement('div', { className: 'slider__control', onClick: function onClick() {
          return _this4.changeSlides(-1);
        } }),
      React.createElement('div', { className: 'slider__control slider__control--right', onClick: function onClick() {
          return _this4.changeSlides(1);
        } })
    );
  };

  return CitiesSlider;
}(React.Component);

var slides = [{
  city: 'Paris',
  country: 'France',
  img: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/paris.jpg'
}, {
  city: 'Rio De Janeiro',
  country: 'Brazil',
  img: 'https://wallpapersdsc.net/wp-content/uploads/2016/09/Rio-De-Janeiro-HD-Background.jpg'
}, {
  city: 'Venice',
  country: 'Italy',
  img: 'https://cdn.steemitimages.com/DQmZURjvPJHLLSvMSEadqun8qwjDU9dUmht73ittqUxijwF/VENICE-3.jpg'
}, {
  city: 'Hong Kong',
  country: 'Hong Kong',
  img: 'https://7wallpapers.net/wp-content/uploads/3_Hong-Kong.jpg'
}, {
  city: 'Prague',
  country: 'Czech Republic',
  img: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/prague.jpg'
}];

ReactDOM.render(React.createElement(CitiesSlider, { slides: slides }), document.querySelector('#app'));
//# sourceURL=pen.js
  	$(window).load(function() {
		// Animate loader off screen
		$(".load").fadeOut("slow");;
	});

</script>