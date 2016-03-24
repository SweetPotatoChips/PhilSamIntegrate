<!-- This is the header file that can be included at the top of a file to have the banner at the top of a page-->
<!-- to highlight one of the <li> on the navbar you must define the variable $action as one of the following: "home", "booking", "serach", "login", "register", "logout"-->
<!-- This has the ability to change the login and register to logout -->
<nav class="navbar navbar-default"><!-- creates the navbar -->
    <div class="container-fluid"><!-- created the container field as fluid -->
        <a class="navbar-brand"><b>Tour of Britian</b></a> <!-- Makes the title in the top left of the navbar "Tour of Britian"-->
        <ul class="nav navbar-nav">
            <li <?php if ($action=="home"){echo "class='active'";}?> ><a href="index.php">Home</a></li> <!-- Homepage button -->
            <li <?php if ($action=="booking"){echo "class='active'";}?>><a href="makeBooking.php">Make Booking</a></li> <!-- Make Booking page button -->
            <li <?php if ($action=="search"){echo "class='active'";}?>><a href="journeySearch.php">Journey Search</a></li> <!-- journey serach button -->
        </ul>
        <ul class="nav navbar-nav navbar-right"> <!-- puts the following buttons on the right of the navbar -->
        <?php
            $logged = FALSE;//this is tempory. will be changed when login is completed
            if($logged == TRUE)//if true some is logged in so the login and register button is changed to logout`
            {
                ?>
                <li <?php if ($action=="logout"){echo "class='active'";}?>><a href="logout.php">Logout</a></li>
                <?php
            }
            else// by default login and register buttons will be displayed
            {
                ?>
                <li <?php if ($action=="login"){echo "class='active'";}?>><a href="login.php">Login</a></li>
                <li <?php if ($action=="register"){echo "class='active'";}?>><a href="register.php">Register</a></li>
                <?php
            }
        ?>
        </ul>
    </div>
</nav>