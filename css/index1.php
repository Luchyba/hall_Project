<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/style.css" rel="stylesheet" />
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
    <script
      src="https://kit.fontawesome.com/90489c8f29.js"
      crossorigin="anonymous"
    ></script>


    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/90489c8f29.css" crossorigin="anonymous"> -->
    <title>Hostel Web</title>
  </head>
  <body>
    <!-- Head section -->
    <header>
      <i class="fa-solid fa-bars" id="menu-bar"></i>
      <a href="#" class="logo"><span>H</span>ostel</a>
      <nav class="navbar">
        <a href="#Home">Home</a>
        <a href="#Hall">Hostels</a>
        <a href="#service">Service</a>
        <a href="#book">Booking</a>
        <a href="#Booking">Sign up</a>
        <a href="#Booking">contact</a>
      </nav>
      <div class="icon">
        <!-- <i class="fa-thin fa-square-xmark"></i> -->
        <!-- <i class="fa-fa-search" id="search-btn"></i> -->
        <i class="fa-solid fa-magnifying-glass" id="search-btn"></i>
        <i class="fa-solid fa-user" id="login-btn"></i>
        <!-- <i class="fa-fa-user" id="user-btn"></i> -->
      </div>
      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...." />
        <label for="search-bar" class="fa-solid fa-magnifying-glass"></label>
      </form>
    </header>
    <!-- header ends -->
    <!-- login form container Start here-->
    <div class="login-form-container">
      <i class="fa-regular fa-circle-xmark" id="form-close"></i>
      <form action="">
        <h3>Login</h3>
        <input type="text" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" name="" value="login now" class="btn">
        <input type="checkbox" name="" id="remember">
        <label for="remember">Remember me</label>
        <p>forget password? <a href="#">Click here</a></p>
        <p>Don't have an account? <a href="#">Register now</a></p>
        
        
      </form>
    </div>

    <!-- home section start here -->

    <section class="home" id="home">
      <div class="content">
        <h3>Welcome to DOTGET hostels</h3>
        <p>Discove the new way of looking for a Hostel</p>
        <a href="#" class="btn">Discover more</a>
      </div>
      <div class="controls">
        <span class="vid-btn active" data-src="assets/vid/vid1.mp4"></span>
        <span class="vid-btn" data-src="assets/vid/vid2.mp4"></span>
        <span class="vid-btn" data-src="assets/vid/vid3.mp4"></span>
        <span class="vid-btn" data-src="assets/vid/vid4.mp4"></span>
        <span class="vid-btn" data-src="assets/vid/vid5.mp4"></span>
      </div>
      <div class="video-container">
        <video src="assets/vid/vid1.mp4" id="video-slider" loop autoplay muted></video>
      </div>

    </section>
    <!-- home section ends here -->

    <!-- book section start here -->
    <section class="book" id="book">
      <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>
      <div class="row">
        <div class="img">
          <img src="assets/img/img1.svg" alt="" srcset="">
        </div>
        <form action="">
          <div class="inputBox">
            <h3>Where to</h3>
            <input type="text" placeholder="place name" >
          </div>
          <div class="inputBox">
            <h3>how many</h3>
            <input type="number" placeholder="number of guest">
          </div>
          <div class="inputBox">
            <h3>Arrival</h3>
            <input type="date">
          </div>
          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" >
          </div>
          <input type="submit" class="btn" value="Book Now">
          
        </form>
      </div>
    </section>
    <!-- book section end here -->

    <!-- Packeages section start here -->
    <section class="packages">
      <h1 class="heading">
        <span>P</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
        <!-- <span class="space"></span> -->
      </h1>
      <div class="box-container">
        <div class="box">
          <img src="assets/img/img2.jpg" alt="" srcset="">
          <div class="content">
            <h3><i class="fa-solid fa-location-dot">Tanoso</i></h3>
            <p>An altramorden Hostel facility in Tanoso</p>
            <div class="stars">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <div class="price">GH₵90.00 <span>GH₵1500</span></div>
            <a href="#" class="btn">Book Now</a>
          </div>
        </div>
        <div class="box">
          <img src="assets/img/img3.jpg" alt="" srcset="">
          <div class="content">
            <h3><i class="fa-solid fa-location-dot">Tanoso</i></h3>
            <p>An altramorden Hostel facility in Tanoso</p>
            <div class="stars">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <div class="price">GH₵90.00 <span>GH₵1500</span></div>
            <a href="#" class="btn">Book Now</a>
          </div>
        </div>
        <div class="box">
          <img src="assets/img/img4.jpg" alt="" srcset="">
          <div class="content">
            <h3><i class="fa-solid fa-location-dot">Tanoso</i></h3>
            <p>An altramorden Hostel facility in Tanoso</p>
            <div class="stars">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <div class="price">GH₵90.00 <span>GH₵1500</span></div>
            <a href="#" class="btn">Book Now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Packeages section ends here -->
