const name =  document.getElementById("name");
const password = document.getElementById("pass");
const para = document.getElementById("para"); 
para.style.color = "red";   
const anc = document.getElementById("anc");
const details = {
 user:"narayana",
 pas:123
}
function sub(){ 
   const x = parseInt(password.value);
  
   if(name.value === "" || password.value === ""){
        
         para.textContent="Please Enter Your Credentails Fully!!";
   } 
   else if(name.value == "narayana" && x == 123){
     anc.href = "LANDPAGE.html";
   } 
   else{
     para.textContent = "Invalid Credentails!!";
   }
}
