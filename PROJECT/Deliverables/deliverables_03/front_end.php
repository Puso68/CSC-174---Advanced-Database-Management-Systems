 <?php
$servername = "ecs-pd-proj-db.ecs.csus.edu";
$username = "lpuso";
$password = "Shanell@413622";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 