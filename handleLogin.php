
<?php

include "connection.php";


//getting data
$userName=$_POST['userName'];
$password=$_POST['password'];

//clean data
function cleanData($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}

//call function
$userName = cleanData($userName);
$password = cleanData($password);

//compare input data with database
$query = "SELECT customerName , CustomerPass
FROM customers
WHERE customerName='$userName'
AND CustomerPass = $password
";
$result = $conn->query($query);

//validation
$errors=[];
$valid=true;

if($result->num_rows == 0 && $userName!="" && $password!="")
{
    $errors['data']="Not vaild data";
    $valid=false;
}

if(!filter_var($userName, FILTER_SANITIZE_STRING) || $userName="")
{
    $errors['userName']="Not vaild username";
    $valid=false;

}

if($password=""  || !filter_var($password, FILTER_VALIDATE_REGEXP,
array("options"=>array("regexp"=>"/^[a-zA-Z0-9]{5,12}$/"))))
{
    $errors['password']="Not Valid Password";
    $valid=false;

}


$_SESSION['errors']=$errors;

if(isset($_SESSION['errors']))
{
    header('location: login.php');
}

if($valid===true)
{
    $_SESSION['userName']=$userName;
    $_SESSION['password']=$password;

    header('location: home.php');
}

?>