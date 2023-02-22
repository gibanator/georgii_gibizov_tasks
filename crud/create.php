<?php
$title = "A simple CRUD app";
include "../layout/header.php"; ?>

<form method="post" action="" class="was-validated" onsubmit="return crud()" name = "form1">

<div class="row" style="margin: 0">
<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="fname" placeholder="First Name" id="firstName" onfocusout="fname_check()" required></input>
  <label for="firstName">First Name</label>
  <div class="invalid-feedback">
      Please provide name.
  </div>
</div>
</div>

<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="lname" placeholder="Last Name" id="lastName" required></input>
  <label for="lastName">Last Name</label>
  <div class="invalid-feedback">
      Please provide last name.
  </div>
</div>
</div>

<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="city" placeholder="Your City" id="city" required></input>
  <label for="city">City</label>
  <div class="invalid-feedback">
      Please provide your city.
  </div>
</div>
</div>

<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <select name="groupid">
    <option value="BBCAP22"> BBCAP22 </option>
    <option value="BBCAP21"> BBCAP21 </option>
    <option value="Others"> Others </option>
  </select>

  
</div>
</div>

</div>
<button type="submit" name="submit" class="btn btn-primary" style="margin-top: 5px">Submit</button>
</form>
<?php
if (isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $groupid=$_POST['groupid'];
    include "db.php";
    $sql = "insert into studentinfo (fname, lname, city, groupid)
    values('$fname','$lname','$city','$groupid')";

    if ($conn -> query($sql) === TRUE){
        echo "Your information is added successfully";
    }
    else{
        echo "Error" . $conn->error;
    }
}
?>


<?php
include "../layout/footer.php" ?>