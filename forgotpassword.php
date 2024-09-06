<!DOCTYPE html>
<html>
    <head>
         <style>
           .main{
             display: flex;
             flex-direction: column;
             align-items: center; 
             justify-content: center;
             padding: 100px;
             background-color: white;
             border-radius: 8px;
             width: 120px; 
             height: 400px;
           } 
           h1{
           text-align: center; 
           }
           .main1{
            background-image:url("https://thumbs.dreamstime.com/b/abstract-background-design-businessman-holding-smartphone-forgot-password-to-username-password-internet-browser-smartp-217804181.jpg") ; 
            height:100vh;
            display: flex;
             flex-direction: column;
             align-items: center; 
             justify-content: center;
            background-size: cover;
            padding: 20px; 
            text-align: center;
           }
           label{
            font-weight: bold;
           }
           img{
            
            width: 120px;
           }
        .activate{
              width:90px;
             background-color: rgb(0, 255, 110); 
               border:0px;
              height:30px; 
              color:rgb(255, 0, 38); 
              font-weight: bold;
              font-size:15px;
              border-radius:5px; 
              margin-left: 10px;
}
.back{
              width:60px;
             background-color: rgb(255, 0, 21); 
               border:0px;
              height:30px; 
              color:rgb(221, 255, 0); 
              font-weight: bold;
              font-size:15px;
              border-radius:5px;
}
p{
    color:red;
}
.button_div{
     display: flex; 
     justify-content: space-between;
}

</style>
 
    </head>
    <body>
        <?php
        $y = "";
           if($_SERVER["REQUEST_METHOD"]  == "POST"){  
              $name = $_POST["name1"];
              $password = $_POST["pass1"];
              $password1 = $_POST["pass2"];
             $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
              if(empty($name)){
                    $y = "ENTER YOUR NAME";
              }
              else if(empty($password)){
                $y = "ENTER YOUR PASSWORD";
              }
              else if(empty($password1)){
                $y = "ENTER YOUR RETYPE PASSWORD";
              }
              else if($password!= $password1){
                $y = "Password and retypepassword must be same";
              }
              else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
                 $y = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
              } 
              else{
                $conn = new mysqli("localhost","root","","db");
                $sql = "SELECT * FROM my_user WHERE Name='$name';";
                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
                if ($result->num_rows > 0) {
                     $sql1 = "UPDATE  my_user SET Password = '$password' WHERE Name = '$name';";
                     if ($conn->query($sql1) === TRUE) {
                        $y = "PASSWORD ACTIVATED SUCCESSFULLY";
                      }
                }  
                else{
                    $y = "User is not exit";
                }
              }
           }
        ?>

        <div class="main1">
            <h1> FORGOT PASSWORD </h1> 
            <div class="main">
                <img src="https://cdn-icons-png.flaticon.com/512/6195/6195696.png"><br>
                <form class="page" method="post"> 
                <label> USERNAME:</label>
                <input type="text" id="number" name="name1"> <br><br>
                <label> NEWPASSWORD:</label>
                <input type="password" id="password" name="pass1">
                <br><br>
                <label> RETYPEPASSWORD:</label>
                <input type="password" id="password1" name="pass2"><br><br>
                <input type="checkbox" onclick="myFunction()">Show Password
                <br><br>
               <p id="para"><?php echo $y;?> </p>
            
                 <input class="activate" id="activate" type="submit" value="ACTIVATE"><br>
           
            </form>
          <br>
            <div class="button_div"> 
                <a href="login.php">
                    <button class="back">
                        Back
                     </button>  </a>
           
            </div>
            
        </div>
        
<script>
  function myFunction() {
  var x = document.getElementById("password");
  var y = document.getElementById("password1");
  if (x.type === "password" && y.type === "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}
</script>
    </body>
   

</html>