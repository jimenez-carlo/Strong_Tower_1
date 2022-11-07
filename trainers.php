<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,
    wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&
    display=swap" rel="stylesheet">
    <!-- Awesome fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css
    "integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
    <title>Strong Tower</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <!-- Start Header -->
    <header>
        <nav>
            <div class="logo">WE CREATE<span>SHAPES</span></div>
            <div class="open"><i class="fas fa-bars"></i></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="trainers.php" class="active">Trainers</a></li>
                <li><a href="user_register.php">Register</a></li>
                <li><a href="adminform.php">Admin</a></li>
                <div class="close"><i class="fas fa-times"></i></div>
            </ul>
        </nav>
        <div class="content">
            <h1>TRAINERS</h1>
            
        </div>
    </header>
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

        function show(){
            mainMenu.style.display = 'flex'
            mainMenu.style.right = '0'
        }
        function close(){
            mainMenu.style.right = '-60%'
        }
    </script>




    

    
</body>
</html>