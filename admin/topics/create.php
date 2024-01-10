<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
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

    <title>Admin Sction - Add Topics</title>
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
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Topic</h2>
                <?php include(ROOT_PATH ."/app/helpers/formerrors.php") ?>
                <form action="create.php" method="post">
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo $name?>" id="" class="text-input">
                    </div>

                    <div>
                        <label for="">Description</label>
                        <textarea name="description" id="body"><?php echo $description?></textarea>
                    </div>

                    <div>
                        <button type="submit" name="add-topic" class="btn btn-big">Add topic</button>
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