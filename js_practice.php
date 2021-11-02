<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap_4/css/bootstrap.min.css">
    <style>
        .jumbotron{
            border-radius: 10px;
            background-color: #3300aa;
            color: white;
        }
        .jumbotron:hover{
            background-image: linear-gradient(to right,lightcoral , yellow);

        }
    </style>


       <title>Student Form</title>
       </head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Welcome to JavaScript</h1>
    </div>
    <div class="text-center">
        <button class="btn btn-outline-primary" onclick="document.getElementById('myImage').src='assets/images/pic_bulbon.gif'">Turn on the light</button>
        <button class="btn btn-outline-success" onclick="document.getElementById('myImage').src='assets/images/pic_bulboff.gif'">Turn off the light</button>
    </div>
    <div class="bulb text-center mt-5">
        <img id="myImage" src="assets/images/pic_bulboff.gif" style="width:100px" />
    </div>
</div>
<script>
    //CLick Event
    // Tag => Element
    // Web page => document
</script>
</body>
<?php
//echo'<pre>';
//session_start();
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
?>