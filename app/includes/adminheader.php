<header>
    <a href="<?php echo BASE_URL .'/index.php'?>" class="logo">
        <h1 class="logo-text"><span>NIKI</span> NIKI</h1>
    </a>

    <!-- <i class="fa fa-bars menu-toggle"></i> -->
    <div class="wrap menu-toggle">
        <div class="menu-icon"></div>
        <div class="menu-icon"></div>
        <div class="menu-icon"></div>
    </div>

    <ul class="nav">
        <li>
            <a href="#" class="user">
                <i class="fa fa-user"></i>
                <!-- <div class="user-icon"></div> -->
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
            <ul>
                <?php if($_SESSION['admin']):?>
                    <li><a href="<?php echo BASE_URL.'/admin/dashboard.php' ?>">Dashboard</a></li>
                <?php endif; ?> 
                <li><a href="<?php echo BASE_URL.'/logout.php' ?>" class="logout">Logout</a></li>
                <!-- <li><a href="#" class="logout">Logout</a></li> -->
            </ul>
        </li>
    </ul>
</header>