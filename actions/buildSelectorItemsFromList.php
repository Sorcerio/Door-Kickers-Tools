<?php
    // Builds select option HTML tags from a file
    // Gets $listName from where the action is included within a select element

    $handle = fopen($listName, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            // process the line read.
            echo '<option value="'.$line.'">'.$line.'</option>';
        }

        fclose($handle);
    } else {
        // error opening the file.
        echo "<h1>I fucked up opening the file</h1>";
    }
?>