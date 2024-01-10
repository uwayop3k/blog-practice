<?php include("path.php") ?>
<?php include(ROOT_PATH.'/app/controllers/posts.php');

if (isset($_GET['id'])) {
    $post=selectOne('posts',['id'=>$_GET['id']]);
    $user=selectOne('users',['id'=>$post['user_id']]);
    $topic=selectOne('topics',['id'=>$post['topic_id']]);
    $posts=selectAll('posts',['published'=>1]);
    $topics=selectAll('topics');
}


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
    <title><?php echo $post['title'];?> | NIKI NIKI</title>
</head>
<body>
    <!-- Include header -->
    <?php include(ROOT_PATH ."/app/includes/header.php"); ?>
    

    <!-- Page wrapper -->
    <div class="page-wrapper">
        <?php include(ROOT_PATH ."/app/includes/search.php"); ?>

        <!-- Content -->
        <div class="content clearfix">

            <!-- Main content wrapper-->
            <div class="main-content-wrapper">
                <!-- Main content -->
                <div class="main-content single">
                    <h3 class="post-title"><?php echo $post['title'];?></h3>
                    
                    <div class="post-content">
                        <?php echo html_entity_decode($post['body']);?>
                    </div>

                    <!-- ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; -->
                    <div class="about-post" style="display:block">
                        <div class="author" style="align-content:center;width:70%;padding:5px;font-family:'Times New Roman', Times, serif;color:gray;font-size:0.4em">
                            <i class="fa fa-user"> - <?php echo $user['username'];?></i>
                        </div>

                        <div class="published_at" style="align-content:center;width:70%;padding:5px;font-family:'Times New Roman', Times, serif;color:gray;font-size:0.4em">
                            <i class="far fa-calendar"> - <?php echo date('F j, Y',strtotime($post['created_at']));?></i>
                        </div>

                        <div class="topic" style="align-content:center;width:70%;padding:5px;font-family:'Times New Roman', Times, serif;color:gray;font-size:0.4em">
                            <!-- <i class="fa fa-user"></i> -->
                            <i class="fa fa-pie-chart" aria-hidden="true"> - <?php echo $topic['name'];?></i>

                        </div>
                    </div>
                    <!-- ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; -->
                </div>
                <!-- //Main content -->
            </div>
            <!-- //Main content wrapper-->

            <!-- Side bar -->
            <div class="sidebar single">

                <!-- <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search..,">
                    </form>
                </div> -->

                <div class="section popular">
                    <h2 class="section-title">Izasomwe Cyane</h2>
                    
                    <?php foreach($posts as $p):?>
                        <div class="post clearfix">
                            <a href="single.php?id=<?php echo $p['id'];?>">
                                <img src="<?php echo BASE_URL . '/assets/images/'. $p['image'];?>" alt="">
                            </a>
                            
                            <a href="single.php?id=<?php echo $p['id'];?>" class="title"><h5><?php echo $p['title'];?></h5></a>
                        </div>
                    <?php endforeach;?>

                    
                </div>

                <div class="section topics">
                    <h2 class="section-title">Ibisate</h2>
                    <ul>
                        
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="<?php echo BASE_URL. '/index.php?t_id='.$topic['id'].'&name='.$topic['name']; ?>"><?php echo $topic['name'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- //Side bar -->
        </div>

        <!-- //Content -->
        
    </div>
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