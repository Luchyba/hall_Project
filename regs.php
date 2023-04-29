<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/90489c8f29.js" crossorigin="anonymous"></script>
  <title>Register</title>
</head>
  <body><header>
    <i class="fa-solid fa-bars" id="menu-bar"></i>
    <a href="#" class="logo"><span>H</span>ostel</a>
    <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="hall.html">Halls</a>
      <a href="gallary.html">Gallary</a>
      <a href="regs.php">Signup to Book</a>
      <a href="contact.html">contact</a>
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
  <div class="logsin-form-container">
  <h1>Signup</h1>
    <form action="register.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" name="password" required>
      <br>
      <input type="submit" value="Signup">
    </form>
  </div>
    
  </body>
</html>
