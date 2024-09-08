<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Identity</title>
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
        <h2>Brand Identity</h2>
        <p>Establish a strong brand identity with our comprehensive services. From logo creation to professional email setup, we provide everything you need to build a recognizable and credible brand.</p>
        <h3>Our Services Include:</h3>
        <ul>
            <li>Company Name Registration</li>
            <li>Logo Design</li>
            <li>Social Media Marketing</li>
            <li>SEO</li>
            <li>Company Profiles</li>
            <li>Professional Emails</li>
            <li>Website Design</li>
            <li>Company Invoices and Letterheads</li>
        </ul>
        <p>Let us help you create a cohesive and professional brand identity. Reach out to learn more!</p>
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