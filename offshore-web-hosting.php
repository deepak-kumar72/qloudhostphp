<?php
include('./inc/navbar.php');
?>
<?php
// Read JSON file
$jsonData = file_get_contents('./assets/data/webHosting.json');
$data = json_decode($jsonData, true);

// Extract hero component data
$heroComponent = $data['heroComponent'];
?>

<?php
include('./inc/heroSection.php');
?>


<?php
include('./inc/footer.php');
?>