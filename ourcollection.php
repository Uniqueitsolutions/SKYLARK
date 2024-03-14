<?php
error_reporting(0);
function jay($dir)
{
    $directory3 = $dir; // Replace this with the path to your directory/subfolder

    if (is_dir($directory3)) {
        $subfolders3 = scandir($directory3);
        $foundSubfolder = false; // Initialize a flag to track if at least one subfolder is found
        foreach ($subfolders3 as $subfolder3) {
            if (is_dir($directory3 . '/' . $subfolder3) && $subfolder3 != '.' && $subfolder3 != '..') {
               
                $foundSubfolder = true; // Set flag to true if at least one subfolder is found
            }
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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skylark Ceramic</title>
    <link rel="stylesheet" href="css/ourcollection.css">
    <!-- meta og -->
    <meta property="og:type" content="Website">
    <meta property="og:title" content="Skylark Ceramic">
    <meta property="og:description" content="Skylark Ceramic is a known entity, specialized in manufacturing, exporting, and supplying a variety of products in the regional and global marketplaces.">
    <meta property="og:image" content="https://www.porcelaintiles.in/includes/blog/why-choose-wood-floor-tiles-over-wooden-flooring.webp">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <!-- meta og -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <!-- fontawasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawasome -->
    <!-- animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- animated -->
    <!-- wow -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- wow -->
    <!-- captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- captcha -->
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="Home">
                <img class="wow animate__animated animate__flash" src="img/Skylark logo.png" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item" id="li">
                        <a class="nav-link active me-3 " aria-current="page" href="Home">Home</a>
                    </li>
                    <li class="nav-item" id="li">
                        <a class="nav-link active me-3 " aria-current="page" href="About">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item" id="li">
                        <a class="nav-link active me-3 " aria-current="page" href="Products">
                            <font color="#3f5cff">Our Collection</font>
                        </a>
                    </li>
                    <li class="nav-item" id="li">
                        <a class="nav-link active me-3" aria-current="page" href="Export">Export</a>
                    </li>
                    <li class="nav-item" id="li">
                        <a class="nav-link active me-3" aria-current="page" href="E-catalogue">E-Catalogue</a>
                    </li>
                    <li class="nav-item dropdown" id="li1">
                        <a class="nav-link active me-3 dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Utilities
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://tilescalculators.com/" target="_blank">Tiles Calculator</a></li>
                            <li><a class="dropdown-item" href="Paking">Paking Details</a></li>
                            <li><a class="dropdown-item" href="Technical">Technical Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" id="li">
                        <a class="nav-link active me-3" aria-current="page" href="Contact">Contact</a>
                    </li>
                    <li class="nav-item" id="li">
                        <a class="nav-link active me-5" aria-current="page" href="#" onclick="doGTranslate('ru|en');return false;" title="English" class="gflag nturl"><i class="fa-solid fa-language"></i> Languages</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="google_translate_element2"></div>
    <!-- navigation bar -->
 
    <!-- product -->
    <div class="container">
        <div class="tab mt-3">
            <?php
            // Path to the directory containing folders
            $folderPath = 'img/Product_final/' . $_GET['foldername'] . '/';

            // Get the list of folders
            $subfolders = scandir($folderPath);

            // Exclude "." and ".." from the list
            $subfolders = array_diff($subfolders, array('.', '..'));
            sort($subfolders);
            $subfolders = array_reverse($subfolders);

            // Display the list of subfolders
            $i = 0;
            foreach ($subfolders as $subfolder) {
                if (is_dir($folderPath . $subfolder)) {
                    // Encode the subfolder name for JavaScript use
                    $encodedSubfolder = htmlspecialchars(json_encode($subfolder), ENT_QUOTES, 'UTF-8');
                    if ($i == 0) {
                        echo '<button class="tablinks" id="defaultOpen" onclick="openCity(event, ' . $encodedSubfolder . ')">' . $subfolder . '</button>';
                    } else {
                        echo '<button class="tablinks" onclick="openCity(event, ' . $encodedSubfolder . ')">' . $subfolder . '</button>';
                    }
                    $i++;
                    // Create tab button with appropriate attributes
                }
            }
            ?>
        </div>
<div>
    
</div>
        <?php
        $i = 0;
        foreach ($subfolders as $subfolder) {
            if (is_dir($folderPath . $subfolder)) {
                // Encode the subfolder name for JavaScript use
                $encodedSubfolder = htmlspecialchars(json_encode($subfolder), ENT_QUOTES, 'UTF-8');
                // Create tab button with appropriate attributes
        ?>
                <div id=<?php echo $subfolder; ?> class="tabcontent">
                <?php 

                ?>
                    <div id="main-box" class="mt-3">
                        <?php
                        // Path to the directory containing images	
                        $imageDir = 'img/Product_final/' . $_GET['foldername'] . '/' . $subfolder . '/';
                        // Open a directory handle
                        $dirHandle = opendir($imageDir);

                        
                        while ($file = readdir($dirHandle)) {
                             // Check if the file is not "." or ".."
    if ($file != "." && $file != "..") {
        $filePath = $imageDir  . $file;
$i = 1;
        // If it's a file
        if (is_file($filePath)) {
            // Check if the file is an image (you can add more image formats if needed)
            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                // Display the image with caption
                echo '<div class="product-box position-relative">';
                echo '<img src="' . $filePath . '" alt="' . $file . '" class="img-fluid">';
                echo '<div class="position-absolute bottom-0 end-0 text-light bg-dark w-75 p-2 fw-bold">' . $file . '</div>';
                echo '</div>';
            }
        } 
        // If it's a directory
        elseif (is_dir($filePath)) {
            // Iterate through subdirectories
            $subfolders = scandir($filePath);
            echo '<div class="d-flex">'.$file.'</div >';
            $count = 0;
            foreach ($subfolders as $subfolder) {
                if ($count >= 2) {
                    // Your code here
                    $imageDirabc = '';
                    // Display the image with caption
                    echo '<div class="product-box position-relative">';
                    echo '<img src="' . $filePath . '/' . $subfolder . '" alt="' . $subFolderFile . '" class="img-fluid">';
                    echo '<div class="position-absolute bottom-0 end-0 text-light bg-dark w-75 p-2 fw-bold">' . $subfolder . '</div>';
                    echo '</div>';
                }
                $count++;
            }
        }
    }
                            
                            
                        }
                    
                         

                        // Loop through the directory
                       
                        // Close the directory handle
                        closedir($dirHandle);
                        ?>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <!-- product -->
    <!-- footer -->
    <div class="container-fluid d-flex justify-content-center align-items-center footer mt-5">
        <div class="container row d-flex justify-content-between">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" id="icn">
                <div>
                    <h3 class="text-light">
                        <font color="#3f5cff"> FOLLOW</font> US
                    </h3>
                    <div class="icons w-50 col-12 fs-3 mt-3 d-flex justify-content-between wow animate__animated animate__fadeInLeft">
                        <a href="https://www.facebook.com/skylark.ceramica" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.instagram.com/skylark_ceramica/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/skylark-ceramica-8335002aa/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <p class="d-block text-light mt-3">2024 SKYLARK CERAMIC | DESIGN & MANAGED :<font color="#3f5cff"> Unique It Solution</font>
                </p>
            </div>
            <div class="d-flex col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 w-auto wow animate__animated animate__fadeInLeft" id="lnk">
                <div class="links">
                    <a href="Home" class="d-block">HOME</a>
                    <a href="About" class="d-block">About Us</a>
                    <a href="Export" class="d-block">EXPORT</a>
                </div>
                <div class="ms-5 links">
                    <a href="E-catalogue" class="d-block">DOWNLOADS</a>
                    <a href="certificates.php" class="d-block">CERTIFICATES</a>
                    <a href="Contact" class="d-block">CONTACT</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 w-auto wow animate__animated animate__fadeInRight" id="cnt">
                <div class="links">
                    <a href="" class="d-block"><i class="fa-solid fa-phone"></i> +91 9724773285</a>
                    <a href="" class="d-block"><i class="fa-solid fa-phone"></i> +91 9725267929</a>
                    <a href="" class="d-block"><i class="fa-solid fa-envelope"></i> info@skylarkceramica.com</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 w-auto wow animate__animated animate__fadeInRight" id="add">
                <div class="links">
                    <h4 class="text-light">Skylark Ceramic</h4>
                    <p class="text-light">SHOP NO.44,SHAKTI CHEMBER-1,<br>
                        8A,NATIONAL HIGHWAY,LALPAR,<br>
                        MORBI - 363642 (GUJARAT) INDIA.
                    </p>
                    <form id="whatsappForm" class="position-relative">
                        <input class="form-control w-100 py-3 ps-4 pe-5" id="whatsappInput" type="text" placeholder="Type Message">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <script src="assest/js/script.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
</body>

</html>