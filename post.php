<?php include "includes/db.php";?>
    <?php include "includes/header.php";?>

    <!-- Navigation -->
<?php include "includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                <?php 
                
                
                
                if(isset($_GET['p_id'])){
                    $the_post_id = $_GET['p_id'];
                }
                
                
                
                
                
                $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
                $select_all_posts_query = mysqli_query($connection,$query);
                    
                    while($row = mysqli_fetch_assoc($select_all_posts_query)){
                        
                        $post_title = $row['post_title'];
                        $post_author = $row['post_user'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                        ?>
                        
                        <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo "Posted on " . $post_date ?> </p>
                <hr>
                <button> name="Download" type="download" value="Download" </button>
                
                <img class="img-responsive" src="images/<?php echo $post_image;?> " alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                

                <hr>
 <?php   }  ?>
               
               
               
               

              


                

                              
                
                
                

                
            </div>

            <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php";?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include "includes/footer.php";?>
   