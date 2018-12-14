<?php
include 'includes/header.php';
$Username = $_POST["username"];
$Pass = $_POST["password"];
?>

<div class="padding">
  <?php echo "<h1>Welcome $Username!</h1>"; ?>
</div>

<?php
include 'includes/footer.php';

 ?>
