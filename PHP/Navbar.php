<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="Author" content="Ivando Tande">
	<title>PCPartPicker Malaysia | Welcome about</title>
	<link rel="stylesheet" href="../css/Style.css">
</head>
<header>
<div class="container">
    <div id="branding">
        <h1><span class="highlight">PCpartPicker </span>Malaysia</h1>
    </div>
    <nav>
        <ul>
            <li class="<?php if($active == 'home') echo"active"?>">
                <a href="index.html">Home</a>
            </li>
            <li class="<?php if($active == 'About') echo"active"?>">
                <a href="About.html">About Us</a>
            </li>
            <li <?php if($active == 'Builder') echo"active"?>>
                <a href="Builder.HTML">Start Building</a>
            </li>          
            <a href = "login.html">
                <button class="LRbutton <?php if($active == 'login') echo"active"?>" >Login</button>
            </a>
            <a href = "Register.html">
                <button class="LRbutton <?php if($active == 'register') echo"active"?>" >Register</button>
            </a>
        </ul>
    </nav>
</div>
</header>

