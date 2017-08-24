<?php
    // Variables
    $outFolder = "Output/";

    // Open File
    $handle = fopen($listName, "w");

    // Prepare array
    $compileQueue = $GET_['npcqueue'];

    // Write Start Line
    fwrite($handle, "<Entities>");

    // Work through the Queue
    foreach($compileQueue as $unit) {
        // Compile Protocol

    }

    // Write End Line
    fwrite($handle, "</Entities>");
?>