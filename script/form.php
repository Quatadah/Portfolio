
<?php

$requiredfield = "";
$nameErr = $emailErr = "";
$name = $email = $subject = $message = "";
function test_input($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    if (empty($name)){
        $nameErr = "Name is required";
        $requiredfield = "* Requiered field";
    }
    $email = test_input($_POST["email"]);
    if (empty($email)){
        $emailErr = "Email is required";
        $requiredfield = "* Requiered field";
    }
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);
}


/*

$name = $email = $subject = $message = "";
$nameErr = $emailErr = "";

function test_input($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    if (empty($name)){
        $nameErr = "Name is required";
    }
    $email = test_input($_POST["email"]);
    if (empty($email)){
        $emailErr = "Email is required";
    }
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);

}

echo "<h1> Your input </h1>";
echo $nameErr . "<br>";


*/




































/*
$name = $email = $subject = $message = "";
$nameErr = $emailErr = $subjectErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
        echo $nameErr;
    } else{
        if (!preg_match("/[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters and white spaces are allowed";
        }
        else{
            $name = test_input($_POST["name"]);         
        }
    }
    if (empty($_POST["email"])){
        $emailErr = "Email is required";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Incorrect email format";
        } else {
            $email = test_input($_POST["email"]);
        }
    }
    if (empty($_POST["subject"])){
        $subject = "";
    } else{
        $subject = test_input($_POST["subject"]);
    }
    if (empty($_POST["message"])){
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



echo "<h2>Your input :</h2>";
echo "Name :" . $name;
echo "<br>";
echo "Email:" . $email;
*/
?>
