<!DOCTYPE html>
<html>
<head>

<style>
    table{
        text-align: center;
        height: 80%;
        width: 80%;
       
    }
    table,th,td{
        border: 1px solid blue;
    }
    body{
        text-align: center;
        background-color: coral;
    }
    .book{
        text-align: center;
        margin-left: 90px;
    }
    button{
            width: 100px;
            height: 50px;
             color:white;
           background-color: brown;
            border-radius: 6px;
            border-color: orange;
            margin-bottom: 5px;
         }
</style>

</head>




<body>
    <h1>
       YOUR BOOKINGS 
</h1>
<div class="book">


<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$name = $_SESSION["Username"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM book_tickets WHERE Name = '$name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table><tr><th>Name</th><th>Date</th><th>FROM</th><th>TO</th><th>Slepper</th><th>Seat</th><th>TotalCost</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Name"]."</td><td>".$row["Date"]." <td>".$row["From1"]."</td> <td>".$row["To2"]." </td><td>".$row["Slepper"]."</td> <td>".$row["Seat"]."</td> <td>".$row["cost"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "YOU DIDNOT BOOK ANY TICKETS";
}
$conn->close();

   
?>
</div>
<br>
<br>
<br>
<button onclick="f()">
    Back
</button>
<script>
    function f(){
        window.location = "mainpage.php";
    }
    </script>
</body>

</html>
