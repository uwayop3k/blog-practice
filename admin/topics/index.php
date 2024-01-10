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

    <title>Admin Section - Manage Topics</title>
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
                <a href="index.php" class="btn btn-big">Manage Topic</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Topics</h2>
                <?php include(ROOT_PATH ."/app/includes/messages.php"); ?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($topics as $key => $topic): ?>
                            <tr>
                                <td><?php echo $key +1?></td>
                                <td><?php echo $topic['name']; ?></td>
                                <td><a href="edit.php?id=<?php echo $topic['id'];?>" class="edit">edit</a></td>
                                <td><a href="index.php?del_id=<?php echo $topic['id'];?>" class="delete">delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                        

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Admin content -->
        
        
    </div>
    <!-- //Page wrapper -->


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Custom script -->
    <script src="../../assets/js/index.js"></script>
</body>
</html>