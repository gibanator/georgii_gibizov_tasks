<?php $title = "Exercise 4";
include "header.php" ?>

<h2>In-class Task Control flow and loops</h2>

<h5>1. Write a script that gets the current month and prints one of the following responses, 
depending on whether it's August or not
</h5>

<?php 
$date = date("F");

if ($date == "August") {
    echo "It's August, so it's still holiday :)";
}
else {
    echo "Not August, this is $date so I don't have any holidays :(";
}
?>

<h5>2. Assign colour red to a variable name $color 
and check to print one the following responses
</h5>

<?php 
$color = "red";

if ($color == "red") {
    echo "The color is red.";
}
else {
    echo "The color is not red.";
}
?>

<h5>3. Write a program to grade students based on their total score for a subject. 
Use variable to hold the total score.
</h5>

<?php
$grade = 55;

if ($grade > 80) {
    echo "Grade is Excellent";
}
elseif ($grade <= 80 and $grade > 70) {
    echo "Grade is Great";
}
elseif ($grade <= 70 and $grade > 60) {
    echo "Grade is Good";
}
elseif ($grade <= 60 and $grade > 50) {
    echo "Grade is Pass";
}
else {
    echo "Grade is Fail";
}
?>

<h5>
4. Write a program to get inputs (age and name) from the user and based on their age, 
decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h5>

<form method="post" class="was-validated">

<div class="row" style="margin: 0">
<div class="col-md-5" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="fname" placeholder="Your first name" id="firstName" required></input>
  <label for="firstName">First Name</label>
  <div class="invalid-feedback">
      Please provide name.
  </div>
</div>
</div>

<div class="col-md-5" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="lname" placeholder="Your last name" id="lastName" required></input>
  <label for="lastName">Last Name</label>
  <div class="invalid-feedback">
      Please provide last name.
  </div>
</div>
</div>
<div class="col-md-2" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input type="number" class="form-control" name="age" placeholder="Your last name" id="age" required></input>
  <label for="age">Age</label>
  <div class="invalid-feedback">
      Please provide age.
  </div>
</div>
</div>
</div>

<button type="submit" class="btn btn-primary" style="margin-top: 5px">Submit</button>

</form>

<?php 
if ($_POST) {
    if($_POST["age"] >= 18){
        echo $_POST["fname"] . " " . $_POST["lname"] . " is eligible for voting.";
    }
    else {
        echo $_POST["fname"] . " " . $_POST["lname"] . " is not eligible for voting yet.";
    }
}
?>

<h5>
5. Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Google Chrome...
</h5>

<?php
echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
$u_agent = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('/Firefox/i',$u_agent)){
    $bname = 'Mozilla Firefox';
}
elseif(preg_match('/OPR/i',$u_agent)){
    $bname = 'Opera';
}
elseif(preg_match('/Chrome/i',$u_agent)){
    $bname = 'Google Chrome';
}
elseif(preg_match('/Safari/i',$u_agent)){
    $bname = 'Safari';
}
elseif(preg_match('/Edge/i',$u_agent)){
    $bname = 'Edge';
}

echo "Your browser: " . $bname;
?>



<?php include "footer.php" ?>