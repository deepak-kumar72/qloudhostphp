<div class="hero-container p-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="hero-content">
                    <?php if ($_SERVER['REQUEST_URI'] !== '/coupons') : ?>
                        <h4 class="mb-3 hero-subTitle">
                            <i class="me-2 sub-title-icon"></i>
                            <?= $heroComponent['subTitle']; ?>
                        </h4>
                    <?php endif; ?>
                    <h1 class="mb-4"><?= $heroComponent['title']; ?></h1>
                    <p class="mb-4"><?= $heroComponent['description']; ?></p>
                    <div class="hero-options-container mb-4">
                        <?php foreach ($heroComponent['options'] as $option) : ?>
                            <div class="option-item d-flex align-items-center mb-2">
                                <i class="me-2 option-icon"></i>
                                <span><?= $option; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="hero-buttons mb-4">
                        <a href="<?= $heroComponent['button1Link']; ?>" class="btn btn-primary start-now-btn me-3">
                            <?= $heroComponent['button1Text']; ?>
                            <i class="ms-4 start-now-icon"></i>
                        </a>
                        <?php if (!empty($heroComponent['button2Text']) && !empty($heroComponent['button2Link'])) : ?>
                            <a href="<?= $heroComponent['button2Link']; ?>" class="btn btn-secondary explore-btn">
                                <?= $heroComponent['button2Text']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="money-back-text">
                        <i class="me-2"></i>
                        <?= $heroComponent['moneyBackText']; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 m-auto">
                <div class="hero-image-container position-relative text-end w-100 h-100">
                    <img src="<?= $heroComponent['imageSrc']; ?>" alt="<?= $heroComponent['title']; ?>" class="hero-frame h-100 w-100" />
                    <div class="features"></div>
                </div>
            </div>
        </div>
    </div>
</div>