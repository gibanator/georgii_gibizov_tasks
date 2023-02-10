<?php $title = "Exercise 5";
include "header.php" ?>

<h2> 5. In-class Task Arrays. </h3>

<h5>1. Write a php script to display courses as list. Use &lt;li&gt;</h5>

<?php
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
for($i=0; $i < count($courses); $i++){
    echo "<li>" . $courses[$i];
}
?>

<h5>3. Sort the following array <br>
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h5>

<?php

$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
ksort

?>
<?php include "footer.php" ?>