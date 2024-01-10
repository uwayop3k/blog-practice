<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">



    <!-- Menu styling -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 

    <!-- Custom styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Iyandikishe</title>
</head>
<body>
    <!-- Include header -->
    <?php include(ROOT_PATH ."/app/includes/header.php"); ?>
    

    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Iyandikishe</h2>

            <?php include(ROOT_PATH ."/app/helpers/formerrors.php") ?>

            <div>
                <label for="">Izina ryawe</label>
                <input type="text" name="username" value="<?php echo $username?>" class="text-input">
            </div>

            <div>
                <label for="">Email</label>
                <input type="text" name="email" value="<?php echo $email?>" class="text-input">
            </div>
    
            <div>
                <label for="">Ijambobanga</label>
                <input type="password" name="password" value="<?php echo $password?>" class="text-input">
            </div>
    
            <div>
                <label for="">Emeza ijambobanga</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf?>" class="text-input">
            </div>
    
            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Iyandikishe</button>
            </div>
    
            <p>Ufite konte? <a href="<?php echo BASE_URL . '/login.php' ?>">Injira</a></p>
        </form>

        
    </div>

    <!-- Footer -->
    <!-- Include footer -->
    <?php include(ROOT_PATH ."/app/includes/footer.php"); ?>

    <!-- //Footer -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <!-- Custom script -->
    <script src="assets/js/index.js"></script>
</body>
</html>