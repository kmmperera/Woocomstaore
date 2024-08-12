

<!DOCTYPE html>
<html  <?php language_attributes(); ?> >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <?php wp_head(); ?>
</head>

<body>
<?php 

function bms_get_home_url_link(){

    if(is_home() || is_front_page()){
        echo '';
    }
    else{
       
        echo home_url();
    }
}
?>
    <div id="main-container">
        
           
            <div id="main-navigation" class="h-padding navigation-wrapper">
                <div class="logo-area">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri().'/images/logo2.png'?>" alt="">
                    </div>
                    <div class="logo-description">
                        Cleaning service
                    </div>
                <a href="<?php bms_get_home_url_link();?>#main-container" class="home-link"></a>
                    
                </div>
                <div class="menu-area">
                    <ul class="menu-ul">
                        <li class="menu-li">
                            <a href="<?php bms_get_home_url_link();?>#impressa-reviews-area">About us</a>
                        </li>
                        <li class="menu-li">
                            <a href="<?php bms_get_home_url_link();?>#impressa-contact-top">Contact</a>
                        </li>
                        <li class="menu-li">
                            <a href="<?php bms_get_home_url_link();?>#post-swiper-wrapper">Services</a>
                        </li>
                        <li class="menu-li">
                            <a href="<?php bms_get_home_url_link();?>#products-area">Products</a>
                        </li>
                        <li class="menu-li">
                            <a href="<?php bms_get_home_url_link();?>#contact-form-elements-wrapper">Pricing</a>
                        </li>
                        <i class="bi bi-x-square"></i>
                    </ul>
                </div>
                <div class="icons-area">

                    <i class="bi bi-list active"></i>
                
                </div>
            
            </div>
            <div class="woocommerce-icons">
                <a href="<?php echo  wc_get_cart_url(); ?>">

                      <i class="bi bi-cart-dash"></i>
                  <span class="cart-number"> <?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </a>
                

            </div>
            <div class="overlay-div"></div>
