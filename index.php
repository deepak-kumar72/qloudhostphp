<?php
include('./inc/navbar.php');
?>
<!-- <?php
        // Read JSON file
        // $jsonData = file_get_contents('./assets/data/home.json');
        // $data = json_decode($jsonData, true);

        // // Extract hero component data
        // $homePlan = $data['homePlan'];
        // $plansData = $data['plansData'];
        // $features1 = $data['featureshome'];
        // $heading = $data['featureHeading']['Heading'];
        // $subHeading = $data['featureHeading']['subHeading'];
        // $features = $data['features'];
        // 
        ?> -->

<div class="hero-container p-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="hero-content">
                    <h4 class="mb-3 hero-subTitle">
                        <i class="me-2 sub-title-icon"></i>
                        #1 DMCA Ignored Hosting
                    </h4>
                    <h1 class="mb-4">Powerful Secure & Best DMCA Ignored Hosting</h1>
                    <p class="mb-4">Get the Best for your website with QloudHost’s DMCA Ignored hosting packages. Join over 5000+ customers who rely on us for a robust offshore DMCA Ignored server foundation.</p>
                    <div class="hero-options-container mb-4">
                        <div class="option-item d-flex align-items-center mb-2">
                            <i class="me-2 option-icon"></i>
                            <span>NVMe SSD Drive</span>
                        </div>
                        <div class="option-item d-flex align-items-center mb-2">
                            <i class="me-2 option-icon"></i>
                            <span>Privacy Protected</span>
                        </div>
                        <div class="option-item d-flex align-items-center mb-2">
                            <i class="me-2 option-icon"></i>
                            <span>Free Migration</span>
                        </div>
                        <div class="option-item d-flex align-items-center mb-2">
                            <i class="me-2 option-icon"></i>
                            <span>Free Migration</span>
                        </div>
                    </div>
                    <div class="hero-buttons mb-4">
                        <a href="#explore" class="btn btn-primary start-now-btn me-3">
                            Get Started Now
                            <i class="ms-4 start-now-icon"></i>
                        </a>

                        <!-- <a href="" class="btn btn-secondary explore-btn">   
                            </a> -->

                    </div>
                    <div class="money-back-text">
                        <i class="me-2"></i>
                        14-Day Money-Back Guarantee
                    </div>
                </div>
            </div>
            <div class="col-md-6 m-auto">
                <div class="hero-image-container position-relative text-end w-100 h-100">
                    <img src="./assets/img/Frame/home-dmca-ignored-hosting.webp" alt="home-dmca-ignored-hosting" class="hero-frame h-100 w-100" />
                    <div class="features"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- explore Plan -->
<!-- <div class="hosting-plan mb-5" id="explore">
    <div class="container plan-sec mt-5" >
        <h2 class="text-center m-auto mb-3">
            <?php echo htmlspecialchars($homePlan['heading']); ?>
        </h2>
        <p class="text-center mb-5 planHead-con m-auto">
            <?php echo htmlspecialchars($homePlan['subHeading']); ?>
        </p>

        <div class="row home-plan justify-content-center">
            <?php foreach ($plansData as $plan): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-5 explore-plan-col">
                    <div class="<?php echo $plan['popular'] ? 'popular-card h-100 position-relative' : 'h-100 card-body plan-body position-relative'; ?>">
                        <?php if ($plan['popular']): ?>
                            <div class="popular-badge position-absolute">Popular</div>
                        <?php endif; ?>

                        <h5 class="card-title mb-4">
                            OFFSHORE <span><?php echo htmlspecialchars($plan['title']); ?></span>
                        </h5>
                        <p class="card-text plan-desc mb-3">
                            <?php echo htmlspecialchars($plan['description']); ?>
                        </p>
                        <h3 class="card-price mb-4">
                            <?php echo htmlspecialchars($plan['price']); ?> <span class="price-unit">/month</span>
                        </h3>
                        <p class="<?php echo $plan['popular'] ? 'save save-popular save-popular-badge' : 'save save-home-plan'; ?>">
                            <?php echo htmlspecialchars($plan['save']); ?>
                        </p>
                        <h4 class="mb-3 top-specification">Specifications</h4>
                        <ul class="list-unstyled mb-4">
                            <?php foreach ($plan['features'] as $feature): ?>
                                <li class="mb-3 features">
                                    <i class="fa fa-check check"></i> <?php echo htmlspecialchars($feature); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?php echo htmlspecialchars($plan['url']); ?>">
                            <button class="plan-btn">Get Started</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-3">
            <span class="consult">
                <?php echo htmlspecialchars($homePlan['additionalText'][0]['content']); ?>
                <a href="<?php echo htmlspecialchars($homePlan['additionalText'][1]['url']); ?>" class="fw-bold">
                    <?php echo htmlspecialchars($homePlan['additionalText'][1]['content']); ?>
                </a>
            </span>
        </div>
    </div>
