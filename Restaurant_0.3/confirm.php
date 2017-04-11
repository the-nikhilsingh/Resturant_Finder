<!DOCTYPE html>

<html>
<body>


<div id=1>
<h2 id="demo" class="p-align"></h2>
</div>

<?php
  // include('session.php');
  include('connect.php');
  session_start();
  ?>
  <h1 align='center'><b>Your Order</b></h1>
  <style type = "text/css">
        @import url(http://fonts.googleapis.com/css?family=Open+Sans);
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 100%; display:block; }

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow-x:hidden;}

body {
   width: 100%;
   height:100%;
   color:white;
   font-family: 'Open Sans', sans-serif;
   background: #092756;
   background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
   background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
   background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
   background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
   background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}

      </style>
  <?php
  $cust_id = $_SESSION["uname"];
  echo "<a href='index.php'><h3 style='margin-left:80%'>Logout User,".$cust_id."</h3></a>";
  if(isset($_GET['a'])){
      $_SESSION['link']=$_GET['a'];
      $branch_id = $_SESSION['link'];
   }

//$sql = "SELECT order_id,b_id,cust_id from current_order where cust_id=('$cust_id')";
// Starters
$sql = "select SUM(price) from `starters` where b_id = $branch_id and item_id in( select item_id from current_order c where cust_id = $cust_id and c.b_id = $branch_id and course='starters')";
$sth = $conn->query($sql);
$fetch=mysqli_fetch_array($sth,MYSQLI_NUM);
$sum1 =$fetch[0];


$sql = "select starters,price from `starters` where b_id = $branch_id and item_id in( select item_id from current_order c where cust_id = $cust_id and c.b_id = $branch_id and course='starters')";
$result = $conn->query($sql);
echo "<b>Starters</b><br>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<table><tr colspan=''2''><th>&nbsp". $row["starters"] ."&nbsp</th><th>₹".$row["price"]."</th></tr></table>";
    }

    echo"</table>";
} else {
     echo "Oops nothing here";
}
echo '<button class="btn btn-primary btn-block btn-large" style="width:150px;  style="margin-left:13%;"><a href="starters.php?a='.$branch_id.' ">Edit Starters</a></button>';
// mains
$sql = "select SUM(price) from `mains` where b_id = $branch_id and item_id in( select item_id from current_order c where cust_id = $cust_id and c.b_id = $branch_id and course='mains')";
$sth = $conn->query($sql);
$fetch=mysqli_fetch_array($sth,MYSQLI_NUM);
$sum2 =$fetch[0];

$sql = "select mains,price from `mains` where b_id = $branch_id and item_id in( select item_id from current_order c where cust_id = $cust_id and c.b_id = $branch_id and course='mains')";
$result = $conn->query($sql);
echo "<br><b>Mains</b><br>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<table><tr colspan=''2''><th>&nbsp". $row["mains"] ."&nbsp</th><th>₹".$row["price"]."</th></tr></table>";

    }

    echo"</table>";
} else {
     echo "Oops nothing here";
}
echo '<button class="btn btn-primary btn-block btn-large" style="width:150px;  style="margin-left:13%;"><a href="mains.php?a='.$branch_id.' ">Edit Mains</a></button>';
// specialty
$sql = "select SUM(price) from `specialty` where b_id = $branch_id and item_id in( select item_id from current_order c where cust_id = $cust_id and c.b_id = $branch_id and course='specialty')";
$sth = $conn->query($sql);
$fetch=mysqli_fetch_array($sth,MYSQLI_NUM);
$sum3 =$fetch[0];

$sql = "select specialty,price from `specialty` where b_id = $branch_id and item_id in( select item_id from current_order c where cust_id = $cust_id and c.b_id = $branch_id and course='specialty')";
$result = $conn->query($sql);
echo "<br><b>Specialty</b><br>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<table><tr colspan=''2''><th>&nbsp". $row["specialty"] ."&nbsp</th><th>₹".$row["price"]."</th></tr></table>";

    }

    echo"</table>";
} else {
     echo "Oops nothing here";
}
echo '<button class="btn btn-primary btn-block btn-large" style="width:150px;  ><a href="specialty.php?a='.$branch_id.' ">Edit Speciality</a></button>';
// desserts
$sql = "select SUM(price) from `desserts` where b_id = $branch_id and item_id in( select item_id from current_order c where cust_id = $cust_id and c.b_id = $branch_id and course='desserts')";

$sth = $conn->query($sql);
$fetch=mysqli_fetch_array($sth,MYSQLI_NUM);
$sum4 =$fetch[0];

$sql = "select desserts,price from `desserts` where b_id = $branch_id and item_id in( select item_id from current_order c where cust_id = $cust_id and c.b_id = $branch_id and course='desserts')";
$result = $conn->query($sql);
echo "<br><b>Desserts</b><br>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<table><tr colspan=''2''><th>&nbsp". $row["desserts"] ."&nbsp</th><th>₹".$row["price"]."</th></tr></table>";

    }

    echo"</table>";
} else {
     echo "Oops nothing here";
}
$total_sum = $sum1+$sum2+$sum3+$sum4;

echo '<button class="btn btn-primary btn-block btn-large" style="width:150px;  ><a href="desserts.php?a='.$branch_id.' ">Edit Desserts</a></button>';
$conn->close();
echo "<h1 align = 'center'><b>Total Payable amount : ₹".$total_sum.'</b></h1>';

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }
  });
});
</script>
</body>
</html>
