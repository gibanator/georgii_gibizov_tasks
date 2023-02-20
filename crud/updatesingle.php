<?php 
$title = "Update Your Info";
include 'db.php';
include '../layout/header.php';
$a = $_GET['id'];
$res = mysqli_query($conn, "select * from studentinfo where id = '$a'");
echo $a;
$row = mysqli_fetch_array($res);
?>
<h2> Update your info below:</h2>
<form name="update" method="post" action="" class="was-validated">
<div class="row" style="margin: 0">
<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="fname" placeholder="First Name" id="firstName" required value="<?php echo $row['fname']; ?>" ></input>
  <label for="firstName">First Name</label>
  <div class="invalid-feedback">
      Please provide name.
  </div>
</div>
</div>

<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="lname" placeholder="Last Name" id="lastName" required value="<?php echo $row['lname']; ?>"></input>
  <label for="lastName">Last Name</label>
  <div class="invalid-feedback">
      Please provide last name.
  </div>
</div>
</div>

<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="city" placeholder="Your City" id="city" required value="<?php echo $row['city']; ?>"></input>
  <label for="city">City</label>
  <div class="invalid-feedback">
      Please provide your city.
  </div>
</div>
</div>

<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <select name="groupid">
    <option value="BBCAP22" <?php if ($row['groupid'] == 'BBCAP22') echo "selected='selected'"?>> BBCAP22 </option>
    <option value="BBCAP21" <?php if ($row['groupid'] == 'BBCAP21') echo "selected='selected'"?>> BBCAP21 </option>
    <option value="Others" <?php if ($row['groupid'] == 'Others') echo "selected='selected'"?>> Others </option>
  </select> 
</div>
</div>

</div>
<br>
<div class="row" style="margin: 0">
<div class="col-md-1 " style="padding-left: 0; padding-right:10px">
<button type="submit" name="update" class="btn btn-primary" style="margin-top: 5px">Update</button>
</div>
<div class="col-md-1">
<button type="submit" name="delete" class="btn btn-danger" style="margin-top: 5px">Delete</button>
</div>
</div>
</form>

<?php 
    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];
        $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname', 
        lname='$lname', city='$city', groupid='$groupid' where id='$a' ");
        if ($query){
            echo "<h2>Your info is updated successfully</h2>";
        }
        else{
            echo "Failed to update your info";
        }
    }
    if(isset($_POST['delete'])){
        $query = mysqli_query($conn, "DELETE FROM studentinfo WHERE id='$a' ");
        if ($query){
            echo "<h2>Your info is deleted successfully</h2>";
        }
        else{
            echo "Failed to delete your info";
        }
    }
include '../layout/footer.php';
?>