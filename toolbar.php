<?php
	/* barMode Options:
		- none
		- settings
		- plus
		- refresh
		- save
	*/

	/* Echo Standard Stuff */
	echo '<ul class="toolBar">';
	echo '<li class="toolBarItem"> <a href='.$page_backlink.' class="toolBarText"><</a>';
	echo '<li class="toolBarItem_Center"> <p id="toolBarText_PageName">'.$page_title.'</p>';
	
	/* Decide What Buttons to Echo */
	if($barMode[0] != "none") {
		foreach($barMode as $val) {
			if($val == "logOut") { // Log Out is only avalible on Root files (homepage.php, index.php, etc)
				echo '<li class="toolBarItem_Right"> <a href="actions/logoutAction" class="toolBarText">Log Out</a>';
			} else if($val == "settings") {
				echo '<li class="toolBarItem_Right"> <button type="button" class="toolBarItem_Button" id="TOOLBAR_SETTINGS" onclick="TOOLBAR_SETTINGS_BTN();">Settings</button>';
			} else if ($val == "plus") {
				echo '<li class="toolBarItem_Right"> <button type="button" class="toolBarItem_Button" id="TOOLBAR_PLUS" onclick="TOOLBAR_PLUS_BTN();">Add</button>';
			} else if ($val == "refresh") {
				echo '<li class="toolBarItem_Right"> <button type="button" class="toolBarItem_Button" id="TOOLBAR_REFRESH" onclick="TOOLBAR_REFRESH_BTN();">Refresh</button>';
			} else if ($val == "save") {
				echo '<li class="toolBarItem_Right"> <button type="button" class="toolBarItem_Button" id="TOOLBAR_SAVE" onclick="TOOLBAR_SAVE_BTN();">Save</button>';
			}
		}
	}
	
	/* Echo Standard End Cap */
	echo '</ul>';
?>