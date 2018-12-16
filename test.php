<?php
include 'includes/header.php';
$CookieValue = "username"; //cookie's name?
$Username = $_POST["username"]; //http username post recieved transfered into variable
$Pass = $_POST["password"]; //http password post recieved transfered into variable
$username = $Username; //idk
$password = $Pass; //idk
$Temp = "temp"; //created a dummy variable
$true = "true"; // created a $true variable?
$LoggedIn = $temp; //$LoggedIn holds a dummy charge
$LoggedInUsername = "temp"; //$LoggedInUsername holds a dummy charge
$LoggedInPass = "temp"; //$LoggedInPass holds a dummy charge


if ($LoggedIn == $true) { //We will need to connect an sql database in here to get this logged in variable to work
  setcookie($username, "username"); //sets cookie with post request?
  setcookie($password, "Password"); //sets cookie with post request?
  $Temp = "Logged In!"; //sets temperarory variable for Text
} else {
  $Temp = "You Are Not Logged In"; //sets a temp variable for Text
}

//Checking for cookies \/

if (isset($COOKIE['$username'])) {
  $LoggedInUsername = "true";
} else {
  $LoggedInUsername = "false";
}

if ($LoggedInUsername == $true) { //makes sure the $LoggedInUsername is set to true
  if (isset($COOKIE['$password'])) { //checks for a password variable
    $LoggedInPass = "true"; //sets the password variable to true
  }
}

//_______________________________________________ thanks for enduring my trash code

?>

<div class="padding">
  <?php echo "<h1> $Temp </h1>"; ?>
  <?php
    if ($LoggedInPass == $true) {
      echo "<h1>Welcome $Username!</h1>";
    } else {

      echo "
      <script>
      window.location.replace('/login.php')
      </script>
      ";
    }
?>
</div>

<?php
include 'includes/footer.php';

 ?>
