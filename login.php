<!DOCTYPE html>
<html>
      <head>
      <link rel="stylesheet" href="login.css"> 
       <style> 
         span{
          color:red;
          font-weight: bold;
          font-size: 25px;
         }  
         .butcon{
           margin-right: 20px;
         } 
         .submit{
          margin-left: 10px;
         } 
         input{
          width: 200px;
          height: 30px;
          border-radius:6px ;
          border: none;
         }
         .cat{
          background-image: url("https://codingnepalweb.com/demos/custom-captcha-in-javascript/captcha-bg.png");
          background-size:cover;
          color:green;
          font-size: 25px;
          font-style: italic;
          width:100px;
          text-decoration: line-through;
         }
         .check{
          width:20px;
          height: 20px;
         }
        </style>
      </head>
  
      <body>
      <?php 
        $random_string = substr(md5(rand()), 0, 6);
        $k = "";
        $cap = array();
        $y = 0;
        $cap[$y] = $random_string;
        $y++;
         if($_SERVER["REQUEST_METHOD"] == "POST"){
             session_start();
             $_SESSION["Username"] = $_POST["user"];
             $name = $_POST["user"];
             $pass = $_POST["pass"];
             $cat = $_POST["cat"];
             $hut = $_POST["hut"];
            if(empty($name)){
              $k = "PLEASE ENTER YOUR USER NAME!!";
            } 
            else if(empty($pass)){
              $k = "PLEASE ENTER YOUR PASSWORD!!";
            } 
            else if(empty($cat)){
              $k = "PLEASE ENTER CAPTCHA!!";
            }
            else{
            if($cat == $hut){
              $conn = new mysqli("localhost","root","","db");
              $sql = "SELECT * FROM my_user WHERE Name='$name';";
              $result = $conn->query($sql);
              $row = mysqli_fetch_assoc($result);
              if ($result->num_rows > 0) {
                    if($pass == $row["Password"]){
                       header("location: mainpage.php");
                    } 
                    else{
                      $k = "PASSWORD IS INVALID!!";
                    }
              } 
              else {
                   $k = "USER IS INVALID!!";
              }
              $conn->close();
            }
            else{
              $k = "CAPTCHA IS INCORRECT";
            }
           
            }
         }    
      ?> 
        <div class="main-login">
        <h1>WELCOME TO NARAYANA BUS RESERVATION LOGIN PAGE</h1>
        <div class="form-login">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="f">
                <span> <?php echo $k; ?>  </span>
                <br>
                <label>USERNAME:</label>
                <input type="text" placeholder="Enter your Username" id="name" name="user"><br><br><br>
                <label>  PASSWORD:</label>
                <input type="password" placeholder = "Enter your Password" id="pass" name="pass"><br><br>
                <input type="checkbox" class="check" onclick = "check1()"> <label> Show password </label> <br><br>
                <input class="cat" type="text"  value="<?php echo $random_string;?>" name="hut" readonly >
                
                <br><br>
                <input type="text" placeholder="Enter captcha" name="cat" id="cat"><br><br>
                
             <a href="forgotpassword.php" class="forgot"> ForgotPassword </a> 
             <input type="submit" class="submit" id="submit"><br><br>
            <p id="para"> </P>
            </form> 
        </div><br>
        <div class="butcon"> 
          <a href="LANDPAGE.html"> 
            <button id="backIn">
            Back
        </button>
        </a> 
        <a href="registry.php"> 
            <button id="backIn">
             SIGN UP
        </button>
        </a> 
       

         
        </div>
        
       
    </div>
    <script>
      function check1() {
        var x = document.getElementById("pass");
      if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
      }
 

      </script>
   
  </body> 
</html>