<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
        <!-- Links -->
        <ul class="navbar-nav nav-tabs">
            <li class="nav-item">
            <a class="nav-link text-dark active" href="<?php echo base_url() ?>index.php/home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-dark" href="<?php echo base_url() ?>index.php/user/about">About</a>
            </li>
            <li class="nav-item">
                <?php
                        if(!isset($_SESSION['username'])) {
                    ?>
                        <a class="nav-link text-dark" href="<?php echo base_url() ?>index.php/user/register">Register</a>
                    <?php
                    }
                ?>
            </li>
            <li class="nav-item">
                <?php
                    if(isset($_SESSION['username'])) {
                ?>
                    <a class="nav-link text-dark" href="<?php echo base_url() ?>index.php/user/update_profile"><?php echo $_SESSION['username']; ?></a>
                <?php
                }  else {
                ?>
                    <a class="nav-link text-dark" href="<?php echo base_url() ?>index.php/user/login">Login</a>
                <?php
                }
                ?>
            </li>
            <li class="nav-item">
                <?php
                    if(isset($_SESSION['username'])) {
                ?>
                    <a class="nav-link text-dark" href="<?php echo base_url() ?>index.php/logout/user_logout">Logout</a>
                <?php
                    }
                ?>
            </li>
        </ul>

        <div>
            <form class="form-inline" action="<?php echo base_url() ?>index.php/user/search" method="POST">
                <input class="form-control mr-sm-1" type="text" placeholder="Search your blood group" name="search">
                <button class="btn btn-success" type="submit" name="submit">Search</button>
            </form>
        </div>

        <div>
            <input type="button" onclick="getLocation()" class="btn-warning rounded" value="Allow location">
        </div>
    </div>
</nav>

<div id="txtHint"></div>
