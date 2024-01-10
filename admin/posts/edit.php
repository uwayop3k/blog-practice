<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
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

    <title>Admin Section - Edit Posts</title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit Post</h2>
                
                <?php include(ROOT_PATH ."/app/helpers/formerrors.php") ?>
                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>" id="">
                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" id="" class="text-input">
                    </div>

                    <div>
                        <label for="">Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>

                    <div>
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="text-input">
                    </div>

                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>

                            <?php foreach($topics as $key => $topic): ?>
                                <?php if (!empty($topic_id) && $topic_id==$topic['id']):?>
                                    <option selected value="<?php echo $topic['id'];?>"><?php echo $topic['name'];?></option>
                                <?php else: ?>
                                    <option value="<?php echo $topic['id'];?>"><?php echo $topic['name'];?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>     

                            
                        </select>
                    </div>

                    <div>
                        <?php if (empty($published) && $published==0): ?>
                            <label for="">
                                <input type="checkbox" name="published">
                                Publish
                            </label>
                        <?php else: ?>
                            <label for="">
                                <input type="checkbox" name="published" checked>
                                Publish
                            </label>
                        <?php endif; ?>
                    </div>

                    <div>
                        <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
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