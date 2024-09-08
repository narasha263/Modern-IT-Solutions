<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Modern IT Solutions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .navbar {
            background-color: #154c79;
        }

        .navbar-brand, .nav-link {
            color: #ff6600 !important;
        }

        .nav-link:hover {
            color: #ffffff !important;
        }

        h2 {
            color: #154c79;
            font-weight: bold;
        }

        .blog-entry h3 a {
            color: #154c79;
            text-decoration: none;
        }

        .blog-entry h3 a:hover {
            color: #ff6600;
        }

        footer {
            background-color: #154c79;
            color: #ffffff;
        }

        footer a {
            color: #ff6600;
        }

        footer a:hover {
            color: #ffffff;
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
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="blog.php">Blog <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Blog Section -->
    <section id="blog" class="container mt-5">
        <h2 class="text-center mb-4">Our Blog</h2>
        <div class="row">
            <!-- Blog Entries -->
            <div class="col-md-8">
                <div class="blog-entry mb-4">
                    <h3><a href="branding.php">Innovative Branding Solutions for Your Business</a></h3>
                    <p><small>Published on August 30, 2024</small></p>
                    <p>Explore our latest blog post on innovative branding solutions that can help elevate your business. From brand identity creation to large format printing, we cover it all.</p>
                    <a href="branding.php" class="btn btn-primary">Read More</a>
                </div>
                <div class="blog-entry mb-4">
                    <h3><a href="printing.php">The Importance of Quality Printing</a></h3>
                    <p><small>Published on July 25, 2024</small></p>
                    <p>Discover why quality printing is crucial for your business's branding and marketing efforts. Learn more about our high-quality printing services and how they can benefit you.</p>
                    <a href="printing.php" class="btn btn-primary">Read More</a>
                </div>
                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Sidebar -->
            <div class="col-md-4">
                <!-- Blog Search -->
                <div class="blog-search mb-4">
                    <form class="form-inline justify-content-center" action="search.php" method="GET">
                        <input class="form-control" type="text" name="query" placeholder="Search the blog...">
                        <button class="btn btn-primary ml-2" type="submit">Search</button>
                    </form>
                </div>
                <!-- Categories -->
                <div class="blog-categories mb-4">
                    <h4>Categories</h4>
                    <ul class="list-unstyled">
                        <li><a href="category_branding.php">Branding</a></li>
                        <li><a href="category_printing.php">Printing</a></li>
                        <li><a href="category_marketing.php">Marketing</a></li>
                        <li><a href="category_technology.php">Technology</a></li>
                    </ul>
                </div>
                <!-- Recent Posts -->
                <div class="recent-posts mb-4">
                    <h4>Recent Posts</h4>
                    <ul class="list-unstyled">
                        <li><a href="post_branding_tips.php">How to Enhance Your Brand Identity</a></li>
                        <li><a href="post_large_format_printing.php">The Power of Large Format Printing</a></li>
                        <li><a href="post_social_media_growth.php">Maximizing Social Media for Business Growth</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Modern IT Solutions offers cutting-edge branding, printing, and digital marketing services to help your business stand out.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="services.php" class="text-white">Services</a></li>
                        <li><a href="about.php" class="text-white">About Us</a></li>
                        <li><a href="contact.php" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect with Us</h5>
                    <a href="#" class="text-white">Facebook</a> |
                    <a href="#" class="text-white">Twitter</a> |
                    <a href="#" class="text-white">LinkedIn</a>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2024 Modern IT Solutions. All rights reserved. <a href="#privacy" style="color: #ff6600;">Privacy Policy</a> | <a href="#terms" style="color: #ff6600;">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
