<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1maximun-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css
    "integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style1.css"
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="fa-solid fa-lock"></span><span>Admin Panel</span> </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php" class="active"><span class="fa-solid fa-clipboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="trainors.php"><span class="fa-solid fa-registered"></span>
                    <span>Manage Trainors</span></a>
                </li>
                <li>
                    <a href="progress.php"><span class="fa-solid fa-bars-progress"></span>
                    <span>Progress List</span></a>
                </li> 
                <li>
                    <a href=""><span class="fa-solid fa-peso-sign"></span>
                    <span>Payments</span></a>
                </li> 
                <li>
                    <a href="members.php"><span class="fa-solid fa-people-group"></span>
                    <span>Members</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-calendar-days"></span>
                    <span>Schedule</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-circle-check"></span>
                    <span>Plan</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-list"></span>
                    <span>Inventory</span></a>
                </li>
                <li>
                    <a href="index.php"><span class="fa-solid fa-arrow-right-from-bracket"></span>
                    <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="fa-solid fa-bars"></span>
                </label>
            
                Dashboard
            </h2>
               
            <div class="search-wrapper">
                <input type="search" placeholder="Search Here" />
                <span class="fa-solid fa-magnifying-glass"></span>
            </div>
            <div class="user-wrapper"> 
                <img src="/images/profile.jpg.jpg" width="40px" height="30px" alt="">
                <div>
                    <h4>Wilson</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div> 
                        
                     <span><a href="members.php">New Members</a></span>
                    </div>
                    <div>
                        <span class="fa-solid fa-people-group"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div> 
                    
                        <span>Plan</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-circle-check"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div> 
                       
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-peso-sign"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div> 
                        
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-peso-sign"></span>
                    </div>
                </div>
            </div>
            
        </main>
    </div>
</body>
</html>