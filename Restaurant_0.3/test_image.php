<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style1.css">
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "food1";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$id1 =1;

$branch_id = 541212; // dummy,get from session
$cust_id = 12345678; // dummy,get from session
$query = "SELECT count(*) FROM desserts where id = $branch_id" ;
$sth = $conn->query($query);
$fetch=mysqli_fetch_array($sth,MYSQLI_NUM);
$limit =$fetch[0];

while($id1 <= $limit){
  $query = "SELECT * FROM desserts where item_id = $id1 and id = $branch_id" ;
  $sth = $conn->query($query);
  $fetch=$sth->fetch_assoc();
  $a = $fetch["desserts"];
  //echo gettype($a);
  echo '<br><img src="data:image/jpg;base64,'.base64_encode( $fetch['image'] ).'" style="width:200px;height:200px;"/>'.$a;
  echo '<input type="button" value="Add to cart" id=$id1 onclick="insertCurrent('.$id1.')"/>';
  $id1+=1;
}
?>

<script type="text/javascript">
function insertCurrent(x) {
console.log(x);
<?php
echo $id1;
//$sql = "INSERT into current_order values($cust_id,$branch_id,) ";
//$conn->query($sql);
//INSERT INTO `current_order` (`cust_id`, `order_id`, `menu_id`,`TimeStamp`) VALUES ('987648091', '1091', '364591'now());
?>
};
</script>
</html>