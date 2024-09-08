

   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern IT Solutions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="styles.css">
    <style>
       /* General Styles */
body {
    font-family: Arial, sans-serif;
    color: #000000; /* Change text color to black */
    background-color: #ffffff; /* Change background color to white */
    margin: 0;
    padding: 0;
}

/* Navbar */
.navbar {
    background-color: #154c79;
}

.navbar-brand, .nav-link {
    color: #ff6600 !important;
}

.nav-link:hover {
    color: #ffffff !important;
}

/* Services Section Styling */
#services {
    background-color: #154c79; /* Update to white background */
    padding: 2rem 1rem;
    border-radius: 0.375rem;
}

#services h2 {
    font-size: 2rem;
    color: #ff6600;
    margin-bottom: 1.5rem;
}

.service-container {
    border: 1px solid black; /* Update to black text */
    border-radius: 0.375rem;
    padding: 1rem;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    transition: box-shadow 0.3s ease;
    background: #ffffff; /* Update to white background */
}

.service-container:hover {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}

.service-icon i {
    font-size: 3rem;
    color: #007bff;
}

.service-container h3 {
    font-size: 1.25rem;
    color: #000000; /* Update to black text */
    margin: 1rem 0 0.5rem;
}

.service-container p {
    font-size: 0.875rem;
    color: #000000; /* Update to black text */
    line-height: 1.5;
}

/* About Section */
#about {
    background-color: #ffffff;
    color: #000000; /* Update to black text */
    padding: 50px 0;
    border-top: 5px solid #ff6600;
}

#about h2 {
    font-size: 2rem;
    color: #753408;
    margin-bottom: 30px;
    text-align: center;
}

#about p {
    font-size: 1.2rem;
    color: #000000; /* Update to black text */
}

/* Contact Section */
#contact {
    background-color: #154c79; /* Update to white background */
    color: #000000; /* Update to black text */
    padding: 50px 0;
}

#contact h2 {
    font-size: 2rem;
    color: #ff6600;
    margin-bottom: 30px;
    text-align: center;
}

#contact p {
    font-size: 1.2rem;
    color: #000000; /* Update to black text */
}

.contact-form {
    max-width: 600px;
    margin: 0 auto;
}

.contact-form label {
    color: #000000; /* Update to black text */
}

.map iframe {
    width: 100%;
    height: 400px; /* Adjust height as needed */
    border: 0;
    border-radius: 8px;
}

/* Footer */
footer {
    background-color: #154c79; /* Update to white background */
    color: #000000; /* Update to black text */
    padding: 15px 0;
    text-align: center;
    border-top: 3px solid #ff6600;
}

footer p {
    margin: 0;
}

.carousel-item img {
    width: 80%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    margin: 0 auto;
}

/* FAQ Section */
.card-body {
    background-color: #000; 
    color: #fff; 
    border: 1px solid #fff; 
    border-radius: 0.375rem; 
    padding: 1rem; 
}

/* Social Media Links */
.social-media a {
    color: #ff6600; /* Update to black text */
    font-size: 1.5rem;
    transition: color 0.3s ease;
}

.social-media a:hover {
    color: #ff6600; /* Keep the hover effect */
}

