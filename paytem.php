
<!DOCTYPE html>
<html>
    <head>
     <style>
        .main{
            background-color: lightblue;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .main1{
            border-style: solid;
            border-color: orangered;
            text-align: center;
            width: 50%;
        }
        button{
            width: 140px;
            height: 50px;
             color:white;
           background-color: brown;
            border-radius: 6px;
            border-color: orange;
         } 
         h2,h3{
            color: blueviolet;
         }
         a{
            color:white;
            text-decoration: none;
         }
         
     </style>
    </head>
    <body>
    <?php
    session_start();
     $x = $_GET["x"];
    $y = $_GET["y"];
   
     $z = $x*3000+$y*2000;
     $_SESSION["total"] = $z;
     $_SESSION["slepper"] = $x;
     $_SESSION["seat"] = $y;

?>
        <div class="main">
             <div class="main1">
                <h2 style="color:red"> YOU BOOKED</h2>
                <h2> SLEPPER: <?php echo $x;?></h2>
                <h2> SEAT:  <?php echo $y;?></h2>
                <h3> TOTAL AMOUNT:  <?php echo $z;?></h3>
                <div>
                <button class="but1" > <a href="printpaytem.php"> PAY AMOUNT </a> </button>
                
                </div>
               
             </div>
        </div>
    </body>
</html>


