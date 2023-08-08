<html>
<body>

Here is the UNSCHEDULED table <br><br>

</body>
</html>


<?php
$servername = "ecs-pd-proj-db.ecs.csus.edu";
$username = "CSC174143";
$password = "Csc134_998570202";
$dbname = "CSC174143";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM UNSCHEDULED";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "initial: " . $row["initial"]. " - time: " . $row["time"]. " - shift: " . $row["shift"] . " - cause: " . $row["cause"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
