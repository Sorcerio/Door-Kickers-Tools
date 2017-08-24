<?php
    // Variables
    $results_array = array();

    // Get Directory Names
    if (is_dir($folder)) {
        if ($handle = opendir($folder)) {
                while(($file = readdir($handle)) !== FALSE){
                        $results_array[] = $file;
                }
                
                closedir($handle);
        }
    }
    
    // Clean Array
    $results_array = array_diff($results_array, [".", ".."]);

    // Parse the names
    foreach($results_array as $name) {
        echo '<option value="'.$name.'">'.str_replace("_"," ",substr($name,0,-4)).'</option>';
    }
?>