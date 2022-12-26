<!-- <?php

$name = "Ahamd";
$age = 18;
$grade = 'D';
$GPA = 3.9;
$data= array(10, 30, NULL,90);

// بتنزل سطر 
echo $name."<br>";

echo "Hello world ";

// مسافة بين كلمتين
echo $name."\r";

function getName($firstName, $lastName){
    $fullName = $firstName.$lastName;
    return $fullName;
}

echo getName("Ahmad ", "Ghanem");

// تعمل الخط blod
echo "<h1>".getName("Ahmad ", "Ghanem")."</h1>";

// list
echo "<li>".getName("Ahmad ", "Ghanem")."</li>";
echo "<li>".getName("Ahmad ", "Ghanem")."</li>";
echo "<li>".getName("Ahmad ", "Ghanem")."</li>";

// تعريف array
$array = array (20, 10, 60, 80, 90);
echo $array[0];

echo $data[1]."<br>";
echo $data[2];
if($data[2]==NULL){
    echo "The data is NULL";
}
else{
    "The data has value";
}

switch($data[1]){
    case 1:

        break;
    case 2:
        break;    
}

for($i=0; $i<5; $i++)
{
    echo $i*2 ."<br>";
}


?> -->

<?php
// echo "First Name: ". $_POST["fname"] ."<br>"; 
// echo "Last Name: ". $_POST["lname"];

echo "First Name: ". $_GET["fname"] ."<br>"; 
echo "Last Name: ". $_GET["lname"] ."<br>";
echo "Age: ". $_GET["age"] ."<br>";
echo "Mager: ". $_GET["mager"] ;


if(isset($_POST)){
echo "Done";
if(!empty($_POST['fname'])){
    echo "First name" .$_POST['fname'];
}
} else {
    echo "You need to insert the first name";
}
?>

