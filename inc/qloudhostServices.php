

<div class="container my-5 qloudService-section">
    <h2 class="text-center mb-3 m-auto"><?php echo htmlspecialchars($heading); ?></h2>
    <p class="text-center planHead-con m-auto mb-5"><?php echo htmlspecialchars($subHeading); ?></p>
    <div class="row mt-4 justify-content-center">
        <?php foreach ($features as $feature): ?>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card service-card-body">
                    <div class="p-3">
                        <img 
                            src="<?php echo htmlspecialchars($feature['img']); ?>" 
                            alt="<?php echo htmlspecialchars($feature['title']); ?>" 
                            class="mb-3 qloudService-img"
                            style="width:100%; height:auto;"
                        />
                        <div class="qloudservice-desc">
                            <div class="service-title mb-2">
                                <?php echo htmlspecialchars($feature['title']); ?>
                            </div>
                            <div class="card-text service-text mb-3">
                                <?php 
                                if (isset($feature['description']) && is_array($feature['description'])) {
                                    foreach ($feature['description'] as $descPart) {
                                        if ($descPart['type'] === 'text') {
                                            echo htmlspecialchars($descPart['content']);
                                        } elseif ($descPart['type'] === 'link') {
                                            echo '<a href="' . htmlspecialchars($descPart['url']) . '" class="faq-link">' . htmlspecialchars($descPart['content']) . '</a>';
                                        } elseif ($descPart['type'] === 'list') {
                                            echo '<ul>';
                                            foreach ($descPart['content'] as $item) {
                                                echo '<li>' . htmlspecialchars($item) . '</li>';
                                            }
                                            echo '</ul>';
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
