<?php 
	require 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/petcatalog.css">
        <title>Adopt a Pet Today!</title>
    </head>
    <body>

    <div id="page">
        <header id="header">
            <div id="title">
                <h1 id="adopt">Adopt a Pet Today!</h1>
                <h4 id="initiative">A City of Muntinlupa Initiative</h4>
            </div>
            <img id="catdogpic" src="assets/images/catdog.jpg" alt="Image of Cat and Dog">
        </header>
        <nav id="nav">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Adopt a Dog</a></li>
                <li><a href="">Adopt a Cat</a></li>
                <li><a href="">Contact Us</a></li>
                
                <!-- Links below should only be shown for Admin  -->
                <li><a href="">Administration</a></li>
                <li><a href="settings.php">System Settings</a></li>
            </ul>
        </nav>
<!-- end header -->