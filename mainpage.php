<!DOCTYPE html>
<html>
    <head>
    <style> 
    .background {
    background-image:url("https://wallpapercave.com/wp/wp9167803.jpg");
     background-size: cover;
      height: 100vh; 
      padding: 10px;
   }
    nav{
    background-color:beige; 
    height: 80px;  
    border-radius: 15px;
    position: fixed;
    width:98%;
    } 
         ul{
     list-style-type: none;
     display: flex;
     justify-content: space-around;
     align-items: center;
        } 
      .navbar-image{
        width: 100px;
        height: 60px; 
      }
    .navitem{
   color:orange; 
   text-decoration: none; 
   font-weight: bold;
   font-size:18px;
      } 
    .navitem:hover{
    border-radius: 5px; 
    border-color:  burlywood; 
   color: red; 
   font-size: 25px;
    font-family: 'Times New Roman', Times, serif;
    font-weight:bold;
}   
.name{
  font-size: 35px;
  color:green; 
  text-align: center;
  font-weight: bold;  
}  
.profile{
  display: flex;
  align-items: center;
}  
.middleone{
  margin-top: 140px ;
} 
.Main{
  text-align: center;
  color:red;
  font-size: 30px;
} 
.main1{
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-direction: row;
} 
input{
  height: 20px;
}
.book{
  background-color: transparent;
  border-radius: 20px;
  background-size: cover;
  text-align: center;
  height: 500px;
  padding: 10px;
 border-color:gold;
 border-width: 5px;
  border-style: solid; 
}
.reverse{
  width:50px;
  height: 40px;
}  
label{
  color: darkblue; 

  font-weight: bold;
  font-size: 24px;
  font-family: "roboto";

}
#from{
  width:200px;
  border-radius: 6px;
  height: 30px;
}
#to{
 
  width:200px;
  border-radius: 6px;
  height: 30px;

}
.img{
  width:100px;
}
h1{
  color:orangered;
  font-weight: bold;
}
.number{
    width:40px;
    height:20px;
}
select{
  width: 200px;
  height: 30px;
}
.sub{
   width: 100px;
   height: 50px;
   color:white;
   background-color: brown;
   border-radius: 6px;
   border-color: orange;
}
span{
  color: green;
}
p{
  color:rebeccapurple;
  font-size: 30px;
  font-weight:bold;
}
    </style>        
    </head>
    
    <body>
        <?php 
        session_start();
        $x = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $to = $_POST["to"];
          $from = $_POST["from"];
          $no = $_POST["no"];
          $sit = $_POST["sit"];
          $dat = $_POST["dat"];
          $y =  date('Y-m-d');
          if(empty($to)){
            $x = "ENTER TO ADDRESS!!";
          } 
          else if(empty($from)){
            $x = "ENTER FROM ADDRESS!!";
          }
          else if(empty($no)){
            $x = "ENTER NO OF  PASSENGERS!!";
          }
          else if($no<=0){
            $x = "ENTER ATLEAST ONE PASSENGER!!";
          }
          else if(empty($sit)){
            $x = "ENTER FROM SIT PREFERENCE!!";
          }
          else if(empty($dat)){
            $x = "ENTER FROM DATE YOU GOING!!";
          } 
          elseif($dat< $y){
            $x = "DATE NOT BE PREVIOUS DAYS";
          } 
          else{
            $to = strtoupper($to);
            $from = strtoupper($from);
            $_SESSION["to"] = $to;
            $_SESSION["from"] = $from;
            $_SESSION["no"] = $no;
            $_SESSION["sit"] = $sit;
            $_SESSION["dat"] = $dat;
            $conn = new mysqli("localhost","root","","db");
            $sql = "SELECT * FROM bus_root WHERE from_one ='$from' AND to_one = '$to';";
            $sql1 = "SELECT * FROM bus_root WHERE from_one ='$to' AND to_one = '$from';";
            $result = $conn->query($sql);
            $result1 = $conn->query($sql1);
            $row = mysqli_fetch_assoc($result);
            if ($result->num_rows > 0 OR $result1->num_rows > 0) {
                header("location:Bookticket.php");
            }
            else {
                 $x = "ROOT IS INVALID!!";
            }
            $conn->close();
          }

          
        }
        ?>
       <div class="background">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <ul> 
          <li class="profile">
               <img
                src="https://assets.materialup.com/uploads/b6c33467-82c3-442c-a2dc-c089bbff9fa1/preview.png"
                class="navbar-image"
                alt="Profile"
              >  
              <span class="name">
              <?php echo $_SESSION["Username"];?>
               &#x1F600;
              </span>
          </li>
          <li >
            <a   href="#" class="navitem">
              BOOK TICKETS
           </a>
          </li>
          <li class="navitem">
            <a  href="busimage.html" class="navitem">BUS IMAGES</a>
          </li>
          <li class="navitem">
            <a  href="Bookstatus.php" class="navitem">YOUR BOOKINGS</a>
          </li>
          <li class="navitem">
            <a  href="LANDPAGE.html" class="navitem">LOGOUT</a>
          </li>
        </ul>
    </nav>
      <div class="middleone"> 
        <div>
        <h1 class="Main">
          WELCOME <span><?php echo $_SESSION["Username"];?></span>
          TO OUR NARAYANA RESERVATION
        </h1> 
        <div class="main1">
        <div class="book"> 
       <h1> BOOK TICKET</h1> 
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <p> <?php echo $x; ?><br>
          <label>From<label>
            <input type="text" id="from" value="Vijyawada" name="from"> 
             <label>TO<label>
            <input type="text" id="to" value="Tirupati" name="to"><br><br>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL6KX760s30p3cgnSpq3qlyoQrUwCXgy5c0Q&usqp=CAU" class="reverse" onclick="reverse()"><br><br>
            <p id="p"> </p>
            <label> Number of Passengers </label>
            <input type = "number" class="number" name="no">
            <label> Seatting option </label>
            <select name="sit">
                <option>
                  Window seat
                 </option>
                 <option>
                   Upper bed
                 </option>
                 <option>
                   Lower bed
                 </option>
                 
            </select> <br><br><br>
            <label> Departure Date
            </label>
            <input type="date" name="dat">
            <label> BUS TYPE </label>
            <select name="type">
                <option>
                  AC
                 </option>
                 <option>
                  NON AC
                 </option>
            </select> <br><br><br>
            
         <input type="submit" value="SEARCH BUS" class="sub">
         </form>
        </div>
     </div>
       </div> 
      </div>
       </div>

       <script>
        const to = document.getElementById("to");
        const from = document.getElementById("from");
        const para =document.getElementById("p")
        function reverse(){
         const temp = to.value;
          to.value = from.value;
          from.value = temp;
        }
        </script>
    </body>
</html>