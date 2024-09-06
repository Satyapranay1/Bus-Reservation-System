<!DOCTYPE html>
<html>
    <head>
        <style>
            .maincont{
                display: flex; 
                border-style: solid;
                border-color: aqua;
                padding: 10px;  
                flex-direction: column;
                justify-content: center;
                align-items: center; 
                background-color:pink;
            }
            .sit{
                width:60px;
                background-color: ;
                border-style: solid;
                color:blue;
                border-radius: 10px;
                border-color: rgb(0, 0, 0);
                margin-bottom: 60px;
                 margin: 10px;
                  cursor: pointer;
                text-align: center;
            }
            .slep{
                width:60px;
                height: 100px;
                background-color: ;
                border-style: solid;
                color:blue;
                border-radius: 10px;
                border-color: rgb(0, 0, 0); 
                margin-bottom:10px ;
                margin: 10px; 
                text-align: center;
                cursor: pointer;
            }
            .mini{
                display: flex;
                border-style: solid;
                border-color: red;
                width: 40%; 
                justify-content: space-around;
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
        <?php
        session_start();
        $id1 = $_SESSION["id1"];
        ?>
        <div class="maincont">
            <h1> BUSID : <?php echo $id1;?> </h1>
            <div class="mini">
                <div>
                    <div class="sit" id="one">
                        <p> 2000RS</p>
                    </div> 
                    <div class="sit" id="one1">
                     <p> 2000RS</p>
                     </div> 
                     <div class="sit" id="one2">
                         <p> 2000RS</p>
                     </div> 
                     <div class="sit" id="one3">
                         <p> 2000RS</p>
                     </div> 
                     <div class="sit" id="one4">
                         <p> 2000RS</p>
                     </div> 
                     <div class="sit" id="one5">
                         <p> 2000RS</p>
                     </div> 
                    
                 </div>
                 <div>
                     <div class="sit" id="one6">
                         <p> 2000RS</p>
                     </div> 
                     <div class="sit" id="one7">
                      <p> 2000RS</p>
                      </div> 
                      <div class="sit" id="one8">
                          <p> 2000RS</p>
                      </div> 
                      <div class="sit" id="one9">
                          <p> 2000RS</p>
                      </div> 
                      <div class="sit" id="one10">
                          <p> 2000RS</p>
                      </div> 
                      <div class="sit" id="one11">
                          <p> 2000RS</p>
                      </div> 
                     
                  </div>
                  <div>
                     <div class="slep" id="t1">
                         <p> 3000RS</p>
                     </div> 
                     <div class="slep" id="t2">
                      <p> 3000RS</p>
                      </div> 
                      <div class="slep"id="t3">
                          <p> 3000RS</p>
                      </div> 
                      <div class="slep" id="t4">
                          <p> 3000RS</p>
                      </div> 
                      <div class="slep" id="t5">
                          <p> 3000RS</p>
                      </div> 
                      <div class="slep" id="t6">
                          <p> 3000RS</p>
                      </div> 
                     
                  </div>
                  <div>
                     <div class="slep" id="t7">
                         <p> 3000RS</p>
                     </div> 
                     <div class="slep" id="t8">
                      <p> 3000RS</p>
                      </div> 
                      <div class="slep" id="t9">
                          <p> 3000RS</p>
                      </div> 
                      <div class="slep" id="t10">
                          <p> 3000RS</p>
                      </div> 
                      <div class="slep" id="t11">
                          <p> 3000RS</p>
                      </div> 
                      <div class="slep" id="t12">
                          <p> 3000RS</p>
                      </div> 
                     
                  </div>
            </div>
           <p id="para"> </p>
           <div>
           <button onclick="b()">
            BACK
           </button>
           <button onclick="f()">
            BOOK NOW
           </button>
           </div>
    
            
        </div>
<?php
 
?>
      <script>
         const para = document.getElementById("para"); 
        const x0 = document.getElementById("one");
         const x1 = document.getElementById("one1");
         const x2 = document.getElementById("one2");
         const x3 = document.getElementById("one3");
         const x4 = document.getElementById("one4");
         const x5 = document.getElementById("one5");
         const x6 = document.getElementById("one6");
         const x7 = document.getElementById("one7");
         const x8 = document.getElementById("one8");
         const x9 = document.getElementById("one9");
         const x10 = document.getElementById("one10"); 
         const x11 = document.getElementById("one11");  
         const t1 = document.getElementById("t1");
         const t2 = document.getElementById("t2"); 
         const t3 = document.getElementById("t3");
         const t4 = document.getElementById("t4"); 
         const t5 = document.getElementById("t5"); 
         const t6 = document.getElementById("t6"); 
        const t7 = document.getElementById("t7"); 
        const t8 = document.getElementById("t8");
        const t9 = document.getElementById("t9"); 
         const t10 = document.getElementById("t10"); 
        const t11 = document.getElementById("t11");  
        const t12 = document.getElementById("t12");
        let seat = 0;
        let slep = 0;
       t1.onclick = function(){
          if(t1.style.backgroundColor === "grey"){
            t1.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t1.style.backgroundColor = "grey"; 
            slep = slep + 1;
        }
    }
      
          t2.onclick = function(){
          if(t2.style.backgroundColor === "grey"){
            t2.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t2.style.backgroundColor = "grey"; 
            slep = slep + 1;
        }
    }  

          t3.onclick = function(){
          if(t3.style.backgroundColor === "grey"){
            t3.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t3.style.backgroundColor = "grey";
            slep = slep + 1;
        }
    }

         t4.onclick = function(){
          if(t4.style.backgroundColor === "grey"){
            t4.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t4.style.backgroundColor = "grey"; 
            slep = slep + 1;
        }
    }
      t5.onclick = function(){
          if(t5.style.backgroundColor === "grey"){
            t5.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t5.style.backgroundColor = "grey"; 
            slep = slep + 1;
        }
    }

           t6.onclick = function(){
          if(t6.style.backgroundColor === "grey"){
            t6.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t6.style.backgroundColor = "grey"; 
            slep = slep + 1;
        }
    }

          t7.onclick = function(){
          if(t7.style.backgroundColor === "grey"){
            t7.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t7.style.backgroundColor = "grey"; 
            slep = slep + 1;
        }
    }
 
         t8.onclick = function(){
          if(t8.style.backgroundColor === "grey"){
            t8.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t8.style.backgroundColor = "grey"; 
            slep = slep + 1;
        }
    }

           t9.onclick = function(){
          if(t9.style.backgroundColor === "grey"){
            t9.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t9.style.backgroundColor = "grey"; 
            slep = slep + 1;
        }
    }

           t10.onclick = function(){
          if(t10.style.backgroundColor === "grey"){
            t10.style.backgroundColor ="pink"; 
            slep = slep - 1;
        }
        else{
            t10.style.backgroundColor = "grey"; 
                 slep = slep + 1;
        }
    }

           t11.onclick = function(){
          if(t11.style.backgroundColor === "grey"){
            t11.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t11.style.backgroundColor = "grey"; 
            slep = slep + 1;
        }
    }

         t12.onclick = function(){
          if(t12.style.backgroundColor === "grey"){
            t12.style.backgroundColor ="pink";
            slep = slep - 1;
        }
        else{
            t12.style.backgroundColor = "grey"; 
               slep = slep + 1;
        }
    }
        x0.onclick = function(){
            if(x0.style.backgroundColor === "grey"){
            x0.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x0.style.backgroundColor = "grey"; 
            seat = seat + 1;
        }
    }
      x1.onclick = function(){
            if(x1.style.backgroundColor === "grey"){
            x1.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x1.style.backgroundColor = "grey"; 
            seat = seat + 1;
        }
    }
      x2.onclick = function(){
            if(x2.style.backgroundColor === "grey"){
            x2.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x2.style.backgroundColor = "grey";
            seat = seat + 1; 
        }

    }
      x3.onclick = function(){
            if(x3.style.backgroundColor === "grey"){
            x3.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x3.style.backgroundColor = "grey";  
            seat = seat + 1;
        }
    }
      x4.onclick = function(){
            if(x4.style.backgroundColor === "grey"){
            x4.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x4.style.backgroundColor = "grey"; 
            seat = seat + 1;
        }
    }
      x5.onclick = function(){
            if(x5.style.backgroundColor === "grey"){
            x5.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x5.style.backgroundColor = "grey";
            seat = seat + 1;
        }
    }
      x6.onclick = function(){
            if(x6.style.backgroundColor === "grey"){
            x6.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x6.style.backgroundColor = "grey"; 
            seat = seat + 1;
        }
    }
      x7.onclick = function(){
            if(x7.style.backgroundColor === "grey"){
            x7.style.backgroundColor ="pink"; 
            seat = seat - 1;
        }
        else{
            x7.style.backgroundColor = "grey"; 
            seat = seat + 1;
        }
    }
      x8.onclick = function(){
            if(x8.style.backgroundColor === "grey"){
            x8.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x8.style.backgroundColor = "grey"; 
            seat = seat + 1;
        }
    }
       x9.onclick = function(){
            if(x9.style.backgroundColor === "grey"){
            x9.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x9.style.backgroundColor = "grey"; 
            seat = seat + 1;
        }
    }
      x10.onclick = function(){
            if(x10.style.backgroundColor === "grey"){
            x10.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x10.style.backgroundColor = "grey"; 
            seat = seat + 1;
        }
    }

    x11.onclick = function(){
            if(x11.style.backgroundColor === "grey"){
            x11.style.backgroundColor ="pink";
            seat = seat - 1;
        }
        else{
            x11.style.backgroundColor = "grey"; 
             seat = seat + 1;
        }
    }
  function f(){
    if(seat === 0 && slep == 0){
       para.textContent = "ATLEAST BOOK ONE TICKET.."
    }
    else{
        window.location = "paytem.php?x="+slep+"&y="+seat;
    }
   
  }


function b(){
      window.location = "Bookticket.php";
}
    </script>
        
    </body>
   
</html>