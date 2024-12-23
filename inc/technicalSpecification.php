<?php

function renderCarousel($items, $direction) {
    // Duplicate items to create infinite loop illusion
    $duplicatedItems = array_merge($items, $items, $items);

    echo '<div class="carousel-wrapper ' . ($direction === 'right' ? 'carousel-right-slide' : '') . '"><div class="carousel ' . $direction . '">';
    foreach ($duplicatedItems as $item) {
        echo '<div class="item">' . htmlspecialchars($item) . '</div>';
    }
    echo '</div></div>';
}

// Data arrays
$items = [
    'DirectAdmin Control Panel',
    'Softaculous Premium',
    'CloudLinux OS',
    'GD Graphics Library',
    'LiteSpeed Web Server',
    'Zend Guard Loader',
];

$items2 = [
    'PHP Extension Manager',
    'Free Managed Migration',
    'Unlimited DirectAdmin Support',
    '24/7/365 Support Coverage',
    'Proactive Host Monitoring',
];

$items3 = [
    'ionCube PHP Loader',
    'Subversion',
    'DNS Zone Editor',
    'Mail Exchange (MX) Editor',
    'Secure Shell (SSH) Access',
];
?>

<div class="container-fluid mb-4">
    <div class="row justify-content-center text-center mb-4">
        <h2>Full Technical Specifications</h2>
        <p class="sub-heading">From professional business to enterprise, we have got you covered!</p>
    </div>

    <div class="row">
        <!-- First Carousel - Moves to the Left -->
        <div class="col-12 my-2">
            <?php renderCarousel($items, 'left'); ?>
        </div>

        <!-- Second Carousel - Moves to the Right -->
        <div class="col-12 my-2">
            <?php renderCarousel($items3, 'right'); ?>
        </div>

        <!-- Third Carousel - Moves to the Left -->
        <div class="col-12 my-2">
            <?php renderCarousel($items2, 'left'); ?>
        </div>
    </div>
</div>
