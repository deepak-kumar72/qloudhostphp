<?php
// Fetch data from JSON file
function fetchInstallationPanelData($filePath) {
    if (file_exists($filePath)) {
        $jsonData = file_get_contents($filePath);
        return json_decode($jsonData, true);
    } else {
        return null;
    }
}

// Fetch the data

// Check if installation panel data exists
if ($data && isset($data['installationPanel'])) {
    $panelData = $data['installationPanel'];
    $title = $panelData['title'];
    $description = $panelData['description'];
    $buttonText = $panelData['buttonText'];
    $url = $panelData['url'];
    $panelOptions = $panelData['panelOptions'];
} else {
    echo "<p>Installation Panel data not found.</p>";
    return;
}
?>

<div class="install-panel">
    <div class="container py-5">
        <div class="row panel-sec m-auto">
            <!-- Left Section -->
            <div class="col-md-7 d-flex">
                <div class="m-auto">
                    <h2 class="mb-4 w-100"><?php echo htmlspecialchars($title); ?></h2>
                    <p class="planHead-con w-100 mb-4"><?php echo htmlspecialchars($description); ?></p>
                    <a href="<?php echo htmlspecialchars($url); ?>" class="smooth-scroll">
                        <button class="start-now-btn mb-4">
                            <?php echo htmlspecialchars($buttonText); ?>
                            <i class="ms-4 fa fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-md-5">
                <div class="d-flex flex-column align-items-center gap-3 panel-item">
                    <?php foreach ($panelOptions as $option): ?>
                        <div class="panel-opt">
                            <img src="<?php echo htmlspecialchars($option['img']); ?>" alt="icon" class="h-100" />
                            <p><?php echo htmlspecialchars($option['name']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
