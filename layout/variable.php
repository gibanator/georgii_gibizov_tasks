<?php $title = "Exercise 3";
include "header.php" ?>

<h2> 3. In-class Task Variable & Operators </h2>

<h5>
1 & 2. Create a simple html form to get Firstname and Lastname from the user 
and use echo echo statement to print using &lt;h3&gt; tag: Hello …., You are welcome to my site.
Then apply bootstrap style to the form. 
</h5>
<form action="action.php" method="post" class="was-validated">

<div class="row" style="margin: 0">
<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="fname" placeholder="Your first name" id="firstName" required></input>
  <label for="firstName">First Name</label>
  <div class="invalid-feedback">
      Please provide name.
  </div>
</div>
</div>

<div class="col-md" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="lname" placeholder="Your last name" id="lastName" required></input>
  <label for="lastName">Last Name</label>
  <div class="invalid-feedback">
      Please provide last name.
  </div>
</div>
</div>
</div>

<button type="submit" class="btn btn-primary" style="margin-top: 5px">Submit</button>

</form>
<h5>
3. Prepare a simple html table and apply bootstrap style to the table.
</h5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<h5>
4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.
</h5>

<?php $str1 = "apple";
$str2 = "android";
$res = $str1 . $str2;
echo "
<p>First string: $str1 <br>
Second string: $str2 <br>
Result string $res <br>
Length is " . strlen($res) .
".</p>" ?>

<h5>
5. Write a script to add up the numbers: 298, 234, 46. 
Use variables to store these numbers and echo statement to output your answer.    
</h5>
<?php
$n1 = 298; $n2 = 234; $n3 = 46;
$sum =  $n1 + $n2 + $n3;
echo "Sum of $n1, $n2, $n3 is $sum";
?>

<h5>
6. Write a PHP script to detect the browser being used to view your pages.    
</h5>
<?php 
echo $_SERVER['HTTP_USER_AGENT']; 
?>

<h5>
7. Write a PHP script in the footer section of your universal footer 
just below the Copyright information to display the last modification time of a file.    
</h5>
<p> done </p>



<?php include "footer.php" ?>