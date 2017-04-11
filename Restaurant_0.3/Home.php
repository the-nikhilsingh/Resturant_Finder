<!DOCTYPE html>
<?php
session_start();
if(isset($_POST['submit'])){

  $vegs =  $_POST['vegs'];
  $cusine = $_POST['cusine'];
    $_SESSION["vegs"] = $vegs;
    $_SESSION["cusine"] = $cusine;
    $lat = $_POST['lat'];
  $long = $_POST['long'];
 $_SESSION["lat"] = $lat;
  $_SESSION["long"] = $long;


}

	
?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
  body{
	  font-family:"Trebuchet MS", Helvetica, sans-serif;
  }
 </style>
<body>
<div class="parallax">
<h1 class="p-align" >Resturant.com</h1>
<h2 class="p-align" >Welcome, <?php echo $_SESSION["uname"]; ?></h2>
<a href="index.php"><h2 class="p-align">Logout</h2></a>
<h1 class="h1-text">Click the button to get to know resturtants near you</h1>
<a href="#1"><button class="button-three">Try It</button></a>
<h1 class="h1-text">Click the button to get to know the chef's near you</h1>
<button class="button-three" onClick="document.location.href='Chef_entry.php'" >Chef Details</button>

<div id=1>
<h2 id="demo" class="p-align"></h2>
</div>
</div>

<?php
  // include('session.php');
  include('connect.php');
$sql = "SELECT DISTINCT b.Name,b.id,rating,( 3959 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians($long) ) + sin(radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM location as l, branch as b
WHERE b.id=l.id HAVING distance < '312' ORDER BY distance  LIMIT 0 , 20";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<h1 style='text-align:center;'>Restuarants Near you</h1>";
  echo"<table style='padding-left:35%; font-size:20px;'><th>Resturant</th>&nbsp;<th>Rating</th>";
    while($row = $result->fetch_assoc()) {
      echo "<tr colspan=''2''><th>&nbsp". $row["Name"] ."&nbsp</th><th>" . $row["rating"]. "&nbsp</th><th><a href='starters.php?a=".$row['id']."'><button class='button-one'>Order Now</button></a></th><th><a href='ratings.php?a=".$row['id']."'><button class='button-one'>rate it</button></a></th></tr>";
    }

    echo"</table>";
} else {
     echo "0 results";
}
$conn->close();
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
<button style="border-radius: 25px; border: 2px solid #73AD21; padding: 10px; background: none;" class="button-four" onClick="document.location.href='Promotional.php'" >Know The Promotional Offers</button>
</body>
</html>
