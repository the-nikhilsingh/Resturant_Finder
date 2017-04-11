<html>
<?php
include('connect.php');
session_start();

$cust_id = $_SESSION["uname"];

$branch_id = $_SESSION['branch_id'];
$sql = "SELECT cust_id, review, rating from bloggers where b_id = $branch_id";
$result = $conn->query($sql);
echo "<table style= font-size:20px; color:white;'><th>Customer</th><th>Review</th><th>Rating</th>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr colspan=''2''><th >&nbsp". $row["cust_id"] ."&nbsp</th><th>" . $row["review"]. "&nbsp</th><th>".$row['rating']."</th></tr>";
  }
  echo '</table>';
}
else{
  echo 'Nothing on your cart';
}

 ?>
 <style>
  body{
	  color:white;
	font-family: 'Open Sans', sans-serif;
  }
 </style>
</html>