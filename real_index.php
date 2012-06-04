<!doctype html>
<html>
<head>
<title>Main Web Page</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script rel="javascript" type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<?php
  echo "<div class='alert alert-info'>";
	if (isset($_SESSION['display-size'])) {
		$dir = $_SESSION['display-size'];
	}
	else {
		echo "<h3>I don't know the screen size</h3>"; $dir="small";
	}
	echo "Screen size: ". $_SESSION['x-size']."x".$_SESSION['y-size']."<br/>";
  echo "Images are being served from [". $_SESSION['display-size']."] directory.<br/>";

  echo "</div>";
?>

<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="img/gallery/<?php echo $dir ?>/dojocat.jpg"></img></div>
    <div class="item"><img src="img/gallery/<?php echo $dir ?>/forktocat.jpg"></img></div>
    <div class="item"><img src="img/gallery/<?php echo $dir ?>/momtocat.png"></img></div>
    <div class="item"><img src="img/gallery/<?php echo $dir ?>/octobiwan.jpg"></img></div>
    <div class="item"><img src="img/gallery/<?php echo $dir ?>/original.jpg"></img></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>


<script>
$(document).ready(function(){
       $('.carousel').carousel({
  			interval: 2000
		})
     });

</script>


</body>
</html>