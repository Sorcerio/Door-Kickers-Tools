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
		<!--<div class="flexBox" id="templatePickerFlexBox">
			<forum>
				<h3 class="flexBox_Header flexBox_Header_Bold">Pick a Template:</h3>
				<select name="templatePick" id="templatePicker" class="forum_DropDown forumItem_wider">
					<option value="empty">Empty</option>
				</select>
				<button type="button" onclick="chooseTemplate()" class="forum_Button">Confirm</button>
			</forum>
		</div>-->

		<div class="flexBox" id="mainPickerBox">
			<forum>
				<h3 class="flexBox_Header flexBox_Header_Bold">NPC Name:</h3>
				<p class="flexBox_Header">Can be anything. But remember, the player will see this.</p>
				<input type="text" name="fileName" id="fileName" class="forum_textInput forumItem_wider">
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Faction:</h3>
				<p class="flexBox_Header">Choose the unit's faction.</p>
				<select name="templatePick" id="factionPicker" class="forum_DropDown forumItem_wider">
					<option value="Enemy">Enemy</option>
					<!--<option value="Friendly">Friendly</option>-->
				</select>
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Class:</h3>
				<p class="flexBox_Header">Choose the unit's class.</p>
				<select name="templatePick" id="classPicker" class="forum_DropDown forumItem_wider">
					<option value="Assualt">Assault</option>
					<option value="Pointman">Pointman</option>
					<option value="Stealth">Stealth</option>
					<option value="Shield">Shield</option>
					<option value="Breacher">Breacher</option>
				</select>
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Weapons:</h3>
				<p class="flexBox_Header">Choose a vanilla weapon from the dropdown, or link to a custom one.</p>
				<select name="templatePick" id="weaponPicker" class="forum_DropDown forumItem_wider">
					<option value="custom">Custom Weapon</option>
					<?php
						$listName = "LinkLists/weaponList.list";	// Name and Path to File
						include "../../actions/buildSelectorItemsFromList.php";
					?>
				</select>
				<input type="text" name="fileName" id="weaponTextBox" class="forum_textInput forumItem_wider">
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Armor:</h3>
				<p class="flexBox_Header">Choose a vanilla armor from the dropdown, or link to a custom one.</p>
				<select name="templatePick" id="armorPicker" class="forum_DropDown forumItem_wider">
					<option value="custom">Custom Armor</option>
					<?php
						$listName = "LinkLists/armorList.list";	// Name and Path to File
						include "../../actions/buildSelectorItemsFromList.php";
					?>
				</select>
				<input type="text" name="fileName" id="armorTextBox" class="forum_textInput forumItem_wider">
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">FOV, Degrees:</h3>
				<p class="flexBox_Header">The view width of the NPC in degrees. Default is 90.</p>
				<input type="number" name="fileName" id="fovDegreesTextBox" class="forum_textInput forumItem_wider" value="90" min="1" max="360">
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">FOV, Max Range:</h3>
				<p class="flexBox_Header">The maximum range the unit can see. Default is 99999, which is infinite.</p>
				<input type="number" name="fileName" id="fovRangeTextBox" class="forum_textInput forumItem_wider" value="99999" min="1" max="99999">
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Movement Speed Modifier:</h3>
				<p class="flexBox_Header">Modifies how fast or slow the unit can move. Can be positive or negative.</p>
				<input type="number" name="fileName" id="moveSpeedModTextBox" class="forum_textInput forumItem_wider" value="0" min="-50" max="50">
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Turn Speed Modifier:</h3>
				<p class="flexBox_Header">Modifies how fast or slow the unit can turn. Can be positive or negative.</p>
				<input type="number" name="fileName" id="turnSpeedModTextBox" class="forum_textInput forumItem_wider" value="0" min="-50" max="50">
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Portrait:</h3>
				<p class="flexBox_Header">Choose a portrait, or link to a custom one.</p>
				<select name="templatePick" id="portraitPicker" class="forum_DropDown forumItem_wider">
					<option value="custom">Custom Portrait</option>
					<?php
						$listName = "LinkLists/portraitTextures.list";	// Name and Path to File
						include "../../actions/buildSelectorItemsFromList.php";
					?>
				</select>
				<input type="text" name="fileName" id="portraitTextBox" class="forum_textInput forumItem_wider">
				<!-- TODO: Add image of portrait or have selection from image picker -->
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Pistol Sprite:</h3>
				<p class="flexBox_Header">Choose a pistol sprite, or link to a custom one.</p>
				<select name="templatePick" id="pistolSpritePicker" class="forum_DropDown forumItem_wider">
					<option value="custom">Custom Sprite</option>
					<?php
						$listName = "LinkLists/humanTextures.list";	// Name and Path to File
						include "../../actions/buildSelectorItemsFromList.php";
					?>
				</select>
				<input type="text" name="fileName" id="pistolSpriteTextBox" class="forum_textInput forumItem_wider">
				<!-- TODO: Image preview -->
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Rifle Sprite:</h3>
				<p class="flexBox_Header">Choose a rifle sprite, or link to a custom one.</p>
				<select name="templatePick" id="rifleSpritePicker" class="forum_DropDown forumItem_wider">
					<option value="custom">Custom Sprite</option>
					<?php
						$listName = "LinkLists/humanTextures.list";	// Name and Path to File
						include "../../actions/buildSelectorItemsFromList.php";
					?>
				</select>
				<input type="text" name="fileName" id="rifleSpriteTextBox" class="forum_textInput forumItem_wider">
				<!-- TODO: Image preview -->
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Shotgun Sprite:</h3>
				<p class="flexBox_Header">Choose a shotgun sprite, or link to a custom one.</p>
				<select name="templatePick" id="shotgunSpritePicker" class="forum_DropDown forumItem_wider">
					<option value="custom">Custom Sprite</option>
					<?php
						$listName = "LinkLists/humanTextures.list";	// Name and Path to File
						include "../../actions/buildSelectorItemsFromList.php";
					?>
				</select>
				<input type="text" name="fileName" id="shotgunSpriteTextBox" class="forum_textInput forumItem_wider">
				<!-- TODO: Image preview -->
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Weaponless Sprite:</h3>
				<p class="flexBox_Header">Choose a weaponless sprite, or link to a custom one.</p>
				<select name="templatePick" id="weaponlessSpritePicker" class="forum_DropDown forumItem_wider">
					<option value="custom">Custom Sprite</option>
					<?php
						$listName = "LinkLists/humanTextures.list";	// Name and Path to File
						include "../../actions/buildSelectorItemsFromList.php";
					?>
				</select>
				<input type="text" name="fileName" id="weaponlessSpriteTextBox" class="forum_textInput forumItem_wider">
				<!-- TODO: Image preview -->
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Legs Sprite:</h3>
				<p class="flexBox_Header">Choose a legs sprite, or link to a custom one.</p>
				<select name="templatePick" id="legsSpritePicker" class="forum_DropDown forumItem_wider">
					<option value="custom">Custom Sprite</option>
					<?php
						$listName = "LinkLists/humanTextures.list";	// Name and Path to File
						include "../../actions/buildSelectorItemsFromList.php";
					?>
				</select>
				<input type="text" name="fileName" id="legsSpriteTextBox" class="forum_textInput forumItem_wider">
				<!-- TODO: Image preview -->
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Death Sprite:</h3>
				<p class="flexBox_Header">Choose a death sprite, or link to a custom one.</p>
				<select name="templatePick" id="deathSpritePicker" class="forum_DropDown forumItem_wider">
					<option value="custom">Custom Sprite</option>
					<?php
						$listName = "LinkLists/humanTextures.list";	// Name and Path to File
						include "../../actions/buildSelectorItemsFromList.php";
					?>
				</select>
					
				<input type="text" name="fileName" id="deathSpriteTextBox" class="forum_textInput forumItem_wider">
				<!-- TODO: Image preview -->
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">AI Type:</h3>
				<p class="flexBox_Header">Choose an AI type for the NPC.</p>
				<select name="templatePick" id="aiPicker" class="forum_DropDown forumItem_wider">
					<option value="AI_EXAMPLE">AI_EXAMPLE</option>
				</select>
				<br>

				<button type="button" onclick="#" class="forum_Button">Compile</button>
			</forum>
		</div>
	</div>
	<h1></h1>
	
</body>
<script>
	// Start Up
	/*$("#templatePickerFlexBox").show();
	$("#mainPickerBox").hide();

	// Main Functions
	function chooseTemplate() {
		var picker = $("#templatePicker").val();

		if(picker == "empty") {
			$("#templatePickerFlexBox").hide();
			$("#mainPickerBox").show();
		}
	}*/

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