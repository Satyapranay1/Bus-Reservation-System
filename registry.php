<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="registry.css">
        <style>
            .main-regi{
    background-image: url("https://thumbs.dreamstime.com/b/abstract-background-design-businessman-holding-smartphone-forgot-password-to-username-password-internet-browser-smartp-217804181.jpg"); 
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100%;

} 

.regi-login{
    background-color: white;
    border: none;
    text-align: center;
     border-radius: 20px;
    width: 30%;
    border-color:aqua;
    border-style: solid;
   
} 
input{
    height: 20px;
    border-radius: 6px;
    border-color: aqua;
}
form{
    border: none;
}
label{
    color: orange;
    font-weight: bold;
}
img{
    width: 110px;
   margin-top: 5px;
}
h1{
    color: gold;
}
span{
                color:red;
                font-size: 25px;
                font-weight: bold;
            } 
.sp{
                color:green;
                font-weight: bold;
            }
    
            </style>
    </head>
    <body> 
          <?php  
           
            $x = ""; 
            $y = "";
            $z = "XYZ";
           if($_SERVER["REQUEST_METHOD"] == "POST"){
                $u  = $_POST["user"];
                if(empty($_POST["user"])){
                       $x = "Enter your NAME!!";
                 } 
                 else if(empty($_POST["pass"])){
                    $x = "Enter your Password!!";
                 }  
                 else if(empty($_POST["email"])){
                    $x = "Enter your Email!!";
                }  
                else if(empty($_POST["phone"])){
                    $x = "Enter your Phone Number!!";
                 }  
                else{ 
                   if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
                      $conn = new mysqli("localhost", "root", "", "db");
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                    $sql1 = "SELECT * FROM my_user WHERE Name = '$u'";
                    $result = $conn->query($sql1);
                    $row = mysqli_fetch_assoc($result);
                    if ($result->num_rows > 0){
                        $x = "USER IS ALREADY THERE USE ANOTHER ONE";
                    }
                    else{
                        $sql = "INSERT INTO my_user VALUES (\"".$_POST["user"]."\", \"".$_POST["pass"]."\", \"".$_POST["phone"]."\");";
                        if ($conn->query($sql) === TRUE) {
                          $y=  "YOU ARE SUCCEFULLY SIGIN GO TO LOG IN PAGE";
                        } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                   
                    
                    $conn->close();
                   } 
                   else {
                         $x = $_POST["email"]."is not a valid email address";
                   }
                 

                }
                 
           } 
  
    ?>
        <div class="main-regi">
            <h1>WELCOME TO NARAYANA BUS RESEVATION LOGIN PAGE</h1>
             <div class="regi-login">
               <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">
         
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkY42EEmJyqoO-aUqUcHUs4p45fKeQIUDnHQ&usqp=CAU"/>
                    <br>
                    <span> <?php echo $x ?> </span><br><br>
                    <span class="sp">  <?php echo $y ?> </span> <br><br>
                    <label>USERNAME:</label>
                    <input type="text" placeholder="Create Your UserName" name="user"><br><br><br>
                    <label>  PASSWORD:</label>
                    <input type="password" placeholder = "Create your Password" name="pass"><br><br><br>
                    <label>  YOUR EMAIL:</label>
                    <input type="email" placeholder = "Enter your Email" name="email"> 
            
                    <br> <br> <br>
                    <label>  PHONE NUMBER:</label>
                    <input type="number" placeholder="Enter your PhoneNumber" name="phone">
                    <br><br><br>
                    <label>  DATE OF BIRTH:</label>
                    <input type="date"><br><br><br>
                    <input type="checkbox"><label> MALE</label>
                    <input type="checkbox"><label> FEMALE</label><br> <br>
                        <button class="back">
                            <a href="LANDPAGE.html"> 
                             BACK
                             </a>
                        </button>
                      
                   <a href="login.html">
                    <button class="submit">
                        SIGUP
                        </button>
                   </a>
                   
                   <br> <br>
             
                </form>
           
            </div>
        </div> 
      

    </body>
</html>