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
				<input type="text" name="unitName" id="unitNameTextBox" class="forum_textInput forumItem_wider">
				<br>

				<h3 class="flexBox_Header flexBox_Header_Bold">Faction:</h3>
				<p class="flexBox_Header">Choose the unit's faction.</p>
				<select name="templatePick" id="factionPicker" class="forum_DropDown forumItem_wider">
					<option value="Enemy">Enemy</option>
					<option value="Friendly">Friendly</option>
					<option value="Hostage">Hostage</option>
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
				<p class="flexBox_Header">The view width of the NPC in degrees. Default is 110.</p>
				<input type="number" name="fileName" id="fovDegreesTextBox" class="forum_textInput forumItem_wider" value="110" min="1" max="360">
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
					<?php
						$folder = "AiTypes";
						include "../../actions/generateSelectorItemsFromAiFolder.php";
					?>
				</select>
				<br>

				<button type="button" onclick="compileNPC()" class="forum_Button">Compile NPC</button>
			</forum>
		</div>

		<div class="flexBox" id="templatePickerFlexBox">
			<h3 class="flexBox_Header flexBox_Header_Bold">Queued NPCs:</h3>
			<ul id="queuedNPCList" class="homepageList">
				<h2 id="emptyQueue">No NPCs in Queue</h2>
			</ul>
			<button type="button" onclick="buildNpcFile()" class="forum_Button">Build NPC File</button>
		</div>
	</div>
</body>
<script>
	// Variables
	var currentQueue = 0;
	var npcQueue = [];

	// Compile a single NPC to an Array
	function compileNPC() {
		// Iterate
		currentQueue += 1;

		// Check if list is empty
		if(currentQueue == 0) {
			$("#emptyQueue").show();
		} else {
			$("#emptyQueue").hide();
		}

		// Build NPC array
		var npcItems = [];

		if($("#unitNameTextBox").val().trim() == "") {
			npcItems.push("NO_NAME");
		} else {
			npcItems.push($("#unitNameTextBox").val().trim());
		}
		
		npcItems.push($("#factionPicker").val().trim());

		npcItems.push($("#classPicker").val().trim());

		if($("#weaponPicker").val().trim() == "custom") {
			// Take custom Text
			npcItems.push($("#weaponTextBox").val().trim());
		} else {
			// Take drop down
			npcItems.push($("#weaponPicker").val().trim());
		}

		if($("#armorPicker").val().trim() == "custom") {
			// Take custom Text
			npcItems.push($("#armorTextBox").val().trim());
		} else {
			// Take drop down
			npcItems.push($("#armorPicker").val().trim());
		}

		if($("#fovDegreesTextBox").val().trim() == "") {
			npcItems.push("110");
		} else {
			npcItems.push($("#fovDegreesTextBox").val().trim());
		}
		
		if($("#fovRangeTextBox").val().trim() == "") {
			npcItems.push("99999");
		} else {
			npcItems.push($("#fovRangeTextBox").val().trim());
		}

		if($("#moveSpeedModTextBox").val().trim() == "") {
			npcItems.push("0");
		} else {
			npcItems.push($("#moveSpeedModTextBox").val().trim());
		}

		if($("#turnSpeedModTextBox").val().trim() == "") {
			npcItems.push("0");
		} else {
			npcItems.push($("#turnSpeedModTextBox").val().trim());
		}

		if($("#portraitPicker").val().trim() == "custom") {
			// Take custom Text
			npcItems.push($("#portraitTextBox").val().trim());
		} else {
			// Take drop down
			npcItems.push($("#portraitPicker").val().trim());
		}

		if($("#pistolSpritePicker").val().trim() == "custom") {
			// Take custom Text
			npcItems.push($("#pistolSpriteTextBox").val().trim());
		} else {
			// Take drop down
			npcItems.push($("#pistolSpritePicker").val().trim());
		}

		if($("#rifleSpritePicker").val().trim() == "custom") {
			// Take custom Text
			npcItems.push($("#rifleSpriteTextBox").val().trim());
		} else {
			// Take drop down
			npcItems.push($("#rifleSpritePicker").val().trim());
		}

		if($("#shotgunSpritePicker").val().trim() == "custom") {
			// Take custom Text
			npcItems.push($("#shotgunSpriteTextBox").val().trim());
		} else {
			// Take drop down
			npcItems.push($("#shotgunSpritePicker").val().trim());
		}

		if($("#weaponlessSpritePicker").val().trim() == "custom") {
			// Take custom Text
			npcItems.push($("#weaponlessSpriteTextBox").val().trim());
		} else {
			// Take drop down
			npcItems.push($("#weaponlessSpritePicker").val().trim());
		}

		if($("#legsSpritePicker").val().trim() == "custom") {
			// Take custom Text
			npcItems.push($("#legsSpriteTextBox").val().trim());
		} else {
			// Take drop down
			npcItems.push($("#legsSpritePicker").val().trim());
		}

		if($("#deathSpritePicker").val().trim() == "custom") {
			// Take custom Text
			npcItems.push($("#deathSpriteTextBox").val().trim());
		} else {
			// Take drop down
			npcItems.push($("#deathSpritePicker").val().trim());
		}

		npcItems.push($("#aiPicker").val().trim());

		// Report
		console.log(npcItems);

		// Add to Queue Array
		npcQueue.push(npcItems);

		// Update the Queue Gui
		var html = "<li class='homepageListItem'><h4 class='npcQueue_Text'>"+npcItems[0]+", "+npcItems[1]+" "+npcItems[2]+"</h4></li>";
		$("#queuedNPCList").append(html);
	}

	// Compile all of the NPCs and download the file
	function buildNpcFile() {
		if(currentQueue == 0) {
			// It's an error
			console.log("Nothing is in the queue.");
		} else {
			// Make Action Call
			$.get("../../actions/compileNpcCode.php?npcqueue="+JSON.stringify(npcQueue), function(data, status){
				if(status === "success") {

				} else {
					console.log("Couldn't compile the NPC code.");
				}
			});
		}
	}
</script>
</html>