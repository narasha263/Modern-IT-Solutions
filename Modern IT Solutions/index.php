<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern IT Solutions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #ffffff; /* White background */
            margin: 0;
            padding: 0;
        }
        .img-resize {
            height: 250px; /* Adjust this value as needed */
            object-fit: cover; /* Ensures the image covers the container without distortion */
            width: 100%; /* Full width of the container */
            border-radius: 8px; /* Optional: rounded corners for a cleaner look */
        }
        /* Navbar */
        .navbar {
            background-color: #154c79; /* Dark blue background */
        }
        .navbar-brand, .nav-link {
            color: #ff6600 !important; /* Orange text */
        }
        .nav-link:hover {
            color: #ffffff !important; /* White text on hover */
        }
        /* Hero Section */
        .hero-section {
            background: url('branding/branded mugs.jpg') no-repeat center center;
            background-size: cover;
            color: #fff;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Black overlay */
        }
        .hero-section h1, .hero-section p {
            position: relative;
            z-index: 1;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            color: #ff6600; /* Bright orange for the main heading */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .hero-section p {
            font-size: 1.8rem;
            color: #ffffff; /* White for the subheading */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        /* Services Section Styling */
        #services {
            background-color: #154c79; /* Dark blue background */
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
        /* About Section */
        #about {
            background-color: #fff; /* White background */
            color: #333; /* Dark grey text */
            padding: 50px 0;
            border-top: 5px solid #ff6600; /* Orange top border */
        }
        #about h2 {
            font-size: 2rem;
            color: #753408; /* Orange headings */
            margin-bottom: 30px;
            text-align: center;
        }
        #about p {
            font-size: 1.2rem;
            color: #666; /* Grey text */
        }
        /* Contact Section */
        #contact {
            background-color: #154c79; /* Dark blue background */
            color: #fff; /* White text */
            padding: 50px 0;
        }
        #contact h2 {
            font-size: 2rem;
            color: #ff6600; /* Orange headings */
            margin-bottom: 30px;
            text-align: center;
        }
        #contact p {
            font-size: 1.2rem;
        }
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            color: white;
        }
        .contact-form label {
            color: #000; /* Black labels */
        }
        /* Footer */
        footer {
            background-color: #154c79; /* Dark blue background */
            color: #ff6600; /* Orange text */
            padding: 15px 0;
            text-align: center;
            border-top: 3px solid; /* Orange border */
        }
        footer p {
            margin: 0;
        }
        /* Sidebar */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #154c79; /* Dark blue background */
            color: #fff;
            padding: 1rem;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar h3 {
            color: #ff6600; /* Orange headings */
            margin-bottom: 1.5rem;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 0.5rem 0;
            text-decoration: none;
        }
        .sidebar a:hover {
            color: #ff6600; /* Orange text on hover */
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>MENU</h3>
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="digital_marketing.php">Marketing</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="blog.php">Blog</a>
    </div>

    <!-- Main Content -->
    <div style="margin-left: 250px;">
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
                </ul>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <h1>Welcome to Modern IT Solutions</h1>
                <p>Your one-stop solution for all printing and branding needs.</p>
            </div>
        </section>

        <section id="services">
            <h2 class="text-center mb-4">Our Services</h2>
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
                    <a href="clothes_branding.php" class="service-link">
                        <div class="service-container text-center">
                            <div class="service-icon mb-3">
                                <i class="fas fa-tshirt"></i>
                            </div>
                            <h3>Clothes and Utensils Branding</h3>
                            <p>Custom branding for apparel and utensils with high-quality prints and designs.</p>
                        </div>
                    </a>
                </div>
                <!-- Service 3: Brand Identity -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <a href="brand_identity.php" class="service-link">
                        <div class="service-container text-center">
                            <div class="service-icon mb-3">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h3>Brand Identity</h3>
                            <p>Creating and enhancing your brand’s identity with impactful and memorable designs.</p>
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
                            <p>High-quality prints for brochures, flyers, business cards, and more.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section id="about" class="container mt-5">
            <h2 class="text-center mb-4">About Us</h2>
            <p>At Modern IT Solutions, we are dedicated to providing top-notch printing and branding services to help your business stand out. Our team of experts is committed to delivering high-quality results tailored to your needs. Whether you're looking for large format printing, custom branding, or small format printing, we've got you covered.</p>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="container mt-5">
            <h2 class="text-center mb-4">Contact Us</h2>
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </section>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Modern IT Solutions. All rights reserved.</p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
