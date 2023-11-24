<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
    <header class=head>
		<div class="j"><h2>TRASH-TRACK<h2></div>
	<a href="" target="_parent" class="ra">HOME</a>
	<a href="aboutus.php" target="_parent" class="ra">ABOUT US</a>
	<a href="" target="_parent" class="ra">TRACK DRIVER</a>
    </header>
    <div class="backphoto">
        <div class="empty">
            
        </div>
     <div >
        <button class="btn_1"></button>
       <a href="location.php" target="_parent"><button class="button-20" >WASTE COMPLAINT</button></a>
       <a href="regular.php" target="_parent"><button class="button-18" >REGULAR PICKUP</button></a>
   </div>
   </div>
    
    <footer class="s">
        <H3>SERVING NATURE</H3>
    </footer>
</body>
</html>

</body>
</html>