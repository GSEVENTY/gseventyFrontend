<nav>
    <a href="./index.php">
        <img class="logo-top" src="./assets/images/logo_head.png" alt="nav-icon" />
    </a>

    <div class="search-container">
        <form action="./search.php" method="post">
            <input type="text" placeholder="Search" name="search" />
            <button name="submit" class="fa fa-search" type="submit"></button>
        </form>
    </div>

<!--
                <div class='dropdown'>
                <button class='dropbtn'><i class='login-signup fa fa-user'></i></button>
                <div class='dropdown-content'>
                <a href='./profile.php'>Profile</a>
                <a href='#'>Logout</a>
                </div>
                </div>
-->
                
<!--
                <div class='dropdown'>
                <button class='dropbtn'><i class='login-signup fa fa-user'></i></button>
                <div class='dropdown-content'>
                <a href='./profile.php'>Profile</a>
                <a href='#'>Admin</a>
                <a href='#'>Logout</a>
                </div>
                </div>
-->
   
   <a href='./login.php'><i class='login-signup fa fa-user'></i></a>
</nav>

<?php include "sidebar.php" ?>