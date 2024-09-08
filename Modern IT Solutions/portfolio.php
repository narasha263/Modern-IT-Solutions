<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Modern IT Solutions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .img-resize {
        height: 250px; 
        object-fit: cover; 
        width: 100%; 
        border-radius: 8px; 
    }
    
    .navbar {
            background-color: #154c79; /* Black background */
        }

        .navbar-brand, .nav-link {
            color: #ff6600 !important; /* Orange text */
        }

        .nav-link:hover {
            color: #ffffff !important; /* White text on hover */
        }
        </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Modern IT Solutions</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="digital_marketing.php">Marketing</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="portfolio.php">Portfolio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Portfolio Section -->
    <section id="portfolio" class="container mt-5">
    <h2 class="text-center mb-4">OUR PORTFOLIO</h2>
               <B> DIGITAL MARKETING,2D LOGOS,3DLOGOS, BANNERS, POSTERS, PHOTO MOUNTS, CERTIFICATES, FLYERS, COMPANY CATALOGUE,GRAPHICS AND BRANDING </B>
    <div class="row">
        <div class="col-md-4 mb-4">
            <img src="branding/branded tshirt.jpg" class="img-fluid img-resize" alt="Portfolio 1">
        </div>
        <div class="col-md-4 mb-4">
            <img src="branding/branded mugs.jpg" class="img-fluid img-resize" alt="Portfolio 2">
        </div>
        <div class="col-md-4 mb-4">
            <img src="branding/tshirt 5.jpg" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
        <div class="col-md-4 mb-4">
            <img src="graphics/flyers.png" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
        <div class="col-md-4 mb-4">
            <img src="graphics/flyer1.png" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
        <div class="col-md-4 mb-4">
            <img src="graphics/2D LOGO.JPEG" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
        <div class="col-md-4 mb-4">
            <img src="graphics/3D LOGO.JPEG" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
        <div class="col-md-4 mb-4">
            <img src="graphics/DIGI.JPEG" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
        <div class="col-md-4 mb-4">
            <img src="graphics/PHOTO MOUNTS.JPEG" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
        <div class="col-md-4 mb-4">
            <img src="graphics/CERTIFICATES.JPEG" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
        <div class="col-md-4 mb-4">
            <img src="branding/vehicle branding.png" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
        <div class="col-md-4 mb-4">
            <img src=" branding/mug 2.jpg" class="img-fluid img-resize" alt="Portfolio 3">
        </div>
</div>
        <br>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Modern IT Solutions. All rights reserved. <a href="#privacy" style="color: #ff6600;">Privacy Policy</a> | <a href="#terms" style="color: #ff6600;">Terms of Service</a></p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
