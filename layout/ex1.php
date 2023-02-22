<?php $title = "Exercise 1";
include "oldheader.php" ?>

<h2> 1. In-class Task. </h2>
<h5>3.1. Write a simple PHP script to print your information (Name and your groupid).    
</h5>
<?php
echo "Georgii Gibizov <br>";
echo "BBCAP22";
?>
<h5>3.2. Write PHP code to display the following message: Hello world! My name is "David"
</h5>
<?php
echo "Hello world! My name is \"David\"";
?>
<h5>3.3. Write the PHP code in to display the current date.</h5>
<?php
echo "<p style='margin-bottom:0'>" . date("d.m.y") . "</p>";
?>

<noscript>
  Please enable JS to view this
</noscript>
<script>
  document.write('Hello world');
  console.log('Hello world\n');
</script>
<button class="btn btn-primary" onclick="hello()">Click Me</button>

<h5>3.4. $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.</h5> 
<p>done. had to make is as '$titleh1' because '$title' is already occupied by &lt;title&gt; tag.</p>
<?php $titleh1 = "PHP is interesting";
echo "<h1> $titleh1 </h1>" ?>

<h5>3.5. $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade. </h5>
<button class="btn btn-primary" onclick="add()">Add numbers</button>
<hr>
<p id="place1" style="color:#45a29e; background-color:white"></p>
<span id="place2" style="color:white;background-color:#45a29e"></span>
<hr>
<script>
  document.getElementById("place1").innerHTML = "This will go to place1";
  document.getElementById("place2").innerHTML = "This will go to place2";
</script>
<?php $g1=5; $g2=4; $g3=5; 
echo  
"<table>
<tr>
  <th>S.N</th>
  <th>Name</th>
  <th>Grade</th>
</tr>
<tr>
  <td>1</td>
  <td>Pekka</td>
  <td>$g1</td>
</tr>
<tr>
  <td>2</td>
  <td>Johanna</td>
  <td>$g2</td>
</tr>
<tr>
  <td>2</td>
  <td>John</td>
  <td>$g3</td>
</tr>
</table>"; ?>
<h5>4. Take a screenshot that verifies, you have set up the development environment and include it as an image in ex1.php.    
</h5>
<img style="margin: auto;" width=80% src="../img/sc_task4.png" alt="task4">

<h5>Changing background-color</h5>
<form>
    <input type="color" name="background" onchange="changeColor('background',this.value)">
</form>

<?php include "oldfooter.php" ?>


