<?php
include 'header.php';

?>

<!Doctype html>
<html>
  <head>
    <title>Image Slider</title>
    <style>
      body {
        margin: 10px auto;
        text-align: center;
      }
      .content {
        max-width: 8000px;
        text-align: left;
        margin: auto;
      }
      .simple-ss {
        width: 8000px;
        height: 400px;
        background-color: #eeeeee;
        margin: auto;
        background-image: url("images/slide1.jpg");
        animation-name: slide;
        animation-duration: 10s;
        animation-direction: normal;
        animation-timing-function: ease;
        animation-iteration-count: infinite;
      }
      @keyframes slide {
        0% {
          background-position: 0 0;
        }
        16.66% {
          background-position: 0 0;
        }
        33.32% {
          background-position: -800px 0;
        }
        49.98% {
          background-position: -800px 0;
        }
        66.64% {
          background-position: -1600px 0;
        }
        83.30% {
          background-position: -1600px 0;
        }
        100% {
          background-position: 0 0;
        }
      }
    </style>
  </head>

    <div class="simple-ss"></div>
   

 <h1 align="left">ABOUT US</h1>
  <br><br><br>

<div>
<div align="left"><nbps><nbps><nbps> Objective of dbms lab open ended project is to develop GUI that will help the book the event which is required to them online </div>
<p align="left"><nbps><nbps><nbps>In the proposed event management system, everything is web-based. This will immediately reduce the manual processing, thereby increasing the speed of the event management process. There are various functions and modules in the system to perform various features. This overall increases management productivity, eliminates paper works, reduces manpower, and proves to be very economical in the long run.
<p align="left"><nbps><nbps><nbps>So we created website which will help people to book the event required to them.</p>
<br><br>
</div>
    </div>
    <br>
    <h1 align="left">Gallery</h1>
    <h2>Engagements</h2>
    <img src="images/eee.jpg" alt="Italian Trulli" width="900" height="300">
    <h2>Birthdays</h2>
    <img src="images/bir.jpg" alt="Italian Trulli" width="900" height="300">
    <h2>weddings</h2>
    <img src="images/wed.jpg" alt="Italian Trulli" width="900" height="300">
    <h2>Naming Cermony</h2>
    <img src="images/nnn.jpg" alt="Italian Trulli" width="900" height="300">
    

    </html>