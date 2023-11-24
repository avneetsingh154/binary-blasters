<?php
// Get the Base64 string
$base64ImageContent = $_POST['image'];

// Convert the Base64 string back to binary data
$data = base64_decode($base64ImageContent);

// Connect to the MySQL database
$mysqli = new mysqli("localhost", "root", "", "image");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

// Prepare an SQL statement
$stmt = $mysqli->prepare("INSERT INTO images (image) VALUES (?)");

// Bind the binary data to the SQL statement
$stmt->bind_param("s", $data);

// Execute the SQL statement
$stmt->execute();

// Close the statement and the connection
$stmt->close();
$mysqli->close();
?>
<!DOCTYPE html>
<html>
<body>

<video id="video" width="640" height="480" autoplay></video>
<button id="snap">Snap Photo</button>
<canvas id="canvas" width="640" height="480"></canvas>

<script>
// Grab elements, create settings, etc.
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
    });
}

// Elements for taking the snapshot
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 640, 480);
  
  	// Convert the canvas image to Base64
  	var base64Image = canvas.toDataURL("image/png");

  	// Remove the Base64 "header"
  	var base64ImageContent = base64Image.replace(/^data:image\/(png|jpg);base64,/, "");

  	// Send the Base64 image to the server
  	// You would need to implement this function to make an AJAX call to your server
  	sendImageToServer(base64ImageContent);
});
</script>

</body>
</html>
