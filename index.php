<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!--header section starts-->
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>B</span>ook<span>M</span>e</a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <?php if (isset($_SESSION['User_Fname'])) { ?>
                <!-- User is logged in -->

            <?php } else { ?>
                <!-- User is not logged in -->
                <a href="#book">Book</a>
            <?php } ?>
            <a href="#packages">Packages </a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
        </nav>
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

    <!--login form container-->
    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>
        <form action="./sign_in.php" method="post">
            <h3>login</h3>
            <input type="email" name="email" id="email" class="box" placeholder="enter your email">
            <input type="password" name="password" id="password" class="box" placeholder="password">
            <input type="submit" name="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <p>forget password <a href="#">click here</a> </p>
            <p>Don't have an account?<a href="#" id="register-btn">Register now</a> </p>

        </form>
    </div>

    <!-- Register form container -->
    <div class="register-form-container">
        <i class="fas fa-times" id="form-closere"></i>
        <form action="" method="post">
            <h3>Registration</h3>
            <input type="text" name="fullname" id="fullname" class="box" placeholder="Full name">
            <input type="email" name="email" id="regemail" class="box" placeholder="Email">
            <input type="number" name="phone" id="phone" class="box" placeholder="Phone Number">
            <input type="Password" name="password" id="regpassword" class="box" placeholder="password">
            <input type="Password" name="repassword" id="confrepassword" class="box" placeholder="Confirm password">
            <input type="button" name="button" value="Register Now" class="btn" id="register-btn" onclick="passvalue()">
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <p>Already have an account?<a href="#" id="login2-btn">Login now</a> </p>

        </form>
    </div>

    <!--home section start-->
    <section class="home" id="home">
        <div class="content">
            <h3>Welcome to a Global Icon of Luxury</h3>
            <p>Discover New Place with Us</p>
            <a href="#" class="btn">discover more</a>
        </div>
        <div class="controls">
            <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!--home section end-->

    <?php if (isset($_SESSION['User_Fname'])) { ?>


    <?php } else { ?>
        <!--book section start-->
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
                    <img src="images/book.svg" alt="">
                </div>


                <form action="">
                    <div class="inputBox">
                        <h3>Where to</h3>
                        <input type="text" placeholder="Place Name">
                    </div>
                    <div class="inputBox">
                        <h3>How many</h3>
                        <input type="number" placeholder="Number of Guests">
                    </div>
                    <div class="inputBox">
                        <h3>Arrivals</h3>
                        <input type="date">
                    </div>
                    <div class="inputBox">
                        <h3>Leaving</h3>
                        <input type="date">
                    </div>

                    <input type="submit" class="btn" value="book now">


                </form>

            </div>
        </section>
        <!--book section end-->

    <?php } ?>

    <!--packages section start-->

    <section class="packages" id="packages">
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

        <div class="box-container">
            <div class="box">
                <img src="images/colombo.jpg" alt="">
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
    </section>

    <?php if (isset($_SESSION['User_Fname'])) { ?>
        <a href="./booking.php" class="btn">See more..</a>

    <?php } else { ?>
        <!-- User is not logged in -->
        <a href="#book">Book</a>
    <?php } ?>

    <!--packages section end-->

    <!--service section start-->

    <section class="services" id="services">
        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"> </i>
                <h3>affordable hotels</h3>
                <p>Affordable hotels offer clean, comfortable rooms with complimentary Wi-Fi. Basic toiletries, daily
                    housekeeping, and a 24/7 reception enhance convenience. Some provide continental breakfasts,
                    parking, and local area information. Luggage storage, friendly staff, and security measures ensure a
                    pleasant stay, focusing on affordability and guest satisfaction.
                </p>

            </div>

            <div class="box">
                <i class="fas fa-utensils"> </i>
                <h3>Food and Drinks</h3>
                <p>Affordable hotels offer a selection of budget-friendly dining options, including continental
                    breakfasts and snack choices. Additionally, they may provide vending machines or a basic bar setup
                    for convenient refreshments. These services ensure guests have access to sustenance without
                    compromising affordability and comfort.
                </p>

            </div>

            <div class="box">
                <i class="fas fa-bullhorn"> </i>
                <h3>safty guide</h3>
                <p> Hotels prioritize guest safety with services like secure room access, well-lit common areas, and
                    emergency exits. They provide fire extinguishers, smoke detectors, and safety instructions in rooms.
                    Trained staff, CCTV surveillance, and easy-to-follow evacuation plans contribute to a secure and
                    worry-free stay for all guests.
                </p>

            </div>

            <div class="box">
                <i class="fas fa-globe-asia"> </i>
                <h3>around the world</h3>
                <p> Hotels offer international guests a range of services for a comfortable stay. Multilingual staff aid
                    communication, while currency exchange and local area information assist in exploring. Adaptable
                    power outlets, diverse cuisine options, and culturally sensitive amenities cater to various needs,
                    ensuring a global and inclusive experience.
                </p>

            </div>

            <div class="box">
                <i class="fas fa-plane"> </i>
                <h3>fastest travle</h3>
                <p> Speed-focused travel services prioritize efficiency and rapid transit. These include expedited
                    check-in and security processes, direct transportation options, and real-time flight/train updates.
                    On-the-go Wi-Fi, streamlined baggage handling, and proximity to transportation hubs facilitate
                    seamless journeys, catering to time-conscious travelers.
                </p>

            </div>

            <div class="box">
                <i class="fas fa-hiking"> </i>
                <h3>adventures</h3>
                <p> Adventure-focused services in hotels offer equipment rental, guided tours, and outdoor activity
                    arrangements such as hiking, biking, and water sports. They provide maps, local guides, and safety
                    instructions, ensuring guests have thrilling experiences while prioritizing their safety and comfort
                    during adventurous endeavors.

                </p>

            </div>


        </div>
    </section>
    <!--service section end-->

    <!--gallery section start-->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/jap.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Japanese nature is a symphony of ethereal cherry blossoms, Zen gardens, misty mountains, and
                        calming onsen, offering a blend of serenity and awe-inspiring beauty.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/haw.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Hawaii's beach paradise boasts turquoise waters, golden sands, lush palm trees, and vibrant
                        marine life, creating an enchanting haven of natural beauty and relaxation.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/sl.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Sri Lanka, showcases stunning beachfronts with golden sands, azure waters, and palm-fringed
                        shores</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Its intricate iron design, illuminated against the night sky, enhances the city's enchanting
                        beauty for couples.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>The city's vibrant energy harmonizes with its breathtaking waterfront and architectural marvels.
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>


            <div class="box">
                <img src="images/img6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Australian beaches boast pristine shores, crystal-clear waters, and vibrant marine life. From the
                        Great Barrier Reef to Bondi Beach.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>The city's dynamic energy intertwines with its iconic landmarks, creating an urban masterpiece.
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Egypt's pyramids exude ancient grandeur with their colossal limestone structures and intricate
                        history. </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

        </div>
    </section>

    <!--gallery section end-->

    <!--review section start-->

    <section class="review" id="review">


        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>
        <div class="swiper mySwiper review-slider ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/Joanne.jpg" alt="">
                        <h3>Joanne</h3>
                        <p>great for a short stay,<br> if staying longer it is worth upgrading to a room with a view so
                            that you are not looking directly.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/Mata.jpg" alt="">
                        <h3>Mata</h3>
                        <p>We felt welcomed by every staff member that greeted and helped us. The reception staff were
                            great in ensuring our room and the kids' room were on the same high-level floor. The rooms
                            were comfortable and immaculate. The buffet breakfast was so good, spoilt for choice. We'll
                            be back.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/Navamathan.jpg" alt="">
                        <h3>Navamathan</h3>
                        <p>great helpful staff. Especially the room boys. They work really hard and deliver a great job.
                            super facilities and a great rooftop pool.
                            This was our second stay and we will come again. I recommend everyone to stay at Marino
                            Beach Colombo.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/Carolyn.jpg" alt="">
                        <h3>Carolyn </h3>
                        <p>I was aware that the hotel was undergoing a major refurbishment so some of the facilities
                            were not available but I was not inconvenienced in any way and the free upgrade was well
                            worth it. Just a little disappointed not to be able to see the beautiful atrium lobby, but
                            looking forward to staying there again when it's all complete.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </section>

    <!--review section end-->

    <!--contact section start-->
    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>
        <div class="row">
            <div class="img">
                <img src="images/contact.svg" alt="">
            </div>
            <form action="">
                <div class="inputbox">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="E-mail">
                </div>

                <div class="inputbox">
                    <input type="number" placeholder="Phone Number">
                    <input type="text" placeholder="Subject">
                </div>
                <textarea placeholder="Message" name=" column=" 30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">

            </form>

        </div>
    </section>


    <!--contact section end-->

    <!--brand section start-->

    <section class="brand-container">
        <div class="swiper myswiper brand-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide"><img src="images/ho1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/log1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/log2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/log3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/log4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/log5.jpg" alt=""></div>

            </div>
        </div>
    </section>

    <!--brand section end-->

    <!--footer section start-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>Discover your ideal stay with ease. Our hotel booking website offers seamless navigation, secure
                    reservations, and unbeatable deals for unforgettable experiences.</p>
            </div>

            <div class="box">
                <h3>Branch Location </h3>
                <a href="#">Sri lanka</a>
                <a href="#">Australia</a>
                <a href="#">USA</a>
                <a href="#">Japan</a>
                <a href="#">Egypt</a>
                <a href="#">French</a>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#">home</a>
                <a href="#">book</a>
                <a href="#">Services</a>
                <a href="#">Gallery</a>
                <a href="#">Review</a>
                <a href="#">contact</a>
                <a href="#">packages</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">twitter</a>
                <a href="#">LinkedIn</a>


            </div>

        </div>
        <h1 class="credit">created by <span>Sabara SE Students</span> all rights reserved!!</h1>
    </section>




    <!--footer section start-->











    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!--custome js file link-->
    <script src="main.js"></script>
    <script>
        function passvalue() {
            var formData = new FormData();
            const fullname = document.getElementById('fullname').value;
            const email = document.getElementById('regemail').value;
            const phone = document.getElementById('phone').value;
            const regpassword = document.getElementById('regpassword').value;
            const confrepassword = document.getElementById('confrepassword').value;


            // Append form data to the FormData object
            formData.append('fullname', fullname);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('regpassword', regpassword);
            formData.append('confrepassword', confrepassword);

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var response = this.responseText;
                    console.log(response);
                    let registerForm = document.querySelector('.register-form-container');
                    registerForm.classList.remove('active');
                    if (response === 'Success') {
                        Swal.fire({
                            title: 'Success',
                            text: "New record created successfully",
                            icon: 'success',
                            cancelButtonColor: 'rgba(0, 120, 177, 0.8)',
                            confirmButtonText: 'Okay'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = 'index.php';
                            } else {
                                window.location = 'index.php';
                            }
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        });
                    }

                }
            };

            // Use POST method and send FormData
            xhttp.open("POST", "sign_up.php", true);
            xhttp.send(formData);
        }

    </script>
</body>

</html>