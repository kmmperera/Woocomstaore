document.addEventListener('DOMContentLoaded', function () {

    //swiper slider 1

    const swiperPosts = new Swiper(".post-swiper", {
        grabCursor: true,
        slidesPerView: "auto",
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        autoplay: {
            delay: 7500,
            disableOnInteraction: true,
            reverseDirection:true,
          },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            375: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
           1400: {
                slidesPerView: 4,
            },
        },
    });
    
   
 });







// form submition member page 

jQuery(document).ready(function($){
    console.log("jq works");
    $('#memeber-page-service-submit-btn').click(function(e){
            e.preventDefault();
            // let isValid=true;
        
            // $('#mmember-page-service-input-formn input').each(function(){
            //     console.log("happening");
            //     if($(this).val().trim()===''){
            //         isValid=false;
            //     }
            //     if(!isValid){
            //         document.getElementById("member-modal").innerHTML = 'Fill all the fields';
            //         return false;

            //     }
            // });

      
       

       
        console.log('Form Submitted');
  
      //  let formSelected = e.currentTarget.parentElement;
        let formSelected = $('#member-page-service-input-form');

  
         let name   = document.getElementById('name-text').value;
         let email   = document.getElementById('email-text').value;
         let message   = document.getElementById('message-text').value;
         let telnum   = document.getElementById('telnum-text').value;

        if(name == "" || email == ""||  message == "" || telnum == ""){
            document.getElementById("member-modal").innerHTML = 'Compilare il modulo ';

            return false;
        }
        
            $.ajax({
                // Pass the admin-ajax.php into url.
                url: ajax_object.ajax_url,
                data: {
                    'action': 'bms_quations_add',
                    'name': name,
                    'email': email,
                    'message': message, 
                    'telnum': telnum
                },
                type: 'post',
                success: function(res){
                    document.getElementById("member-modal").innerHTML = res;

                    formSelected[0].reset();
                },
                error: function(err){
                    document.getElementById("member-modal").innerHTML = err;

                    formSelected[0].reset();
                },
            });
        
      
        
    });


   

  });


  /**
 * header sticky functionality
 */

const header = document.getElementById("main-navigation");

window.addEventListener("scroll", function () {
    

  window.scrollY >= 20 ? header.classList.add("scrolling") : header.classList.remove("scrolling");

});