<?php
if (isset($_POST['submit'])) {
  $hall_name = $_POST['hall_name'];
  $date = $_POST['date'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $comments = $_POST['comments'];

  // Validation
  if (empty($hall_name) || empty($date) || empty($start_time) || empty($end_time) || empty($name) || empty($email) || empty($phone)) {
    echo "<p>Please fill in all the required fields.</p>";
  } else {
    // Connect to database and insert data
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = 'hosteldb';
    // $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO hall_bookings (hall_name, date, start_time, end_time, name, email, phone, comments)
		VALUES ('$hall_name', '$date', '$name', '$email', '$phone', '$comments')";

    if ($conn->query($sql) === TRUE) {
      echo "<p>Thank you for booking the hall.</p>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
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
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" id="hall_name" name="hall_name" placeholder="Hall of Affiliation"><br><br>

        <input type="date" id="date" name="date" placeholder="Date of Registration"><br><br>

        <!-- <input type="text" id="name" name="name" placeholder="Name" ><br><br> -->

        <input type="email" id="email" name="email" placeholder="Email" ><br><br>

        <input type="tel" id="phone" name="phone" placeholder="phone" ><br><br>

        <!-- <textarea id="comments" name="comments"></textarea><br><br> -->

        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
  </section>
  <!-- book section end here -->
</body>

</html>