</div> -->

<?php
include('./inc/technicalSpecification.php');
?>


<div class="qloudfeatures">
    <div class="container">
        <h2 class="text-center text-white mb-3 mt-5 m-auto pt-5">QloudHost Features</h2>
        <p class="text-center text-white w-50 mb-5 planHead-con m-auto">
            Enjoy your privacy on the internet with our powerful features that let you host your website with impenetrable security.
        </p>
        <div class="row g-3 feature-row m-auto pb-5">

            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature-card">
                    <img
                        src=""
                        alt=""
                        class="mb-4" />
                    <h3 class="mb-3"></h3>
                    <span class="mb-3"></span>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('./inc/installationPanel.php');
?>

<?php
include('./inc/qloudhostServices.php');
?>

<div class="container blog-section my-5">
    <header class="text-center mb-5">
        <h2 class="mb-3 m-auto">Blog & Support Section</h2>
        <p class="w-75 m-auto mb-3 sub-heading text-center">
            Facing issues with your website? Get precise solutions from our
            extensive knowledge base.
        </p>
    </header>

    <div class="row mb-4">

        <div class="col-md-5 mb-4">
            <div class="card blog-card">
                <img
                    src='/assets/blogImg1.jpg'
                    class="card-img-top mb-2 h-100"
                    alt='Discover Our Blog'
                    width={1000}
                    height={1000} />

            </div>
        </div>
        <div class="col-md-7 mb-4 blog-sec d-flex align-items-center">
            <div class="card-body blog-body">
                <h5 class="card-title blog-title1 mb-4">How to Start a Adult Blog?</h5>
                <p class="mb-4 blog-con">Learn how to start an adult blog, covering essential steps like choosing a niche, setting up hosting, content creation tips, SEO, and marketing strategies to build a successful adult website.</p>
                <a href='https://qloudhost.com/blog/how-to-start-an-adult-website/' class='start-now-btn blog-link'>Get Started
                    <FaArrowRight class="ms-2" />
                </a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-5 order-md-2 mb-4">
            <div class="card blog-card">
                <img
                    src='/assets/blogImg2.jpg'
                    class="card-img-top mb-2 h-100"
                    alt='Discover Our Blog'
                    width={1000}
                    height={1000} />

            </div>
        </div>
        <div class="col-md-7 order-md-1 mb-4 blog-sec d-flex align-items-center">
            <div class="card-body blog-body">
                <h5 class="card-title blog-title1 mb-4">Discover Our Blog And Know About Us More</h5>
                <p class="mb-4 blog-con">Dive into our blog to explore who we are! From industry insights to our journey, discover stories, tips, and updates that bring you closer to our world. Stay informed, inspired, and connected with us!</p>
                <a href='https://qloudhost.com/blog/' class=' start-now-btn blog-link'>Get Started
                    <FaArrowRight class="ms-2" />
                </a>
            </div>
        </div>



    </div>
</div>
<?php
include('./inc/testimonial.php');
?>


<?php
include('./inc/footer.php');
?>