.social-media i {
    margin: 0 0.5rem;
}
 /* Contact Section */
 #contact {
            background-color: #154c79; /* Black background */
            color: red; /* White text */
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
            background-color: #154c79; /* Black background */
            color: #ff6600; /* Orange text */
            padding: 15px 0;
            text-align: center;
            border-top: 3px solid; /* Orange border */
        }

        footer p {
            margin: 0;
        }
        .container{
            background: #154c79;
            color: #fff;
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
    <br>
<div class="container">
    <!-- Contact Section -->
    <section id="contact" class="container mt-5">
    <h2 class="text-center mb-4">CONTACT US</h2>
    <form class="contact-form" action="submit_contact.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea class="form-control" id="inputMessage" name="message" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</section>

            

            <!-- Company Contact Information -->
            <div class="contact-info mt-5 text-center">
                <h1 style="color: #ff6600;">Get in Touch</h2>
                <p><strong>Address:</strong>  Kihunguro, Ruiru, Kiambu.</p>
                <p><strong>Phone:</strong> 0768992049, 0101838806</p>
                <p><strong>Email:</strong> moderncybersolutions1@gmail.com</p>
                <p><strong>Working Hours:</strong> Mon-Fri, 9am - 6pm</p>
            </div>

            <!-- Google Maps Integration -->
            <div class="map mt-5">
                <h2 class="text-center mb-4" style="color: #ff6600;">LOCATION</h2>
                <div class="layout no-description">
                    <div class="frame">
                        <iframe id="google-map" class="google-map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCNCmAGyN4bJYu5qeLgbASzZafm-M5TA_o&language=en&zoom=16&q=Modern%20IT%20Solutions" allowfullscreen title='Location on map'></iframe>
                    </div>
                    <div class="text mt-4">
                        <div class="column address text-center">
                            <p class="title">Kihunguro Ruiru, Kiambu.</p>
                            <p class="address">Modern IT Solutions</p>
                            <div class="ec-size ec-size--xl mt-3">
                                <div class="ec-store">
                                    <div class="form-control form-control--button form-control--secondary btn-get-direction">
                                        <a class="form-control__button" href="https://www.google.com/maps/dir/?api=1&destination=Modern%20IT%20Solutions" target="_blank">
                                            <span class="form-control__button-text"><span>Click Directions</span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQs Section -->
            <div class="faq mt-5">
                <h3 class="text-center mb-4">Frequently Asked Questions</h3>
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="faq1">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What services do you offer?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="faq1" data-parent="#faqAccordion">
                            <div class="card-body">
                                We offer a wide range of services including large format printing, branding, and more.
                            </div>
                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>

                <!-- Social Media Links -->
    <div class="social-media mt-5 text-center">
        <h3 class="text-center mb-4">Follow Us</h3>
        <a href="https://facebook.com/mmodernsolutions" class="mx-2"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/modernsolutions" class="mx-2"><i class="fab fa-twitter"></i></a>
        <a href="https://instagram.com/modernsolutions" class="mx-2"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com/company/modernitsolutions" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://youtu.be/Gn8AhV36CYY" class="mx-2"><i class="fab fa-youtube-in"></i></a>
    </div>


            <!-- Testimonials Section -->
            <div class="testimonials mt-5">
                <h3 class="text-center mb-4">What Our Clients Say</h3>
                <div class="carousel slide" data-ride="carousel" id="testimonialCarousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0" style="color: #ff6600;">"Modern IT Solutions provided exceptional service and quality. Highly recommend!"</p>
                                <footer class="blockquote-footer">Mbuchi Maina, <cite title="Source Title">C.E.O Modern IT Solutions.</cite></footer>
                            </blockquote>
                        </div>
                        <!-- Add more testimonials as needed -->
                    </div>
                </div>
            </div>
            <div class="newsletter-signup mt-5 text-center">
    <h3 class="text-center mb-4">Stay Updated</h3>
    <form class="form-inline justify-content-center" action="subscribe.php" method="POST">
        <div class="form-group mb-2">
            <input type="email" class="form-control" id="newsletterEmail" name="email" placeholder="Enter your email" required>
        </div>
        <button type="submit" class="btn btn-primary mb-2 ml-2">Subscribe</button>
    </form>
</div>
            <!-- Call to Action Section -->
            <div class="cta mt-5 text-center">
                <h3 class="text-center mb-4">Need More Information?</h3>
                <a href="schedule.php" class="btn btn-success btn-lg">Schedule a Consultation</a>
            </div><br>
        </div>
    </section><br>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Modern IT Solutions. All Rights Reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
