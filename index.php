<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "nkustdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>余彥亨</title>
    <style>
    	body { font-family: 微軟正黑體 }
    </style>
  </head>
  <body>
  	<div class="container">
    <h1>余彥亨的PHP網站</h1>
    <hr>
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="https://mis.nkust.edu.tw/">資訊管理系</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="exchange.php">匯率換算</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="exchange2.php">自訂匯率換算</a>
  </li>
</ul>
<hr>

<?php
	$sql = "SELECT * FROM news";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	echo "<table class = 'table table-striped'>";
	echo "<tr><th>編號</th><th>馬路消息</th><th>張貼日期</th></tr>";
	while($row = $result->fetch_assoc()) {
	  echo "<tr>";
	  echo "<td>" . $row["id"]. "</td>" .
	  	   "<td>" . $row["title"]. "</td>" .
	  	   "<td>" . $row["pub_date"]. "</td>";
	  echo "</tr>";
	}
	echo "</table>";
	} else {
	echo "0 results";
	}
	$conn->close();
?>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>