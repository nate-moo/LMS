<?php
include 'includes/header.php';
$CookieValue = "username";
$Username = $_POST["username"];
$Pass = $_POST["password"];
$Temp = "temp";
$true = "true";
//$LoggedIn = "";
if ($LoggedIn == $true) {
  setcookie($Username, "username");
  setcookie($Pass, "Password");
  $Temp = "Logged In!";
} else {
  $Temp = "You Are Not Logged In";
}

?>
//
//
//
//Go to test.php
//
//
//
//
<div class="padding">
  <?php echo "<h1> $Temp </h1>"; ?>
  <?php
if ($LoggedIn == $true) {
  echo "<h1>Welcome $Username!</h1>";
}

  ?>
</div>

<?php
include 'includes/footer.php';

 ?>
