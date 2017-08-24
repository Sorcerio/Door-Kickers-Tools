<!DOCTYPE html>
<html> <!-- Tool index.php -->
<head>
	<meta charset="utf-8">
	<title>NPC Creator Tool</title>
	<link rel="icon" type="image/png" href="../../images/icon.png">
	<link rel="stylesheet" type = "text/css" href="toolStyle.css">
	<link rel="stylesheet" type = "text/css" href="../../css/mainStyle.css">
	<link rel="stylesheet" type = "text/css" href="../../src/w3.css">
	<link rel="stylesheet" type = "text/css" href="../../css/toolbarStyle.css">
	<script type="text/javascript" src="../../src/jquery-3.2.1.min.js"></script>
</head>
<body>
	<!-- Tool Bar -->
	<?php
		$page_title = "NPC Creator Tool";
		$page_backlink = "../../index.php"; /* # for none */
		$barMode = array("none"); /* "none" for no buttons */
		include("../../toolBar.php"); 
	?>

	<!-- Main Page -->
	<div class="flexBoxContainer">
		<div class="flexBox" id="templatePickerFlexBox">
			<forum>
				<h3 class="flexBox_Header flexBox_Header_Bold">Pick a Template:</h3>
				<select name="templatePick" id="templatePicker" class="forum_DropDown forumItem_wider">
					<option value="empty">Empty</option>
				</select>
				<button type="button" onclick="chooseTemplate()" class="forum_Button">Confirm</button>
			</forum>
		</div>

		<div class="flexBox" id="mainPickerBox">
			<forum>
				<h3 class="flexBox_Header flexBox_Header_Bold">File Name:</h3>
				<p class="flexBox_Header">No filetypes please. Just the name.</p>
				<input type="text" name="fileName" id="fileName" class="forum_textInput forumItem_wider">
				<br>
				<h3 class="flexBox_Header flexBox_Header_Bold">NPC Name:</h3>
				<p class="flexBox_Header">Can be anything. However, shorter looks better.</p>
				<input type="text" name="fileName" id="fileName" class="forum_textInput forumItem_wider">
				<br>
				<h3 class="flexBox_Header flexBox_Header_Bold">Weapon Selection:</h3>
				<p class="flexBox_Header">Choose a vanilla weapon from the dropdown, or link to a custom one.</p>
				<select name="templatePick" id="weaponPicker" class="forum_DropDown forumItem_wider">
					<option value="GUN_EXAMPLE">GUN_EXAMPLE</option>
					<option value="custom">Custom Weapon</option>
				</select>
				<input type="text" name="fileName" id="weaponTextBox" class="forum_textInput forumItem_wider">
				<br>
				<h3 class="flexBox_Header flexBox_Header_Bold">Armor Selection:</h3>
				<p class="flexBox_Header">Choose a vanilla armor from the dropdown, or link to a custom one.</p>
				<select name="templatePick" id="armorPicker" class="forum_DropDown forumItem_wider">
					<option value="ARMOR_EXAMPLE">ARMOR_EXAMPLE</option>
					<option value="custom">Custom Armor</option>
				</select>
				<input type="text" name="fileName" id="armorTextBox" class="forum_textInput forumItem_wider">
				<br>
				<h3 class="flexBox_Header flexBox_Header_Bold">AI Type:</h3>
				<p class="flexBox_Header">Choose an AI type for the NPC.</p>
				<select name="templatePick" id="aiPicker" class="forum_DropDown forumItem_wider">
					<option value="AI_EXAMPLE">AI_EXAMPLE</option>
				</select>
				<br>
				<h3 class="flexBox_Header flexBox_Header_Bold">Portrait:</h3>
				<p class="flexBox_Header">Choose a portrait, or link to a custom one.</p>
				<select name="templatePick" id="portraitPicker" class="forum_DropDown forumItem_wider">
					<option value="PORTRAIT_EXAMPLE">PORTRAIT_EXAMPLE</option>
					<option value="custom">Custom Portrait</option>
				</select>
				<input type="text" name="fileName" id="portraitTextBox" class="forum_textInput forumItem_wider">
				<!-- TODO: Add image of portrait or have selection from image picker -->
				<br>
				<button type="button" onclick="#" class="forum_Button">Compile</button>
			</forum>
		</div>
	</div>
	<h1></h1>
	
</body>
<script>
	// Start Up
	$("#templatePickerFlexBox").show();
	$("#mainPickerBox").hide();

	// Main Functions
	function chooseTemplate() {
		var picker = $("#templatePicker").val();

		if(picker == "empty") {
			$("#templatePickerFlexBox").hide();
			$("#mainPickerBox").show();
		}
	}

	function compileNPC() {

	}

	// Drop Down Populators
	function populateWeaponList() {

	}

	function populateArmorList() {

	}

	function populateAiList() {

	}
</script>
</html>