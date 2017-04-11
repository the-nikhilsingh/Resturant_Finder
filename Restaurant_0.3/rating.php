<html>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "eatery";


$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

session_start();

$cust_id = $_SESSION["uname"];

$branch_id = $_SESSION['branch_id'];
//just for making the transition safe, deleting the values
//after it is added.
//$cust_id = mysqli_real_escape_string($link, $_REQUEST['custid']);
//$branchid = mysqli_real_escape_string($link, $_REQUEST['branchid']);
$reviews = mysqli_real_escape_string($link, $_REQUEST['reviews']);
$ratings = mysqli_real_escape_string($link, $_REQUEST['star']);

$sql = "DELETE from bloggers where cust_id= $cust_id and b_id= $branch_id";
if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "";
}
$sql = "INSERT INTO bloggers (cust_id,b_id, review, rating) VALUES ('$cust_id','$branch_id', '$reviews', '$ratings')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>

</body>
</html>
