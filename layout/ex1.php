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
<?php include "footer.php" ?>

