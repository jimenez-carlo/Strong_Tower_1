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
  header{
  width: 100%;
  height: 60vh;
  background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),
  url(images/userdashb.jpg);
  background-position: center;
  background-size: cover;
  clip-path: polygon(100% 0, 100% 91%, 47% 100%, 0 89%, 0 0);
}
</style>
<body>
 <!-- Start Header -->
 <header>
        <nav>
            <div class="logo">WE CREATE<span>SHAPES</span></div>
            <div class="open"><i class="fas fa-bars"></i></div>
            <ul class="links">
                <li><a href="user_dashb.php" ><span class="fa-solid fa-house"></span>Home</a></li>
                <li><a href="exercise.php"><span class="fa-solid fa-person-walking"></span>Exercise</a></li>
                <li><a href="plan.php"class="active"><span class="fa-solid fa-circle-check"></span>Plan</a></li>
                <li><a href="#"><span class="fa-solid fa-circle-exclamation-check"></span>Tips</a></li>
                <li><a href="index.php"><span class="fa-solid fa-arrow-right-from-bracket"></span>Log Out</a></li>
                <div class="close"><i class="fas fa-times"></i></div>
            </ul>
        </nav>
    </header>
<!-- Start Plan -->
<section class="pricing_table">
        <h1>Our Plan</h1>
        <div class="pricing_card">
            <div class="pricing_box">
                <h2>Silver</h2>
                <h3><sup>₱</sup>500<span>/per month</span></h3>
                <h3><sup>₱</sup>70<span>/per session</span></h3>
                <p>per month</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i> Use of weights <br>and body building <br> only</li>
                </ul>
                <button class="btn">Check Out</button>
            </div>
            <div class="pricing_box">
                <h2>Gold</h2>
                <h3><sup>₱</sup>700<span>/per month</span></h3>
                <h3><sup>₱</sup>100<span>/per session</span></h3>
                <p>per month</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i>use of weights <br>and body building machines</li>
                    <li><i class="fa-solid fa-check"></i>eliptical machines</li>
                </ul>
                <button class="btn">Check Out</button>
            </div>
            <div class="pricing_box">
                <h2>Platinum</h2>
                <h3><sup>₱</sup>1500<span>/per month</span></h3>
                <h3><sup>₱</sup>150<span>/per session</span></span></h3>
                <p>per month</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i> Use of weights and<br> body building machines</li>
                    <li><i class="fa-solid fa-check"></i>all equipment including <br>high-end treadmills</li>
                </ul>
                <button class="btn">Check Out</button>
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