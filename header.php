<?php
	@session_start();
	header("Cache-control: private"); 			// Makes IE re-fill a from with the entered data when you hit the back button
	require_once("functions.php");
	require_once('db.php');
?>
<html>
<head>
    <title>City of Heroes Freedom Account Portal</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
	<script src="jquery-3.4.1.min.js"></script>
    <script>
	function copyToClipboard(e) {
	    var tempItem = document.createElement('input');

	    tempItem.setAttribute('type','text');
	    tempItem.setAttribute('display','none');

	    let content = e;
	    if (e instanceof HTMLElement) {
			content = e.innerHTML;
	    }

	    tempItem.setAttribute('value',content);
	    document.body.appendChild(tempItem);

	    tempItem.select();
	    document.execCommand('Copy');

	    tempItem.parentElement.removeChild(tempItem);
	}
    </script>
</head>
<body>

<div id="blueside">
	<img src="graphics/renders/psyche.png" class="char_img_glow">
</div>

<div id="redside">
	<img src="graphics/renders/widow.png" class="char_img_glow">
</div>

<div id="center_col">

	<div id="logo_area">
		<img id="logoc" src="graphics/logos/CoHlogo_sm.png">
		<img id="logov" src="graphics/logos/CoVlogo_sm.png">
	</div>

	<div id="content">
	
