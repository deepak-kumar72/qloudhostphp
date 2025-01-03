<?php
// Include the meta data
include 'meta.php';

// Determine the current page
$page = basename($page);
// Set a default class if needed
$page_class = $page ? $page : 'default';
// Check if the meta data for the current page exists
if (!isset($meta_data[$page])) {
  // Fallback to a default meta data if the page is not defined
  $page = 'default';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Dynamic Meta Tags -->
  <title><?php echo $meta_data[$page]['title']; ?></title>
  <meta name="description" content="<?php echo $meta_data[$page]['description']; ?>">
  <meta name="keywords" content="<?php echo $meta_data[$page]['keywords']; ?>">


   <!-- JSON-LD Schema -->
   <?php echo $meta_data[$page]['schema']; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Jost:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="http://localhost/qloudhost/assets/css/stylesheet.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DWWSKYXNZ5"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-DWWSKYXNZ5');
</script>
</head>

<body>
<div class="nav-banner">
<div class="top-nav bg">
<div class="container-fluid">
            <div class="row text-center p-2 top-content">
                <span>
                    <Image src="http://localhost/qloudhost/assets/img/fireImage.png"  alt="fire"  class="me-2" />
                    Save 15% on Offshore DMCA Ignored VPS + 1 Month Free on Annual VPS-
                    <a href="" class="link-light">Grab Now!</a>
                </span>
            </div>
        </div>
    </div>
    <div class="">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container mx-5 nav-section">
                <a class="navbar-brand" href="/">
                    <img src="http://localhost/qloudhost/assets/img/logo.svg" alt="logo" width="60" height="60">
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="offcanvas offcanvas-start"
                    tabindex="-1"
                    id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            <a class="navbar-brand" href="/">
                                <!-- Add logo if needed -->
                            </a>
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item dropdown pe-4">
                                <a class="nav-link nav-option dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Hosting <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="http://localhost/qloudhost/offshore-web-hosting.php">Offshore Hosting</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/qloudhost/offshore-wordpress-hosting.php">Offshore WordPress</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown pe-4">
                                <a class="nav-link nav-option dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    VPS <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="http://localhost/qloudhost/offshore-vps-hosting/">Offshore VPS</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/qloudhost/offshore-vps-hosting/windows-rdp.php">Offshore Windows VPS</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown pe-4">
                                <a class="nav-link nav-option dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Server <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="http://localhost/qloudhost/offshore-dedicated-servers/">Dedicated Server</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/qloudhost/offshore-streaming-server/">Streaming Server</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/qloudhost/offshore-video-hosting.php">Video Hosting</a></li>
                                </ul>
                            </li>
                            <li class="nav-item pe-4"><a class="nav-link nav-option" href="http://localhost/qloudhost/affiliates.php">Affiliate</a></li>
                            <li class="nav-item pe-4"><a class="nav-link nav-option" href="http://localhost/qloudhost/about.php">About</a></li>
                        </ul>
                        <a href="https://my.qloudhost.com/login">
                            <button class="btn signIn-btn nav-signIn">Sign In</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    </div>
</body>

</html>