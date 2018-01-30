<!--
Lead Cntributors: as3eem and krpiyush5
Author URL: http://github.com/as3eem
Author URL: http://github.com/krpiyush5
-->
<?php

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>KNIT | Home</title>
    <link href="<?= base_url() ?>Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?=base_url()?>Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=base_url()?>Public/css/chocolat.css" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="META keywords META keywordsMETA keywordsMETA keywordsMETA keywordsMETA keywordsMETA keywordsMETA keywordsMETA keywords" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="<?=base_url()?>Public/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>Public/css/flexslider.css" type="text/css" media="screen" />
    <!--scrolling-->
    <script type="text/javascript" src="<?=base_url()?>Public/js/move-top.js"></script>
    <script type="text/javascript" src="<?=base_url()?>Public/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <!--scrolling-->
</head>
<body>
<!--top-header-->
<div id="home" class="top-header">
    <div class="container">
        <div class="logo">
            <!-- <h1><a href="index.html">Emplox</a></h1> -->
            <img src="<?=base_url()?>Public/images/KNITlogo.png" style="align-items: center; width: 68%">
        </div>
        <div class="top-menu">
            <span class="menu"><img src="<?=base_url()?>Public/images/nav-icon.png" alt=""/></span>
            <ul>
                <li><a class="scroll" href="#service">News & Announcements</a></li>
                <li><a class="scroll" href="#about">About</a></li>
                <li><a class="scroll" href="#home">Home</a></li>
                <li><a class="scroll" href="#gallery">Gallery</a></li>
                <li><a class="scroll" href="#blog">Blog</a></li>
                <li><a class="scroll" href="#contact">Contact</a></li>
            </ul>
            <!-- script-for-menu -->
            <script>
                $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                });
            </script>
            <!-- script-for-menu -->
        </div>
    </div>
</div>
