<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1maximun-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css
    "integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
    <title>PROGRESS</title>
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
                    <a href="dashboard.php" ><span class="fa-solid fa-clipboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="trainors.php"><span class="fa-solid fa-registered"></span>
                    <span>Manage Trainors</span></a>
                </li>
                <li>
                    <a href="progress.php"class="active"><span class="fa-solid fa-bars-progress"></span>
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
               PROGRESS
            </h2>
        </header>
        <br><br>
        <main
        <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Progress List</h3>
                            <nav class="navbar navbar-light bg-light justify-content-between">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </nav>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Program</td>
                                            <td>Date</td>
                                            <td>Duration</td>
                                            <td>Weight</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>rollene</td>
                                            <td>silver</td>
                                            <td>07-06-22</td>
                                            <td>45 minutes</td>
                                            <td>67 klg.</td>
                                            <td>fat</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
        </main>
    </div>
</body>
</html>