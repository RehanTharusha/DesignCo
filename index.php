<?php
     include_once 'header.php'
 ?>


<div class="video-container">

    <video src="Images/Banner_Video.mp4" autoplay loop muted></video>
    
    <div class="overlay-desc">

        <img src="Images/logo.png" alt="">


        <h2>Nature inspired organic clothing.</h2>

        <div class="videoButton">
            <a href="#buttonScroll">Shop Collection</a>
        </div>


  
     </div>
</div>

<div class="mainHeader" id="buttonScroll">
    <h1>Featured Products</h1>
</div>




<!-- This is the catalogue -->
<div class="catalogue"> 

    <div class="row">
        <!----------------------------------------------------------------------------->
            <div class="card">
                <a href="">
                    <img src="Images/Product Images/boots_image.png" alt="" style="width:100%">
                </a>

                <h1 class="captionHeading">Outdoor Boots</h1>
                
                <p class="caption">Designed for every day adventures in the wild and the city.</p>

                <div class="banner_button">
                    <a href="https://prime-designs-shop.000webhostapp.com/">Shop Now</a>
                </div>
            </div>
        <!----------------------------------------------------------------------------->
            <div class="card">
                <a href="">
                    <img src="Images/Product Images/tshirt_image.png" alt="" style="width:100%">
                </a>

                <h1 class="captionHeading">Graphic T-Shirts</h1>
                
                <p class="caption">We use creative techniques to make our original adventure-inspired graphics for our organic tees.</p>
                
                <div class="banner_button">
                    <a href="https://prime-designs-shop.000webhostapp.com/">Shop Now</a>
                </div>
            </div>
        <!----------------------------------------------------------------------------->
            <div class="card">
                <a href="">
                    <img src="Images/Product Images/head-for-the-hills-organic-cotton-sweater-navy-The-Level-Collective_590x.jpg" alt="" style="width:100%">
                </a>

                <h1 class="captionHeading">Sweaters</h1>
                
                <p class="caption">Our sweaters are all hand screen printed using water based inks onto ethically made organic unisex fit sweaters.</p>
                
                <div class="banner_button">
                    <a href="https://prime-designs-shop.000webhostapp.com/">Shop Now</a>
                </div>
            </div>
    </div>

    <div class="row">
        <!----------------------------------------------------------------------------->
            <div class="card">
                <a href="">
                    <img src="Images/Product Images/Trail-merino-wool-socks-forest-flat-lay-The-Level-Collective_1_590x.jpg" alt="" style="width:100%">
                </a>

                <h1 class="captionHeading">Cotton Socks</h1>
                
                <p class="caption">Wool socks perfect for everyday trails in the wild and city – lightweight, organic, breathable and durable.</p>
                
                <div class="banner_button">
                    <a href="https://prime-designs-shop.000webhostapp.com/">Shop Now</a>
                </div>
            </div>
        <!----------------------------------------------------------------------------->
            <div class="card">
                <a href="">
                    <img src="Images/Product Images/backpack_image_Edit.png" alt="" style="width:100%">
                </a>

                <h1 class="captionHeading">Backpacks</h1>
                
                <p class="caption">We’ve combined form and function to create an everyday backpack for the commute and wildness pursuit.</p>
                
                <div class="banner_button">
                    <a href="https://prime-designs-shop.000webhostapp.com/">Shop Now</a>
                </div>
            </div>
        <!----------------------------------------------------------------------------->
            <div class="card">
                <a href="">
                    <img src="Images/Product Images/Palm-navy-organic-t-shirt-rust-and-water-folded_1000x_089b46c3-80a6-42f6-be61-8ef60a594dc5_590x.jpg" alt="" style="width:100%">
                </a>

                <h1 class="captionHeading">T-Shirts</h1>
                
                <p class="caption">We collaborate with artists to create our adventure inspired unisex sustainable T-shirts.</p>
                
                <div class="banner_button">
                    <a href="https://prime-designs-shop.000webhostapp.com/">Shop Now</a>
                </div>
            </div>
        <!----------------------------------------------------------------------------->
</div>

        
    <div class="textBanner1">
        <a href="https://prime-designs-shop.000webhostapp.com/">Explore our catalogue.</a>
    </div>

</div>



<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}



/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Images/Product Images/The-Scout-Mustard-The-Level-Collective_1000X1000.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="Images/Product Images/The-Scout-Mustard-The-Level-Collective_1000X1000.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="Images/Product Images/The-Scout-Mustard-The-Level-Collective_1000X1000.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>























<div class="container">

    <div class="section1">
    <h2>We are <br> <span style="color: #84A975">Sustainable.</span></h2>

    <p>Our products are made from certified organic cotton that doesn’t harm our environment. <br> 
        We use eco-friendly packaging – reducing the single-use plastic that has such an impact on our planet.
    </p>

    <div class="aboutButton">
        <a href="about.php">Learn more</a>
    </div>

    </div>

    <div class="section2">
        <img src="Images/mike-kotsch-iMk4eZog4FQ-unsplash.jpg" alt="preview_image ">
    </div>

</div>

<div class="textBanner2">
    <h1>YOU PLANT A TREE WITH EVERY ITEM PURCHASED.</h1>

    <video src="Images/leaf_gif.mp4"  muted loop autoplay></video>

    <div class="bannerButton">
        <a href="https://prime-designs-shop.000webhostapp.com/">Shop Now</a>
    </div>
</div>




<!-- this is the testimonials section -->
<div class="testimonials">
    
    <h1>Client Testimonials</h1>

    <div class="flexContainer">

      <div class="comment">
      
        <img src="Images/image-emily.jpg" alt="">
      
        <p>
            "Thank you for the good sales support and being part of the effort to make the world more humane & sustainable"
        </p>
      
        <h1>Emily R.</h1>

        <h3>Marketing Director</h3>
      </div>


      <div class="comment">
      
        <img src="Images/image-thomas.jpg" alt="">
      
        <p>
         "DesignCo.’s enthusiasm coupled with their keen interest in their brand has made it a successful, satisfying and enjoyable experience."
        </p>
      
        <h1>Thomas S.</h1>

        <h3>Chief Operating Officer</h3>
      </div>


      <div class="comment">
      
        <img src="Images/image-jennie.jpg" alt="">
      
        <p>
            "I was recently at your store, what a delight to find you!"
        </p>
      
        <h1>Jennie F.</h1>

        <h3>Business Owner</h3>
      </div>

    </div>

</div>


<div class="newsletter">
    <div class="box">
        <h2>Subscribe to our Newsletter</h2>
        <p>Join our newsletter to stay in the loop with all the latest happenings and special offers.</p>
        <div class="form-control">
            <input type="text" class="email-input" placeholder="Enter e-mail address" />
            <button class="btn">Subscribe</button>
        </div>
        <p class="thing">We’ll never share your data ‘cos that’s bad.</p>
    </div>
</div>





<script>
        
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });

    document.onscroll = function() {
        if (window.innerHeight + window.scrollY > document.body.clientHeight) {
            document.getElementById('header-vanish').style.display='none';
        }
    }

</script>




<?php
    include_once 'footer.php'
?>