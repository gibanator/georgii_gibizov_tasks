function task_info(){

}
// triggering alert box
function hello(){
    alert("Welcome to my website");
}

// adding 2 numbers
function add(){
    document.write(5+6);
}

// changing bg-color of the page
/*function changeColor(where, newColor){
    if (where == "background"){
        document.body.style.backgroundColor = newColor + "!important";
    }
}*/
//Change Font Color
function changeColor(){
    let color = document.getElementById('background').value;
    document.getElementById("page-body").style.setProperty('background-color', color, 'important');
}
//Change Font Color
function changeFontColor(){
    let fontcolor = document.getElementById('fontcolor').value;
    document.body.style.setProperty('color', fontcolor, 'important');
}

//crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    let lname=(document.form1.lname.value).trim();
    let city=(document.form1.city.value).trim();
    
    if (fname.length<3){
        alert("First Name must be at least 3 characters");
        return false;
    }

    if (lname.length>15){
        alert("Last Name must be not more than 15 characters");
        return false;
    }

}

function fname_check(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<3){
        alert("First Name must be at least 3 characters");
        document.getElementById("city").focus();
    }
}