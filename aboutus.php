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
<style>
  h5{
    color:red;
    font-size: 60px;
    font-weight: bold;
  }
</style>
<body>
    <!-- Start Header -->
    <header>
        <nav>
            <div class="logo">WE CREATE<span>SHAPES</span></div>
            <div class="open"><i class="fas fa-bars"></i></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php" class="active">About</a></li>
                <li><a href="trainers.php">Trainers</a></li>
                <li><a href="user_register.php">Register</a></li>
                <li><a href="adminform.php">Admin</a></li>
                <div class="close"><i class="fas fa-times"></i></div>
            </ul>
        </nav>
        <div class="content">
            <h5>ABOUT US</h5>
            
        </div>
    </header>
    <!-- Start About -->
    <section class="about">
        <div class="row">
            <div class="images">
                <img src="images/about.jpg">
            </div>
            <div class="content">
                <h1>About Strong Tower</h1>
                <p>Strong Tower Fitness was started in 2016 and has the same mission it  had then, help people, help our community. We strive to help everyone who comes through our door to become the best person they can be. We believe that there is much more to our gym than just working out. Our members and culture promote a positive and encouraging atmosphere that is addictive! New members are surrounded by people trying to improve and are excited to see a new face! We consider our members to be family. It doesn't matter what your cardiovascular endurance is, how much you weigh, or how old you are. If you are looking to improve yourself and are willing to put the work in this is the place for you!</p>
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