<?php ob_start(); ?>

<!-- HEADER -->
<?php include "includes/header.php" ?>

<!-- NAVIGATION -->
<?php include "includes/navigation.php" ?>

<div class="profile-top">
    <img src="assets/images/profile-image/dummy-profile.jpg" alt="profile-picture">

    <div class="user-detail">
        <h2>Prashant</h2>
        <h4>@prashant</h4>

        <h3>Achievements in Gaming</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <textarea name="userbio" cols="26" rows="15"> this is bio </textarea>
            <button name="update-bio">Update</button>
        </form>
    </div>

</div>
</div>
</body>

</html>