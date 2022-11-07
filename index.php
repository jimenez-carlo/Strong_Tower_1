<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Tower</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Start Header -->
    <header>
        <nav>
            <div class="logo">WE CREATE<span>SHAPES</span></div>
            <div class="open"><i class="fas fa-bars"></i></div>
            <ul class="links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="trainers.php">Trainers</a></li>
                <li><a href="user_register.php">Register</a></li>
                <li><a href="adminform.php">Admin</a></li>
                <div class="close"><i class="fas fa-times"></i></div>
            </ul>
        </nav>
        <div class="content">
            <h1>Strong Tower</h1>
            <button class="btn">get started</button>
        </div>
    </header>
    <!-- Start About -->
    <section class="about">
        <div class="row">
            <div class="images">
                <img src="images/image4.jpg">
            </div>
            <div class="content">
                <h1>About Strong Tower</h1>
                <p>Strong Tower Fitness was started in 2016 and has the same mission it had then, help people, help our community. We strive to help everyone who comes through our door to become the best person they can be. We believe that there is much more to our gym than just working out. Our members and culture promote a positive and encouraging atmosphere that is addictive! New members are surrounded by people trying to improve and are excited to see a new face! We consider our members to be family. It doesn't matter what your cardiovascular endurance is, how much you weigh, or how old you are. If you are looking to improve yourself and are willing to put the work in this is the place for you!</p>
            </div>
        </div>
    </section>
    <!-- Start Trainers -->
    <section class="trainers">
        <h1>Our Trainers</h1>
        <p>They are Handsome</p>
        <div class="items">
            <div class="item">
                <img src="images/trainer1.jpg">
                <div class="inner">
                    <div class="info">
                        <h4>John</h4>
                        <p>online coach</p>
                        <div class="links">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/trainer2.jpg">
                <div class="inner">
                    <div class="info">
                        <h4>Karel</h4>
                        <p>online coach</p>
                        <div class="links">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/trainer3.jpg">
                <div class="inner">
                    <div class="info">
                        <h4>Arnold</h4>
                        <p>online coach</p>
                        <div class="links">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/trainer4.jpg">
                <div class="inner">
                    <div class="info">
                        <h4>Michael</h4>
                        <p>online coach</p>
                        <div class="links">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!-- Strart Register -->
    <section class="register">
        <h1>register</h1>
        <form method="POST" action="register-act.php">
            <div class="input_box">
                <input type="text" name="name" placeholder="Full Name">
                <input type="text" name="gender" placeholder="Gender">
            </div>
            <div class="input_box">
                <input type="text" name="address" placeholder="Address">
                <input type="text" name="contact" placeholder="Your Contact">
            </div>
            <div class="input_box">
                <input type="email" name="email" placeholder="Your Email">
                <input type="password" name="password" placeholder="Password">
            </div>
            <input type="submit" name="submit" value="Connect Us" class="btn"><br><br>
            <p style="color:#fff;font-size:20px;">If you an Already Account, just click <a href="user_login.php" style="color:red; font-size:20px;">here</a> to Login</p>
        </form>
    </section>
    <!-- Start Footer -->
    <footer>
        Strong Tower we create shape
    </footer>
    <!-- Javascript Section -->
    <script>
        var mainMenu = document.querySelector('.links')
        var openMenu = document.querySelector('.open')
        var closeMenu = document.querySelector('.close')

        openMenu.addEventListener('click', show)
        closeMenu.addEventListener('click', close)

        function show() {
            mainMenu.style.display = 'flex'
            mainMenu.style.right = '0'
        }

        function close() {
            mainMenu.style.right = '-60%'
        }
    </script>







</body>

</html>