<!-- Service section start here -->
<section class="services" id="services"  >
  <h1 class="heading">
    <span>S</span>
    <span>e</span>
    <span>r</span>
    <span>v</span>
    <span>i</span>
    <span>c</span>
    <span>e</span>
    <span>s</span>
    <!-- <span class="space"></span> -->
  </h1>

  <div class="box-container">
    <div class="box">
      <i class="fa-solid fa-hotel"></i>
      <h3>Affordable Accomodation</h3>
      <p>Welcome to AAMUSTED hall where affordable accomodation is ashured</p>
    </div>

    <div class="box">
      <i class="fa-solid fa-hotel"></i>
      <h3>Affordable Accomodation</h3>
      <p>Welcome to AAMUSTED hall where affordable accomodation is ashured</p>
    </div>
    <div class="box">
      <i class="fa-light fa-plane"></i>
      <h3>Affordable Accomodation</h3>
      <p>Welcome to AAMUSTED hall where affordable accomodation is ashured</p>
    </div>
    <div class="box">
      <i class="fa-regular fa-person-biking-mountain"></i>
      <h3>Affordable Accomodation</h3>
      <p>Welcome to AAMUSTED hall where affordable accomodation is ashured</p>
    </div>
    
  </div>

</section>

<!-- Service section ends here -->

<!-- gallary section starts here -->
<section class="gallary" id="gallary">
  <h1 class="heading">
    <span>G</span>
    <span>a</span>
    <span>l</span>
    <span>l</span>
    <span>e</span>
    <span>r</span>
    <span>y</span>
  </h1>
  <div class="box-container">
    <div class="box">
      <img src="assets/img/ammusted.jpeg" alt="" srcset="">
      <div class="content">
        <h3>Autonomy hall</h3>
        <p>The premiar hall in AAMUSTED</p>
        <a href="#" class="btn" >See more</a>
      </div>
    </div>
    <div class="box">
      <img src="assets/img/ammusted.jpeg" alt="" srcset="">
      <div class="content">
        <h3>Autonomy hall</h3>
        <p>The premiar hall in AAMUSTED</p>
        <a href="#" class="btn" >See more</a>
      </div>
    </div>
    <div class="box">
      <img src="assets/img/ammusted.jpeg" alt="" srcset="">
      <div class="content">
        <h3>Autonomy hall</h3>
        <p>The premiar hall in AAMUSTED</p>
        <a href="#" class="btn" >See more</a>
      </div>
    </div>
    <div class="box">
      <img src="assets/img/ammusted.jpeg" alt="" srcset="">
      <div class="content">
        <h3>Autonomy hall</h3>
        <p>The premiar hall in AAMUSTED</p>
        <a href="#" class="btn" >See more</a>
      </div>
    </div>
    <div class="box">
      <img src="assets/img/ammusted.jpeg" alt="" srcset="">
      <div class="content">
        <h3>Autonomy hall</h3>
        <p>The premiar hall in AAMUSTED</p>
        <a href="#" class="btn" >See more</a>
      </div>
    </div>
    <div class="box">
      <img src="assets/img/ammusted.jpeg" alt="" srcset="">
      <div class="content">
        <h3>Autonomy hall</h3>
        <p>The premiar hall in AAMUSTED</p>
        <a href="#" class="btn" >See more</a>
      </div>
    </div>
  </div>
</section>

<!-- gallary section ends here -->

<!-- review start here -->
<div class="review" id="review">
  <h1 class="heading">
    <span>R</span>
    <span>e</span>
    <span>v</span>
    <span>i</span>
    <span>e</span>
    <span>w</span>
  </h1>
  <div class="swiper mySwiper review-slider">
    <div class="swiper-wrapper wrapper">
      <div class="swiper-slide">
        <div class="box">
          <img src="assets/img/vic.jpg" alt="" srcset="">
          <h3>Victoria</h3>
          <p>Sereen accomodation and secicurity for you study purposes</p>
          <div class="stars">
            <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="assets/img/brg.jpg" alt="" srcset="">
          <h3>Bridget</h3>
          <p>Sereen accomodation and secicurity for you study purposes</p>
          <div class="stars">
            <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="assets/img/docas.jpg" alt="" srcset="">
          <h3>Docas</h3>
          <p>Sereen accomodation and secicurity for you study purposes</p>
          <div class="stars">
            <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="assets/img/sam.jpg" alt="" srcset="">
          <h3>Docas</h3>
          <p>Sereen accomodation and secicurity for you study purposes</p>
          <div class="stars">
            <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

<!-- review ends here -->
<!-- ----------------------contact---------------- -->
    <section class="contact" id="contact">
      <h1 class="heading">
        <span>C</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span class="space"></span>
        <span>m</span>
        <span>e</span>
      </h1>
      <div id="contact2">
        <div class="container">
            <div class="row">
                <div class="left-contact">
                    <p><i class="fa-solid fa-paper-plane"></i> sixtus99@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i> +233246460176</p>
                    <div class="socialicons">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></i></a>
                    </div>
                    <a href="images/logo.JPG" download class="btn btn2">Download CV</a>
      
                </div>
                <div class="right-contact">
                    <form name="submit-to-google-sheet">
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
      
        </div>
        <div class="copyright">
            <p>copyright © Samuel <i class="fa-solid fa-heart"></i></p>
        </div>
      </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
