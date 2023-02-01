<?php $title = "Ex 1";
$titleh1 = "PHP is interesting";
include "header.php" ?>
<h1><?php echo $titleh1 ?></h1>
<h3>3.1 Write a simple PHP script to print your information (Name and your groupid).    
</h3>
<?php
echo "Georgii Gibizov <br>";
echo "BBCAP22";
?>
<h3>3.2 Write PHP code to display the following message: Hello world! My name is "David"
</h1>
<?php
echo "Hello world! My name is \"David\"";
?>
<h3>3.3 Write the PHP code in to display the current date.</h3>
<?php
echo date("d.m.y");
?>
<h3>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.</h3> 
<p>done. had to make is as '$titleh1' because '$title' is already occupied by &lt;title&gt; tag.</p>
<h3>3.5 $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade. </h3>
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
</table>" ?>

<?php include "footer.php" ?>


