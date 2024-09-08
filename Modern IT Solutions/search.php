<?php
// search.php
include 'header.php'; // Include the header of the page

// Get the search query
$query = isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '';
?>

<section id="search-results" class="container mt-5">
    <h2 class="text-center mb-4">Search Results for "<?php echo $query; ?>"</h2>
    <?php
    // Example search results (replace with actual database search logic)
    if ($query) {
        echo '<div class="blog-entry mb-4">';
        echo '<h3><a href="branding.php">Innovative Branding Solutions for Your Business</a></h3>';
        echo '<p><small>Published on August 30, 2024</small></p>';
        echo '<p>Explore our latest blog post on innovative branding solutions...</p>';
        echo '<a href="branding.php" class="btn btn-primary">Read More</a>';
        echo '</div>';
        
        echo '<div class="blog-entry mb-4">';
        echo '<h3><a href="printing.php">The Importance of Quality Printing</a></h3>';
        echo '<p><small>Published on July 25, 2024</small></p>';
        echo '<p>Discover why quality printing is crucial for your business...</p>';
        echo '<a href="printing.php" class="btn btn-primary">Read More</a>';
        echo '</div>';
    } else {
        echo '<p>No search query provided.</p>';
    }
    ?>
</section>

<?php
include 'footer.php'; // Include the footer of the page
?>
