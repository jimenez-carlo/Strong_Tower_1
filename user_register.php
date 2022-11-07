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
                <li><a href="index.php" >Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="trainers.php">Trainers</a></li>
                <li><a href="user_register.php" class="active">Register</a></li>
                <li><a href="adminform.php">Admin</a></li>
                <div class="close"><i class="fas fa-times"></i></div>
            </ul>
        </nav>
        <div class="content">
            <h5>REGISTER ACCOUNT NOW</h5>
        </div>
    </header>
    <!-- Strart Register -->
    <section class="register">
        <h1>register</h1>
        <form method="POST" action="register-act.php">
            <div class="input_box">
                <input type="text" name="name" placeholder="Full Name">
                <input type="text" name="gender"  placeholder="Gender">
            </div>
            <div class="input_box">
                <input type="text" name="address"  placeholder="Address">
                <input type="text" name="contact"  placeholder="Your Contact">
            </div>
            <div class="input_box">
                <input type="email" name="email"  placeholder="Your Email">
                <input type="password" name="password"  placeholder="Password">
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