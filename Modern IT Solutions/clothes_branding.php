<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes and Utensils Branding</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .service-details-container {
            background-color: #98b3ce;
            padding: 40px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .service-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .service-container:hover {
            transform: scale(1.05);
        }
        .service-icon {
            font-size: 40px;
            color: #007bff;
        }
        .service-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }
        .service-description {
            font-size: 14px;
            color: #6c757d;
            margin-top: 10px;
        }
        .read-more-btn {
            margin-top: 15px;
            display: inline-block;
            background-color: #98b3ce;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .read-more-btn:hover {
            background-color: #0056b3;
        }
         /* Navbar */
         .navbar {
            background-color: #154c79; /* Black background */
        }

        .navbar-brand, .nav-link {
            color: #ff6600 !important; /* Orange text */
        }

        .nav-link:hover {
            color: #ffffff !important; /* White text on hover */
        }
 /* Footer */
        footer {
            background-color: #154c79; /* Black background */
            color: #ff6600; /* Orange text */
            padding: 15px 0;
            text-align: center;
            border-top: 3px solid; /* Orange border */
        }

        footer p {
            margin: 0;
        }
        .service-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }
        
        .img-resize {
        height: 250px; /* Adjust this value as needed */
        object-fit: cover; /* Ensures the image covers the container without distortion */
        width: 100%; /* Full width of the container */
        border-radius: 8px; /* Optional: rounded corners for a cleaner look */
    }

.carousel-item img {
    width: 80%; /* Adjust this percentage to fit your needs */
    height: auto;
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Enhanced shadow */
    margin: 0 auto; /* Center the image */
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Modern IT Solutions</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="services.php">Services <span class="sr-only">(current)</span></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container mt-5">
    <div class="service-details-container">
        <h2>Clothes and Utensils Branding</h2>
        <p>Personalize your clothing and utensils with our high-quality branding services. We provide customized designs that will make your brand stand out, whether it's for corporate identity or personal use.</p>
        
        <!-- Image Row -->
        <div class="row">
            <div class="col-md-2">
                <img src="branding/tshirt 4.jpg" alt="T-shirts" class="img-fluid img-resize">
            </div>
            <div class="col-md-2">
                <img src="branding/hoodie.png" alt="Hoodies" class="img-fluid img-resize">
            </div>
            <div class="col-md-2">
                <img src="branding/vehicle branding.png" alt="Reflectors" class="img-fluid img-resize">
            </div>
            <div class="col-md-2">
                <img src="branding/cap.png" alt="Caps" class="img-fluid img-resize">
            </div>
            <div class="col-md-2">
                <img src="branding/mug 3.jpg" alt="Packaging Bags" class="img-fluid img-resize">
            </div>
        </div>

        <h3>Our Offerings Include:</h3>
        <ul>
            <li>T-shirts</li>
            <li>Hoodies</li>
            <li>Reflectors</li>
            <li>Caps</li>
            <li>Packaging Bags</li>
        </ul>
        <p>We offer top-tier branding services that ensure your clothes and utensils represent your brand in style. Get in touch for customized solutions!</p>
    </div>
</section>

<footer>
    <p>&copy; 2024 Modern IT Solutions. All rights reserved. <a href="#privacy" style="color: #ff6600;">Privacy Policy</a> | <a href="#terms" style="color: #ff6600;">Terms of Service</a></p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
