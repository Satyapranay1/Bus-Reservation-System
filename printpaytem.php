<!DOCTYPE html>
<html>
  <head>
    <title>Payment Successful</title>
    <style>
        .main1{
            text-align: center;
            background-color:white ;
            border-radius: 10px;
            padding: 6px;
           width: 400px;
        }
        img{
            width: 100px;
        }
      .main{
        background-color: aqua;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      span{
        color:red;
      }
      button{
            width: 130px;
            height: 50px;
             color:white;
           background-color: brown;
            border-radius: 6px;
            border-color: orange;
         }
    </style>
  </head>
  <body>
    <?php 
      session_start();
      $name = $_SESSION["Username"];
      $from = $_SESSION["from"];
      $to = $_SESSION["to"];
      $x = $_SESSION["total"];
      $slep = $_SESSION["slepper"];
      $seat =  $_SESSION["seat"];
      $y = date("Y");
      $t = date("Y-m-d"); 
      $random = rand(); 
      $current_time = new DateTime();
      $current_time->add(new DateInterval('PT3H30M'));
      $conn = new mysqli("localhost", "root", "", "db");
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "INSERT INTO  book_tickets VALUES ('$name','".$t."','$from','$to','$slep','$seat','$x');";
          if ($conn->query($sql) === TRUE) {
          } 
          else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

    ?>
    <div>
   
        <div class="main">
       
            <div class="main1">
                <h1>Payment Successful</h1>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYf-yn96mf5wuchdC1h_3PdzfM4KiBxA-Huw&usqp=CAU"/>
                <h3>Thank you for your payment! Your transaction of <span> <?php echo $x;?> </span> has been completed successfully.</h3>
                <h3>Transaction ID: <?php echo $random;?> </h3>
                <h3>Date and Time: <?php echo $t;?> <?php echo $current_time->format('h:i A'); ?></h3>
                <button onclick = "z()">  GO HOME PAGE </button>
                <button onclick = "y()">  PRINT RECEIPT </button>
               
            </div>
            
      
        </div>
        <script>
         function y(){
          window.print();
         }
       function z(){
        window.location = "mainpage.php";
       }
          </script>
   
  </body>
</html>
