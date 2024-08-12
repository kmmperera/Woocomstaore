// menu toggle
document.addEventListener("DOMContentLoaded", function(event) { 


    let hamburgericon= document.querySelector(".bi-list");
    let closebtn= document.querySelector(".bi-x-square");
    let overlay= document.querySelector(".overlay-div");
    let navlinks= document.querySelectorAll(".menu-li");
    let hamburgerclose= document.querySelector(".bi-x-square");
    let navdiv= document.querySelector(".navigation-wrapper");

    
     function Funcremovemobilenav(){
    
       closebtn.classList.remove("active");
       overlay.classList.remove("active");
     
       navdiv.classList.remove("active");
    }
    if(hamburgericon){
        hamburgericon.addEventListener("click",()=>{
           
            hamburgerclose.classList.remove("active");
            closebtn.classList.add("active");
            overlay.classList.add("active");
            navdiv.classList.add("active");
         
         });
    }
    
    navlinks.forEach((nlink)=>{
        nlink.addEventListener("click",()=>{
           Funcremovemobilenav();
        });
    });
    if(hamburgerclose){
    
        hamburgerclose.addEventListener("click",()=>{
            Funcremovemobilenav();
         
         });
    }
    
    overlay.addEventListener("click",()=>{
       Funcremovemobilenav();
    
    });
    
    



});

  

