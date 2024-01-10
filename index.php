<?php 
include("path.php"); 
// include(ROOT_PATH."/app/database/db.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts=array();
$poststitle='Inkuru zigezweho';

if (isset($_GET['t_id'])) {
    $posts=getPostsByTopicId($_GET['t_id']);
    $poststitle="Soma '". $_GET['name']."'";
}

else if (isset($_POST['search-term'])) {
    $posts=searchPosts($_POST['search-term']);
    $poststitle="Inkuru zirimo '". $_POST['search-term']."'";
}
else if (isset($_POST['search-icon'])) {
    $posts=searchPosts($_POST['search-term']);
    $poststitle="Inkuru zirimo '". $_POST['search-term']."'";
} else{
    $posts=getPublishedPosts();
}

$slideposts=getPublishedPosts();
// dd($posts)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">



    <!-- Menu styling -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 

    <!-- Custom styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NIKI NIKI</title>
</head>
<body>
    <!-- Include header -->
    <?php include(ROOT_PATH ."/app/includes/header.php"); ?>
    <?php include(ROOT_PATH ."/app/includes/messages.php"); ?>
    

    
    <!-- <div class="msg success">
        <li>You have successively loged in</li>
    </div> -->

    <!-- <div class="container">
        <div class="arr left"><div></div></div>
        <div class="arr right"><div></div></div>
        <div class="arr up"><div></div></div>
        <div class="arr down"><div></div></div>
    </div> -->

    <!-- Page wrapper -->
    <div class="page-wrapper">
        <?php include(ROOT_PATH ."/app/includes/search.php"); ?>
        <!-- Posts slider -->
        <div class="post-slider">
            <h2 class="slider-title">Izasomwe Cyane</h2>
            <div class="arr left prev"><div></div></div>
            <div class="arr right next"><div></div></div>

            <div class="post-wrapper">

                <!-- <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <img src="assets/images/image1.jpg" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html"> lorem ipsum lorem ipsumlorem ipsum</a></h4>

                        </div>
                    </div> 
                <?php endforeach; ?> -->

                <?php foreach ($slideposts as $post): ?>
                    <div class="post">
                        <a href="single.php?id=<?php echo $post['id'];?>">
                            <img src="<?php echo BASE_URL . '/assets/images/'. $post['image'];?>" alt="" class="slider-image">
                        </a>
                        
                        <div class="post-info">
                            <h4><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h4>
                            <i class="far fa-user"> - <?php echo $post['username'];?></i>
                            <br>
                            <i class="far fa-calendar"> - <?php echo date('F j, Y',strtotime($post['created_at']));?></i>
                        </div>
                    </div> 
                <?php endforeach; ?>

            </div>
        </div>
        <!-- // Posts slider -->
        

        <!-- Content -->
        <div class="content clearfix">

            <!-- Main content -->
            <div class="main-content">

                <h2 class="recent-post-title"><?php echo $poststitle;?></h2>
                
                <?php foreach ($posts as $post):?>
                    <div class="post clearfix">
                        <a href="single.php?id=<?php echo $post['id'];?>">
                            <img src="<?php echo BASE_URL . '/assets/images/'. $post['image'];?>" alt="" class="post-image">
                        </a>
                        <div class="post-preview">
                            <h3><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h3>
                            <i class="far fa-user"> - <?php echo $post['username'];?></i>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="far fa-calendar"> - <?php echo date('F j, Y',strtotime($post['created_at']));?></i>
                            <p class="preview-text">
                                <?php echo html_entity_decode(substr($post['body'],0,100));?> ...
                            </p>
                            <a href="single.php?id=<?php echo $post['id'];?>" class="btn read-more">Soma byose</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <!-- //Main content -->

            <!-- Side bar -->
            <div class="sidebar">

                <!-- <div class="section search">
                    <h3 class="section-title">Search</h3>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div> -->

                

                <div class="section topics">
                    <h3 class="section-title">Ibisate</h3>
                    <ul>
                        
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="<?php echo BASE_URL. '/index.php?t_id='.$topic['id'].'&name='.$topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- //Side bar -->
        </div>

        <!-- //Content -->
        
    </div>

            <!-- www.publiclub.com -->

    <!-- //Page wrapper -->

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