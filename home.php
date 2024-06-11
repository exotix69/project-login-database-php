<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>BookingSpace</title>
    <link rel="icon" type="image/x-icon" href="img2/fav.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="styles1.css">

</head>

<body>

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Sidebar -->
        <nav class="sidebar">

            <nav class="sidenavbar">
                <h1>Hey!</h1>
            </nav>

            <nav class="sidesubnavbar">
                <img src="img/rewards.webp">
                <p>Unlock special offers & great benifits</p>
                <button class="login" onclick="document.getElementById('id01').style.display='block'">Login / Register</button>
                
            </nav>

            <a href="#">
                <div class="lefticon">
                    <ion-icon name="notifications-outline"></ion-icon>
                </div>
                <div class="text">Notifications</div>
                <div class="righticon">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </a>
            <a class="btn-disabled" href="#">
                <div class="lefticon">
                    <ion-icon name="ticket-outline"></ion-icon>
                </div>
                <div class="text">Purchase History<br>
                    <div class="subtext">View all your bookings & Purchases</div>
                </div>
                <div class="righticon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
            </a>
            <a class="btn-disabled" href="#">
                <div class="lefticon">
                    <ion-icon name="tv-outline"></ion-icon>
                </div>
                <div class="text">Stream Library<br>
                    <div class="subtext">Rented & Purchased Movies</div>
                </div>
                <div class="righticon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
            </a>
            <a href="#">
                <div class="lefticon">
                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                </div>
                <div class="text">Help & Support<br>
                    <div class="subtext">View commonly asked queries and Chat</div>
                </div>
                <div class="righticon">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </a>
            <a class="btn-disabled" href="#">
                <div class="lefticon">
                    <ion-icon name="settings-outline"></ion-icon>
                </div>
                <div class="text">Accounts & Settings<br>
                    <div class="subtext">Location, Payments, Addresses & More</div>
                </div>
                <div class="righticon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
            </a>
            <a href="#">
                <div class="lefticon">
                    <ion-icon name="gift-outline"></ion-icon>
                </div>
                <div class="text">Rewards<br>
                    <div class="subtext">View your rewards & unlock new ones</div>
                </div>
                <div class="righticon">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </a>
            <a href="#">
                <div class="lefticon">
                    <ion-icon name="heart-outline"></ion-icon>
                </div>
                <div class="text">BookASmile</div>
                <div class="righticon">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </a>

        </nav>
        <!-- End sidebar -->

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            <nav class="navbar">
            <p  style="font-size:20px; font-weight:bold; color:gray ;justify-content:center; text-align:center ">
            Hello  <?php 
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['username'];
                }
            }
            ?>
            :)
            </p>
                <img src="img2/photos/BOOKINGSPACELOGO.png" class="brand-logo" alt="" />
                <div class='input'>
                    <ion-icon name="search"></ion-icon>
                    <input className='search'
                        placeholder='Search for Movies, Events and Sports'></input>
                </div>
                <div class="right-container">

                        <button class="signin" onclick="redirectToLoginPage()">log Out</button>

                    <a href="#" class="btn-customized open-menu">
                        <ion-icon name="menu-outline"></ion-icon>
                    </a>
                </div>
            </nav>

            <nav class="subnavbar">
                <ul class='navitem'>
                    <li><a class="active" href='home.html'>Home</a></li>
                    <li><a href='movies.html'>Movies</a></li>
                    <li><a href='events.html'>Events</a></li>
                    <li><a href='sports.html'>Sports</a></li>
                </ul>
            </nav>

            <div class="carousel-container">
                <div class="carousel">
                    <div class="slider">
                        <img src="img2/photos/CREDIT_BANNER.avif" width="785px" height="300px" alt="">
                    </div> 
                </div>
            </div>

            <script src="js/data.js"></script>
            <script src="js/app.js"></script>

            <h1 class="title">Recommended Movies</h1>
            <div class="movies-list">
                <div class="card-container">

                    <div class="movie">
                        <div class="card">
                            <img src="img2/posters/BADEMIYA_POSTER.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>93% &ThinSpace; 928 votes</p>
                            </div>
                        </div>
                        <h3>Bade Miyan Chote Miyan</h3>
                        <p class="detail">Action/Comedy/Thriller</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img2/posters/CREW_POSTER.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>92% &ThinSpace; 16k votes</p>
                            </div>
                        </div>
                        <h3>Crew</h3>
                        <p class="detail">Action/Comedey</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img2/posters/KUNGFUPANDA_POSTER.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>94% &ThinSpace; 14k votes</p>
                            </div>
                        </div>
                        <h3>Kung Fu Panda 4</h3>
                        <p class="detail">Action/Adventure/Comedy</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img2/posters/MAIDAAN_POSTER.avif" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>59% &ThinSpace; 74k votes</p>
                            </div>
                        </div>
                        <h3>Maidaan</h3>
                        <p class="detail">Biography/Drama/Sports</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img2/posters/FIRSTOMEN_POSTER.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>87% &ThinSpace; 34k votes</p>
                            </div>
                        </div>
                        <h3>The First Omen</h3>
                        <p class="detail">Horror/Thriller</p>
                    </div>

                    

                </div>
            </div>

            <div class="strip">
                <img src="img2/photos/BANNER.png" style="height:140px; " alt="Enjoy Anywhere ! Anytime !">
            </div>

            <h1 class="title-enter">The Best of Entertainment</h1>
            <div class="enter-list">
                <div class="enter-container">

                    <div class="card">
                        <img src="img2/posters/KISIKOBATANAMAT_POSTER.avif" class="card-img" width="223px" height="223px" alt="">
                    </div>

                    <div class="card">
                        <img src="img2/posters/KRCC_.avif" class="card-img" width="223px" height="223px" alt="">
                    </div>

                    <div class="card">
                        <img src="img2/posters/SUDOKUCHAMPIONSHIP_POSTER.avif" class="card-img" width="223px" height="223px" alt="">
                    </div>

                    <div class="card">
                        <img src="img2/posters/OMLCOMEDY.avif" class="card-img" width="223px" height="223px" alt="">
                    </div>

                    <div class="card">
                        <img src="img2/posters/PARENTSRHYME.avif" class="card-img" width="223px" height="223px" alt="">
                    </div>

                </div>
            </div>

        </div>
        <!-- End content -->

    </div>
    <!-- End wrapper -->
    <script>
        function redirectToLoginPage() {
            // Redirect to the login page
            window.location.href = "logout.php";
        }
    </script>

</body>

</html>