<?php
session_start();

include_once('inc/conn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>package</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/booking_style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- header section start-->
  <header>
    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>B</span>ook<span>M</span>e</a>


    <div class="container">
      <form>

        <div class="wrapper">
          <div class="search-container">
            <input type="text" class="search" placeholder="Location">
            <input type="text" class="date-from" placeholder="Check In > Check Out">
            <input type="text" class="date-to" placeholder="Number of people">
            <button type="submit" class="button">Search</button>
          </div>
        </div>


      </form>
    </div>
    <div class="icons">
        <i class="fa-solid fa-magnifying-glass" id="search-btn" style="display:none;"></i>
            <?php if (isset($_SESSION['User_Fname'])) { ?>
                <!-- User is logged in -->
                <div class="dropdown">
                    <button class="dropbtn">U</button>
                     <div class="dropdown-content">
                        <a href="#">Profile</a>
                        <a href="./sign_out.php">Sign Out</a>
                    </div>
                    </div>

            <?php } else { ?>
                <!-- User is not logged in -->
                <i class="fa-solid fa-user" id="login-btn"></i>
            <?php } ?>



        </div>

    <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fa-solid fa-magnifying-glass"></label>

    </form>
  </header>
  <!--header section end-->

  <section class="hotels" id="hotels">
    <h1 class="heading">
      <span>p</span>
      <span>a</span>
      <span>c</span>
      <span>k</span>
      <span>a</span>
      <span>g</span>
      <span>e</span>
      <span>s</span>

    </h1>

    <div class="card-container">
      <?php
      $sql = "SELECT * FROM `hotel`";
      $result = $conn->query($sql);

      while ($row = $result->fetch_assoc()) {
        $profileImage = $row['profile_image'];
        $imagePath = "./upload_img/$profileImage";
        ?>

        <div class="container">
          <div class="box">
            <img src="<?php echo $imagePath; ?>" alt="">
            <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i>colombo</h3>
              <p>Marino Beach Colombo <br>Perfect for a 1-night stay! <br>
                Top location: Highly rated by recent guests (9.1) <br>
                Breakfast info <br>
                Continental, Vegetarian <br>
                Rooms with: <br>
                Pool with a view <br>
                Free parking available at the hotel
              </p>

              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <div class="price">$90.00 <span>$120.00 </span></div>
              <a href="#" class="btn">book now</a>
            </div>
          </div>
        </div>

        <?php
      }
      ?>
    </div>


  </section>

</body>

</html>