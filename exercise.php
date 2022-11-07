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
                <li><a href="user_dashb.php"><span class="fa-solid fa-house"></span>Home</a></li>
                <li><a href="exercise.php" class="active"><span class="fa-solid fa-person-walking"></span>Exercise</a></li>
                <li><a href="plan.php"><span class="fa-solid fa-circle-check"></span>Plan</a></li>
                <li><a href="#"><span class="fa-solid fa-circle-exclamation-check"></span>Tips</a></li>
                <li><a href="index.php"><span class="fa-solid fa-arrow-right-from-bracket"></span>Log Out</a></li>
                <div class="close"><i class="fas fa-times"></i></div>
            </ul>
        </nav>
    </header>
    <!-- Start Services -->
    <section class="services">
        <h1>our services</h1>
        <div class="container">
            <div class="box">
                <img src="images/image3.jpg">
                <div class="info">
                    <h3>our services</h3>
                    <p>Strong Tower Fitness was started in 2016 and has the same mission it had then, help people, help our community. We strive to help everyone who comes through our door to become the best person they can be. We believe that there is much more to our gym than just working out. </p>
                    <button class="btn">Learn more</button>
                </div>
            </div>
            <div class="box">
                <img src="images/zumba.jpg">
                <div class="info">
                    <h3>Zumba</h3>
                    <p>Zumba is a form of fitness class in which you burn off calories by dancing to different kinds of lively tunes, often Latin-American inspired such as salsa, merengue and samba, but also other types of modern music like hip hop and Bollywood (music from the Indian film industry).  </p>
                    <button class="btn">Learn more</button>
                </div>
            </div>
            <div class="box">
                <img src="images/taekwondo.jpg">
                <div class="info">
                    <h3>Taekwondo</h3>
                    <p>Taekwondo comes from three Korean words, tae, "kick," kwon, "fist or punch," and do, "the art of." That's a pretty good description of this dynamic martial art, which involves acrobatic kicks and graceful punches. Like all martial arts, taekwondo isn't just combat — it's also an art and a discipline. </p>
                    <button class="btn">Learn more</button>
                </div>
            </div>
            <div class="box">
                <img src="images/muaythai.jpg">
                <div class="info">
                    <h3>Muay Thai</h3>
                    <p>Muay Thai is a stand-up striking sport, with two competitors in the ring throwing punches, elbows, knees and kicks at each other. Clinching, sweeps and throws are also allowed. </p>
                    <button class="btn">Learn more</button>
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