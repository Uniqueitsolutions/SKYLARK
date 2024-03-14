<?php

function jay()
{
    $directory3 = 'img/Product_final/PORCELAIN TILES/600X600MM'; // Replace this with the path to your directory/subfolder
 $count = 0;
    if (is_dir($directory3)) {
        $subfolders3 = scandir($directory3);
        $foundSubfolder = false; // Initialize a flag to track if at least one subfolder is found
        foreach ($subfolders3 as $subfolder3) {
            $imageDir = '';
            if (is_dir($directory3 . '/' . $subfolder3) && $subfolder3 != '.' && $subfolder3 != '..') {
                echo "Subfolder name: $subfolder3 <br>";
                $foundSubfolder = true; // Set flag to true if at least one subfolder is found
                $imageDir = 'img/Product_final/PORCELAIN TILES/600X600MM/' . $subfolder3 . '/';
            }
            if($imageDir != null ){
                    // Open a directory handle
                    $dirHandle = opendir($imageDir);
                // Loop through the directory
                while ($file = readdir($dirHandle)) {
                    die($file);
                    $count++;
                    // Check if the file is an image (you can add more image formats if needed)
                    if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                        // Display the image with caption
                        echo '<div class="product-box position-relative">';
                        echo '<img src="' . $imageDir . $file . '" alt="' . $file . '" class="img-fluid">';
                        echo '<div class="position-absolute bottom-0 end-0 text-light bg-dark w-75 p-2 fw-bold">' . $file . '</div>';
                        echo '</div>';
                    }
                }
            }
            echo "-------------------------------------------- ".$subfolder3."--------------------------- ".$count." <br>";
            $count=0;
        }

        if (!$foundSubfolder) { // Check the flag to determine if any subfolder was found
            return false; // If no subfolder found, return false
        }
    } else {
        echo "Subfolder does not exist.";
        return false; // If the main folder doesn't exist, return false
    }
    return true; // Return true if at least one subfolder is found
}


function issub($directory3){
    if (is_dir($directory3)) {
        $subfolders3 = scandir($directory3);
        $foundSubfolder = false; // Initialize a flag to track if at least one subfolder is found
        foreach ($subfolders3 as $subfolder3) {
            $imageDir = '';
            if (is_dir($directory3 . '/' . $subfolder3) && $subfolder3 != '.' && $subfolder3 != '..') {
                echo "Subfolder name: $subfolder3 <br>";
                $foundSubfolder = true; // Set flag to true if at least one subfolder is found
                $imageDir = 'img/Product_final/HIGHDEPTH ELEVATION/300X600/' . $subfolder3 . '/';
            }
            if(is_dir($imageDir)){
                    // Open a directory handle
                    $dirHandle = opendir($imageDir);
                // Loop through the directory
               die($subfolder3.'  vfcfr');
            }
            echo "-------------------------------------------- ".$subfolder3."---------------------------  <br>";
            $count=0;
        }

        if (!$foundSubfolder) { // Check the flag to determine if any subfolder was found
            return false; // If no subfolder found, return false
        }
    } 
}
jay();
issub('img/Product_final/HIGHDEPTH ELEVATION/300X600');
?>
