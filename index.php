<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Door Kickers Tools</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet" type = "text/css" href="css/mainStyle.css">
	<link rel="stylesheet" type = "text/css" href="css/toolbarStyle.css">
	<link rel="stylesheet" type = "text/css" href="src/w3.css">
	<script type="text/javascript" src="src/jquery-3.2.1.min.js"></script>
</head>
<body>
	<!-- Tool Bar -->
	<?php
		$page_title = "Door Kickers Tools | Homepage";
		$page_backlink = "#"; /* # for none */
		$barMode = array("none"); /* "none" for no buttons */
		include("toolBar.php"); 
	?>

	<!-- Main Page -->
	<ul class="homepageList">
		<?php		
			// Variables
			$log_directory = 'Tools';
			$results_array = array();

			// Get Directory Names
			if (is_dir($log_directory)) {
					if ($handle = opendir($log_directory)) {
							while(($file = readdir($handle)) !== FALSE){
									$results_array[] = $file;
							}
							closedir($handle);
					}
			}
			
			// Clean Array ("." and ".." show up sometimes for some reason)
			$results_array = array_diff($results_array, [".", ".."]);

			// Get Config Files from Directories
			foreach($results_array as $value) {
				//echo("[".$value."] ");
				//echo(!strpos($value, '.') . ">");
	
				// Figure Out Link
				$tempOutLink = $log_directory."/".$value;
				
				// Does Config exist?
				if(file_exists($log_directory."/".$value."/tool.cfg")) {
					// Open file
					$tempFile = fopen($log_directory."/".$value."/tool.cfg", "r") or die($value." could not be loaded.");
					
					/// Config Exists
					// Make Text
					$tempName = fgets($tempFile);
					$tempDesc = fgets($tempFile);
						
					// Deploy List Item
					echo '<li class="homepageListItem">';
					echo '<a class="homepageListItem_LinkFormat" href='.$tempOutLink.'/toolIndex.php'.'>';
					echo '<h2 class="homepageListItem_Text"><span id="homepageListItem_Text_Header"><b>'.$tempName.'</b></span>|<span id="homepageListItem_Text_Desc">'.$tempDesc.'</span></h2>';
					echo '</a>';
					echo '</li>';
					
					// Close config
					fclose($tempFile);
					
				} else {
					/// Config does not exist	
					// Make Text
					$tempName = $value;
					$tempDesc = "No .cnfg file was found. Use with caution.";
						
					// Deploy List Item
					echo '<li class="homepageListItem">';
					echo '<a class="homepageListItem_LinkFormat" href='.$tempOutLink.'/toolIndex.php'.'>';
					echo '<h2 class="homepageListItem_Text"><span id="homepageListItem_Text_Header">'.$tempName.'</span>|<span id="homepageListItem_Text_Desc">'.$tempDesc.'</span></h2>';
					echo '</a>';
					echo '</li>';
				}
			}
		?>
	</ul>
</body>
<script>
</script>
</html>