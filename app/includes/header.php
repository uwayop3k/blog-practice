<header>
        <a href="<?php echo BASE_URL .'/index.php'?>" class="logo">
            <h1 class="logo-text"><span>NIKI</span> NIKI</h1>
        </a>

        <div class="wrap menu-toggle">
            <div class="menu-icon"></div>
            <div class="menu-icon"></div>
            <div class="menu-icon"></div>
        </div>
  
        <ul class="nav">
            <!-- <li><a href="<?php echo BASE_URL .'/index.php'?>">Home</a></li> -->
            <li><a href="#about">Abo turi bo</a></li>
            <!-- <li><a href="#">Services</a></li> -->

            <?php if(isset($_SESSION['id'])):?>

                <li>
                    <a href="#" class="user">
                        <i class="fa fa-user"></i>
                        <!-- <div class="user-icon"></div> -->
                        <?php echo $_SESSION['username'];?>
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <!-- <a href="#" class="user"> -->
                        <!-- <div class="user-icon"></div> -->
                        <!-- <i class="fa-user"></i> -->
                        <!-- <?php echo $_SESSION['username'];?> -->
                    <!-- </a> -->
                    <ul>
                        <?php if($_SESSION['admin']):?>
                            <li><a href="<?php echo BASE_URL.'/admin/dashboard.php' ?>">Dashboard</a></li>
                        <?php endif; ?>    
                        <li><a href="<?php echo BASE_URL.'/logout.php' ?>" class="logout">Logout</a></li>
                    </ul>
                </li>
            <?php else:?>
                <!-- <li>
                    <a href="#" class="user">
                        <div class="user-icon"></div>
                        Account
                    </a>
                    <ul>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Log In</a></li>
                    </ul>
                </li> -->

                <li><a href="<?php echo BASE_URL.'/register.php' ?>">Iyandikishe</a></li>
                <li><a href="<?php echo BASE_URL.'/login.php' ?>">Injira</a></li>
            <?php endif;?>


            
            
        </ul>
    </header>