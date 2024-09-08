
<? include 'header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Services</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .service-container {
            background-color: #154c79;
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
            background-color: #007bff;
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

<!-- Digital Marketing Services Section -->
<section class="container mt-5">
    <h2 class="text-center mb-4"><b>Digital Marketing Services</b></h2>
    <div class="row">
        <!-- Google Shopping Ads -->
        <div class="col-md-4 mb-4">
            <div class="service-container text-center">
                <img src="digital marketing/1.png" alt="Google Ads" class="img-fluid">
                <h4 class="service-title">Google Shopping Ads</h4>
                <p class="service-description">Take advantage of our expertise in Google Shopping Ads to drive more sales and improve your online presence. We create customized campaigns that align with your goals.</p>
                <a href="google_shopping_ads.html" class="read-more-btn">Read More</a>
            </div>
        </div>
        
        <!-- Interactive Chatbots Services -->
        <div class="col-md-4 mb-4">
            <div class="service-container text-center">
                <img src="digital marketing/1.png" alt="Interactive Chatbots" class="img-fluid">
                <h4 class="service-title">Interactive Chatbots Services</h4>
                <p class="service-description">Enhance customer engagement and provide instant support with our AI-powered chatbots. These chatbots will boost your customer service experience.</p>
                <a href="chatbots_services.html" class="read-more-btn">Read More</a>
            </div>
        </div>
        
        <!-- eCommerce Website Design Services -->
        <div class="col-md-4 mb-4">
            <div class="service-container text-center">
                <img src="digital marketing/1.png" alt="eCommerce" class="img-fluid">
                <h4 class="service-title">eCommerce Website Design Services</h4>
                <p class="service-description">Transform your business with a professional and fully responsive eCommerce website designed to attract and convert visitors into loyal customers.</p>
                <a href="ecommerce_website_design.html" class="read-more-btn">Read More</a>
            </div>
        </div>

        <!-- Influencer Marketing -->
        <div class="col-md-4 mb-4">
            <div class="service-container text-center">
                <img src="digital marketing/1.png" alt="Influencer Marketing" class="img-fluid">
                <h4 class="service-title">Influencer Marketing Services</h4>
                <p class="service-description">Leverage the power of social media influencers to expand your brand's reach and connect with new customers in an authentic way.</p>
                <a href="influencer_marketing.html" class="read-more-btn">Read More</a>
            </div>
        </div>

        <!-- Social Media Marketing -->
        <div class="col-md-4 mb-4">
            <div class="service-container text-center">
                <img src="digital marketing/1.png" alt="Social Media Marketing" class="img-fluid">
                <h4 class="service-title">Social Media Marketing</h4>
                <p class="service-description">Grow your brand through targeted social media campaigns. We manage your accounts, create content, and engage with your audience to increase your visibility.</p>
                <a href="social_media_marketing.html" class="read-more-btn">Read More</a>
            </div>
        </div>
        
        <!-- Google Advertising Services -->
        <div class="col-md-4 mb-4">
            <div class="service-container text-center">
                <img src="digital marketing/1.png" alt="Google Ads Service" class="img-fluid">
                <h4 class="service-title">Google Advertising Services</h4>
                <p class="service-description">Advertise on Google with our expert services. Get your business in front of potential customers who are searching for what you offer with effective pay-per-click campaigns.</p>
                <a href="google_advertising.html" class="read-more-btn">Read More</a>
            </div>
        </div>
        
        <!-- Website Design Service -->
        <div class="col-md-4 mb-4">
            <div class="service-container text-center">
                <img src="digital marketing/1.png" alt="Website Design" class="img-fluid">
                <h4 class="service-title">Website Design Service</h4>
                <p class="service-description">Get a professional, mobile-friendly website that represents your business and helps you achieve your marketing goals.</p>
                <a href="website_design.html" class="read-more-btn">Read More</a>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Modern IT Solutions. All rights reserved. <a href="#privacy" style="color: #ff6600;">Privacy Policy</a> | <a href="#terms" style="color: #ff6600;">Terms of Service</a></p>
    </footer>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
