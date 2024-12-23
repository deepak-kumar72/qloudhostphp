<?php
include('./inc/navbar.php');
?>
<?php
// Read JSON file
$jsonData = file_get_contents('./assets/data/home.json');
$data = json_decode($jsonData, true);

// Extract hero component data
$heroComponent = $data['heroComponent'];
$homePlan = $data['homePlan'];
$plansData = $data['plansData'];
?>

<?php
include('./inc/heroSection.php');
?>

<div class="hosting-plan mb-5" id="explore">
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
</div>

<?php
include('./inc/technicalSpecification.php');
?>

<?php
include('./inc/installationPanel.php');
?>

<?php
include('./inc/testimonial.php');
?>


<?php
include('./inc/footer.php');
?>