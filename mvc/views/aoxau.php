<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title></title>
</head>
<style type="text/css">
	div{
		padding: 20px;
	}
	#header, #footer{
		background-color: black;
	}
</style>
<body>
	<div id="header"></div>
	<div id="content">
		<?php require_once("./mvc/views/pages/".$data["page"].".php"); ?>
	</div>
</body>
</html>