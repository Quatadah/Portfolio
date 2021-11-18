<html>
<body>

<?php
$name = $email = $subject = $message = "";
$nameErr = $emailErr = $subjectErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
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
echo "<br>";
echo "Name : $name";
echo "<br>";
echo "Email: $email";

?>
Hi <?php $name ?> your email adress is <?php $email ?>
</body>
</html>