<?php
$title="JS Event and Form Validations";
include "../layout/header.php"?>
<h3> Button to display date </h3>
<button class="btn btn-primary" onclick="this.innerHTML = Date()">Show</button>

<h3> Button and holder as paragraph for the date </h3>
<button class="btn btn-primary" onclick="getElementById('date_handler').innerHTML = Date()">Show</button>
<p id="date_handler"></p>
<button class="btn btn-warning" onclick="getElementById('task_info').innerHTML = 'I used another function which can override css styles,</br>so it works with new header/footer'">Important about colors</button>

<p id="task_info"></p>

<h3> Change BG Color </h3>
<form>
    <input type="color" id="background" onchange="changeColor()">
</form>

<h3> Change Font Color</h3>
<form>
    <input type="color" id="fontcolor" onchange="changeFontColor()">
</form>

<h3> On MouseOver & On Mouse Out</h3>
<span onmouseover="this.style.setProperty('background-color', 'yellow', 'important');
                   this.style.setProperty('color', 'red', 'important');
                   this.style.setProperty('font-size','2em', 'important');
                   this.innerHTML='BIG';"
      onmouseout="this.style.setProperty('background-color', 'navy', 'important');
                   this.style.setProperty('color', 'white', 'important');
                   this.style.setProperty('font-size','1.1em', 'important');
                   this.innerHTML='smol'"> 
                   smol
</span>
<?php include "footer.php"?>
