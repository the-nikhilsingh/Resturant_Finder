<html>
<link rel="stylesheet" type="text/css" href="style1.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<style>


</style>
<body>
<br>
<?php
$test = "";


include('connect.php');
session_start();
$cust_id = $_SESSION["uname"];
echo "<a href='index.php'><h3 style='margin-left:80%'>Logout User,".$cust_id."</h3></a>";
//if(isset($_POST['sub'])){
//  $r_name = $_POST["Name"];
//  echo "<h3 style='margin-left:70%'>Removed from the cart : ".$r_name."</h3>";
//}
if(isset($_GET['a'])){
    $_SESSION['link']=$_GET['a'];
    $branch_id = $_SESSION['link'];
 }

$id1 =1;
//$branch_id = 541212; // dummy,get from session
//$cust_id = 12345678; // dummy,get from session
$query = "SELECT count(*) FROM desserts where b_id = $branch_id" ;
$sth = $conn->query($query);
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$conn->error;
$fetch=mysqli_fetch_array($sth,MYSQLI_NUM);
$limit =$fetch[0];
if (isset($_POST["btn"])) {
  $test = $_POST["btn"];
  $sql= "INSERT into `current_order` (`cust_id`,`b_id`,`item_id`,`TimeStamp`,`course`) VALUES($cust_id,$branch_id,$test,now(),'desserts')";
  if($conn->query($sql) !== FALSE){
    echo "Added to the cart : ".$test;
  }
  else{
    echo "Not done".$conn->error;
  }
  $test = NULL;
}

if(isset($_POST['submit'])){
  $ord = $_POST["ord_id"];
  $itm = $_POST["itm_id"];
  $i_name = $_POST["des_name"];
//  echo '<h2 style="left:50%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ord.'</h2>';
//  echo '<h2 style="left:50%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$itm.'</h2>';
  $sql = "DELETE FROM `current_order` where cust_id= $cust_id and b_id= $branch_id and item_id=$itm and order_id=$ord ;
";
  if($conn->query($sql) !== FALSE){

    echo "<h3 style='margin-left:70%'>Removed from the cart : ".$i_name."</h3>";
  }
  else{
    echo "Cannot remove.".$conn->error;
  }
  $test1 = NULL;
}
echo '<button style="margin-left:13%;"><a href="specialty.php?a='.$branch_id.' ">Previous Course</a></button>';
echo '<form action="" method="post"><h2 style="margin-left:20%;">desserts</h2>';
while($id1 <= $limit){
  $query = "SELECT * FROM desserts where item_id = $id1 and b_id = $branch_id" ;
  $sth = $conn->query($query);
  $fetch=$sth->fetch_assoc();
  $a = $fetch["desserts"];
  $b = $fetch["price"];
  //echo gettype($a);
  echo '<div style="margin-left:20%;columns: 300px '.$limit.';">';
  echo '<img src="data:image/jpg;base64,'.base64_encode( $fetch['image'] ).'" style="width:200px;height:200px;"/><br><big>'.$a.'</big>';
  echo '<br>Price : ₹'.$b.'<br><button type="submit" value="'.$id1.'" name="btn" />Add to the cart</button>';
  $id1+=1;
}
echo '</div>';

?>
<nav class="cart">
  <h1 style="text-align:center; color:white;">Cart</h1>
  <?php
  echo '<form action="" method="post">';
  $sql = "SELECT desserts, desserts.item_id, current_order.order_id from `desserts`,`current_order`  where desserts.b_id = $branch_id and cust_id= $cust_id and current_order.item_id= desserts.item_id and current_order.b_id = desserts.b_id and course='desserts';";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<br />'.$row['desserts'].'<br><input type="hidden" name="des_name" value="'.$row['desserts'].'" /><input type="hidden" name="ord_id" value="'.$row['order_id'].'" /><input type="hidden" name="itm_id" value="'.$row['item_id'].'" /><button type="submit" name="submit" value="submit" />remove from cart</button>';
    }
  }
  else{
    echo "Nothing on your cart";
  }
  ?>
  <br><button ><a href="confirm.php?a=<?php echo $branch_id ?> ">Confirm your order</a></button><br>
</nav>
<script type="text/javascript">
function insertCurrent(x) {
  console.log('<?php $sql= "INSERT into `current_order` (`cust_id`,`menu_id`,`item_id`,`TimeStamp`) VALUES($cust_id,$branch_id,$test,now())"; $conn->query($sql); echo"done" ?> ');
};
</script>
</body>
</html>
