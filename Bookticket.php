<!DOCTYPE html>
<html>
    <head>
        <style>
         .main-container{
            background-image: linear-gradient(yellow,red); 
    
            display: flex; 
            padding: 15px;
            align-items: center;
            flex-direction: column;
         }
         .page{
            background-color: white;
            border-radius: 12px;
            display: flex; 
            align-items: center;
            justify-content: space-around;
             width: 60%;
            margin-bottom: 10px;
         }
         .head{
            text-align: center; 
            color: rgb(179, 0, 255);
         }
         img{
            width: 300px;
         } 
         h3{
            font-weight: bold;
         }
         button{
            width: 100px;
            height: 50px;
             color:white;
           background-color: brown;
            border-radius: 6px;
            border-color: orange;
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
          $to = $_SESSION["to"];
          $from= $_SESSION["from"];
          $no = $_SESSION["no"];
          $sit = $_SESSION["sit"];
          $dat = $_SESSION["dat"];
          $id1 = rand(100000,999999);
          $id2 = rand(100000,999999);
          $id3 = rand(100000,999999);
          $id4 = rand(100000,999999);
          $id5 = rand(100000,999999);
          $id6 = rand(100000,999999);
          $id7 = rand(100000,999999);
          $id8 = rand(100000,999999);
          $id9 = rand(100000,999999);
          $id10 = rand(100000,999999);
          $id11 = rand(100000,999999);
          $_SESSION["id1"] = $id1;
          $_SESSION["id2"] = $id2;
          $_SESSION["id3"] = $id3;
          $_SESSION["id4"] = $id4;
          $_SESSION["id5"] = $id5;
          $_SESSION["id6"] = $id6;
          $_SESSION["id7"] = $id7;
          $_SESSION["id8"] = $id8;
          $_SESSION["id9"] = $id9;
          $_SESSION["id10"] = $id10;
          $_SESSION["id11"] = $id11;
         /* $y =  date('Y-m-d');
          $i = "";
          $j = "";
          $current_time = new DateTime();
          $current_time->add(new DateInterval('PT3H30M'));
          echo $current_time->format('h:i A'); 
         if($dat == $y){ 
            $other_time = new DateTime('12:00 AM');
            $time_difference = $current_time->diff($other_time);
            $c =  $time_difference->format('%h');
            if($c == '0'){
               $i 
            }
              
          }*/
        ?>
       <div class="main-container">
       <button class="but">  <a href="mainpage.php"> Back</a></button> 
          <h1 class="head"> BOOK TICKETS</h1>
          <div class="page">
             <div>
               <h2>BUSID : <?php echo $id1 ?> </h2>
                <img src="https://media.gettyimages.com/id/135327019/photo/white-passenger-bus.jpg?s=612x612&w=gi&k=20&c=oOnC5CrZI23rf4fy3EvKzL0LsJ3nBkDXJfEmrSN0qPo=">
             </div> 
             <div class="theory">
                 <h3> <?php echo $from;?> -> <?php echo $to;?></h3> 
                 <h3> Bustype: <?php echo $sit;?></h3> 
                 <h3> Depature time: 12:00 AM</h3>
                 <h3> DATE : <?php echo $dat?> </h3>
                <button> <a href="Bookbus1.php"> Book Now </a> </button>
             </div>
          </div>

          <div class="page">
            <div>
              <h2>BUSID : <?php echo $id2 ?> </h2>
               <img src="https://assets.volvo.com/is/image/VolvoInformationTechnologyAB/1860x1050-volvo-9700-CGI1?qlt=82&wid=1024&ts=1656931444230&dpr=off&fit=constrain">
            </div> 
            <div class="theory">
                <h3> <?php echo $from;?> -> <?php echo $to;?></h3> 
                <h3> Bustype: <?php echo $sit;?></h3> 
                <h3> DATE : <?php echo $dat?> </h3>
                <h3> Depature time: 2:00 AM</h3>
               <button> <a href="Bookbus2.php"> Book Now </a> </button>
            </div>
         </div>

         <div class="page">
            <div>
            <h2>BUSID : <?php echo $id3 ?> </h2>
               <img src="https://etimg.etb2bimg.com/photo/85487718.cms">
            </div> 
            <div class="theory">
                <h3> <?php echo $from;?> -> <?php echo $to;?></h3> 
                <h3> Bustype: <?php echo $sit;?></h3>
                <h3> DATE : <?php echo $dat?> </h3> 
                <h3> Depature time: 6:00 AM</h3>
               <button> <a href="Bookbus3.php"> Book Now </a> </button>
            </div>
         </div>


         <div class="page">
            <div>
            <h2>BUSID : <?php echo $id4 ?> </h2>
               <img src="https://assets.volvo.com/is/image/VolvoInformationTechnologyAB/1860x1050-Volvo-7900-S-Charge-front45?qlt=82&wid=1024&ts=1629797017384&dpr=off&fit=constrain">
            </div> 
            <div class="theory">
                <h3> <?php echo $from;?> -> <?php echo $to;?></h3> 
                <h3> Bustype: <?php echo $sit;?></h3> 
                <h3> DATE : <?php echo $dat?> </h3>
                <h3> Depature time: 8:00 AM</h3>
               <button> <a href="Bookbus4.php"> Book Now </a> </button>
            </div>
         </div>


         <div class="page">
            <div>
            <h2>BUSID : <?php echo $id5 ?> </h2>
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_-wTgwU2vuCSdE28qavfMC637Du-YGHzCdaHD91Qgts35bBn42ykC-SowXqWaHVbpr6A&usqp=CAU">
            </div> 
            <div class="theory">
                <h3> <?php echo $from;?> -> <?php echo $to;?></h3> 
                <h3> Bustype: <?php echo $sit;?></h3>
                <h3> DATE : <?php echo $dat?> </h3> 
                <h3> Depature time: 10:00 AM</h3>
               <button> 
            <a href="Bookbus5.php"> Book Now </a></button>
            </div>
         </div>


         <div class="page">
            <div>
            <h2>BUSID : <?php echo $id6 ?> </h2>
               <img src="https://assets.volvo.com/is/image/VolvoInformationTechnologyAB/1860x1050-Volvo-8900-front45?qlt=82&wid=1024&ts=1629797018395&dpr=off&fit=constrain">
            </div> 
            <div class="theory">
                <h3><?php echo $from;?> -> <?php echo $to;?></h3> 
                <h3> Bustype: <?php echo $sit;?></h3>
                <h3> DATE : <?php echo $dat?> </h3> 
                <h3> Depature time: 12:00 PM</h3>
               <button>  <a href="Bookbus6.php"> Book Now </a></button> 
            </div>
         </div>

         
         <div class="page">
            <div>
            <h2>BUSID : <?php echo $id7 ?> </h2>
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRBgHt8E0jII5upHE1aDrI1-hoLPY_MhA7kDPcuReGYdr6IDcSpibasnA36Q5V8SAXu6o&usqp=CAU">
            </div> 
            <div class="theory">
                <h3> <?php echo $from;?> -> <?php echo $to;?></h3> 
                <h3>Bustype: <?php echo $sit;?></h3> 
                <h3> DATE : <?php echo $dat?> </h3>
                <h3> Depature time: 2:00 PM</h3>
               <button>  <a href="Bookbus7.php"> Book Now </a></button> 
            </div>
         </div>

         <div class="page">
            <div>
            <h2>BUSID : <?php echo $id8 ?> </h2>
               <img src="https://img.theweek.in/content/dam/week/news/biz-tech/images/2020/8/13/volvo-bus.jpg">
            </div> 
            <div class="theory">
                <h3><?php echo $from;?> -> <?php echo $to;?></h3> 
                <h3> Bustype: <?php echo $sit;?></h3> 
                <h3> DATE : <?php echo $dat?> </h3>
                <h3> Depature time: 4:00 PM</h3>
               <button>  <a href="Bookbus8.php"> Book Now </a></button>
            </div>
         </div>

         <div class="page">
            <div>
            <h2>BUSID : <?php echo $id9 ?> </h2>
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjkb04Jx_pEWu7T4z1ljwaB2rJ0NZc7Aty-U_p4U-zXygaY4A-eYVNAWwD09qxkTC7dsM&usqp=CAU">
            </div> 
            <div class="theory">
                <h3> <?php echo $from;?> -> <?php echo $to;?></h3> 
                <h3> Bustype: <?php echo $sit;?></h3> 
                <h3> DATE : <?php echo $dat?> </h3>
                <h3> Depature time: 6:00 PM</h3>
               <button>  <a href="Bookbus9.php"> Book Now </a></button> 
            </div>
         </div>


         <div class="page">
            <div>
               <h2>BUSID : <?php echo $id10 ?> </h2>
               <img src="https://etimg.etb2bimg.com/photo/93335033.cms">
            </div> 
            <div class="theory">
                <h3> <?php echo $from;?> -> <?php echo $to;?></h3> 
                <h3>Bustype:<?php echo $sit;?></h3> 
                <h3> DATE : <?php echo $dat?> </h3>
                <h3> Depature time: 8:00 PM</h3>
               <button> <a href="Bookbus10.php"> Book Now </a> </button>
            </div>
         </div>
         
       </div>
    </body>
    
</html>