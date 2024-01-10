<?php 
include("../../path.php");
include(ROOT_PATH. "/app/controllers/users.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/fontawesome.min.css">



    <!-- Menu styling -->
    <link rel="stylesheet" href="../../assets/css/icons.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 

    <!-- Custom styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Sction - Edit Users</title>
</head>
<body>
    <!-- admin header -->
    <!-- Include header -->
    <?php include(ROOT_PATH ."/app/includes/adminheader.php"); ?>

    <!-- Admin Page wrapper -->
    <div class="admin-wrapper">
        
        <!-- left side bar -->
        <?php include(ROOT_PATH ."/app/includes/adminsidebar.php"); ?>
        <!-- left side bar -->

        <!-- Admin content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit Users</h2>

                <?php include(ROOT_PATH ."/app/helpers/formerrors.php") ?>
                <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label for="">Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>
        
                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email" value="<?php echo $email; ?>" class="text-input">
                    </div>
            
                    <div>
                        <label for="">Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                    </div>
            
                    <div>
                        <label for="">Password Confirmation</label>
                        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                    </div>

                    <div>
                        <?php if (isset($admin) && $admin==1):?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                        <?php else:?>
                            <label>
                                <input type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php endif; ?>
                    </div> 

                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Edit User</button>
                    </div>
                </form>
                
            </div>
        </div>
        <!-- Admin content -->
        
        
    </div>
    <!-- //Page wrapper -->


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CKEDITO 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <!-- Custom script -->
    <script src="../../assets/js/index.js"></script>
</body>
</html>