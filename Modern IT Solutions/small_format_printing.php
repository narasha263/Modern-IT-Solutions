
<?php
include 'header.php'; // Include the footer of the page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Format Printing</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .service-details-container {
            background-color: #98b3ce;
            padding: 40px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .service-item {
            margin-bottom: 30px;
        }
      
        .img-resize {
        height: 250px; /* Adjust this value as needed */
        object-fit: cover; /* Ensures the image covers the container without distortion */
        width: 100%; /* Full width of the container */
        border-radius: 8px; /* Optional: rounded corners for a cleaner look */
    }
    </style>
</head>
<body>

<section class="container mt-5">
    <div class="service-details-container">
        <h2>Small Format Printing</h2>
        <p>We provide small format printing services that are perfect for everyday business needs. From business cards to posters, we offer high-quality printing solutions that leave a lasting impression.</p>

        <div class="row">
            <div class="col-md-4 service-item">
                <h4>Fliers</h4>
                <img src="graphics/flyer1.png" alt="Fliers" class="img-fluid img-resize">
            </div>
            <div class="col-md-4 service-item">
                <h4>Posters</h4>
                <img src="graphics/poster.png" alt="Posters"class="img-fluid img-resize">
            </div>
            <div class="col-md-4 service-item">
                <h4>Business Cards</h4>
                <img src="graphics/business card.png" alt="Business Cards" class="img-fluid img-resize">
            </div>
            <div class="col-md-4 service-item">
                <h4>Photo Mounts</h4>
                <img src="graphics/PHOTO MOUNTS.png" alt="Photo Mounts">
            </div>
            
        </div>

        <p>Get your small format printing done with us for professional, high-quality results. Contact us for more details!</p>
    </div>
</section>

<?php
include 'footer.php'; // Include the footer of the page
?>

