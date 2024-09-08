<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Modern IT Solutions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #ffffff; /* White background */
            margin: 0;
            padding: 0;
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

        /* Services Section Styling */
        #services {
            background-color: #154c79; /* Optional: background color for contrast */
            padding: 2rem 1rem;
            border-radius: 0.375rem;
        }

        #services h2 {
            font-size: 2rem;
            color: #ff6600;
            margin-bottom: 1.5rem;
        }

        #services h3 {
            color: #000;
        }

        .service-container {
            border: 1px solid white;
            border-radius: 0.375rem;
            padding: 1rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: box-shadow 0.3s ease;
            background: #ff6600;
        }

        .service-container:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        .service-icon i {
            font-size: 3rem;
            color: #007bff; /* Change icon color as needed */
        }

        .service-container h3 {
            font-size: 1.25rem;
            color: #495057;
            margin: 1rem 0 0.5rem;
        }

        .service-container p {
            font-size: 0.875rem;
            color: #6c757d;
            line-height: 1.5;
        }

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

    <!-- Navbar -->
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <B><h2 class="text-center mb-4">OUR SERVICES</h2></B>
<div class="row">
    <!-- Service 1: Large Format Printing and Branding -->
    <div class="col-md-6 col-lg-3 mb-4">
        <a href="large_format_printing.php" class="service-link">
            <div class="service-container text-center">
                <div class="service-icon mb-3">
                    <i class="fas fa-print"></i>
                </div>
                <h3>Large Format Printing and Branding</h3>
                <p>3D signages, 2D signages, Backlit Banners, Digital Billboards, LED signs, Banners & Stickers</p>
            </div>
        </a>
    </div>
    <!-- Service 2: Clothes and Utensils Branding -->
    <div class="col-md-6 col-lg-3 mb-4">
        <a href="clothes_utensils_branding.php" class="service-link">
            <div class="service-container text-center">
                <div class="service-icon mb-3">
                    <i class="fas fa-tshirt"></i>
                </div>
                <h3>Clothes and Utensils Branding</h3>
                <p>T-shirts, Hoodies, Reflectors, Caps, Packaging bags, etc.</p>
            </div>
        </a>
    </div>
    <!-- Service 3: Brand Identity -->
    <div class="col-md-6 col-lg-3 mb-4">
        <a href="brand_identity.php" class="service-link">
            <div class="service-container text-center">
                <div class="service-icon mb-3">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Brand Identity</h3>
                <p>Company name registration, Logo, Social Media Marketing, SEO, Company Profiles, Professional Emails, Websites, Company Invoices and Letterheads</p>
            </div>
        </a>
    </div>
    <!-- Service 4: Small Format Printing -->
    <div class="col-md-6 col-lg-3 mb-4">
        <a href="small_format_printing.php" class="service-link">
            <div class="service-container text-center">
                <div class="service-icon mb-3">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3>Small Format Printing</h3>
                <p>Fliers, Posters, Business cards, Brochures, Receipt books, Report books, Notebooks, Diaries, etc.</p>
            </div>
        </a>
    </div>
    <!-- Service 5: Digital Marketing -->
    <div class="col-md-6 col-lg-3 mb-4">
        <a href="digital_marketing.php" class="service-link">
            <div class="service-container text-center">
                <div class="service-icon mb-3">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Digital Marketing</h3>
                <p>Boost your online presence with our tailored digital marketing services, including Social Media Marketing, SEO, Email Campaigns, and Google Ads. Reach your target audience and grow your business with our expert strategies.</p>
            </div>
        </a>
    </div>
</div>

<style>
    .service-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }
    .service-container {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .service-container:hover {
        transform: scale(1.05);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    }
    .service-icon {
        font-size: 40px;
        color: #007bff;
    }
</style>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Modern IT Solutions. All rights reserved. <a href="#privacy" style="color: #ff6600;">Privacy Policy</a> | <a href="#terms" style="color: #ff6600;">Terms of Service</a></p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
