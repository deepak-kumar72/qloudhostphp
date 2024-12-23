<?php
// Function to fetch data from JSON file
function fetchDataFromJson($filePath)
{
    if (file_exists($filePath)) {
        $jsonData = file_get_contents($filePath);
        return json_decode($jsonData, true);
    } else {
        return null;
    }
}

// Fetch testimonials data
$data = fetchDataFromJson('./assets/data/home.json');

if ($data && isset($data['testimonials'])) {
    $testimonials = $data['testimonials'];
} else {
    echo "<p>Testimonials data not found.</p>";
    exit;
}
?>

<div class="testimonial-sec py-5">
    <div class="container">
        <div class="testimonial-section">
            <h2 class="testimonial-head"><?php echo htmlspecialchars($testimonials['heading']); ?></h2>
            <p class="w-75 mb-5 testimonial-subHeading"><?php echo htmlspecialchars($testimonials['subHeading']); ?></p>

            <div class="container">
                <div class="testimonial-slider">
                    <?php foreach ($testimonials['data'] as $testimonial): ?>
                        <div class="testimonial-content testimonial-card p-4">
                            <div class="d-flex mb-3">
                                <img src="<?php echo htmlspecialchars($testimonial['imgUrl']); ?>" alt="<?php echo htmlspecialchars($testimonial['name']); ?>" class="me-3 testimonial-img" />
                                <div>
                                    <h3 class="testimonial-name"><?php echo htmlspecialchars($testimonial['name']); ?></h3>
                                    <p class="testimonial-role"><?php echo htmlspecialchars($testimonial['role']); ?></p>
                                </div>
                            </div>
                            <p class="feedback"><?php echo htmlspecialchars($testimonial['feedback']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<script>
    $(document).ready(function () {
        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
