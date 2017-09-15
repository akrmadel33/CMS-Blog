<?php
    $conHandler = mysqli_connect("mysql5.gear.host","akrmblog","Dr246rafHi_~","akrmblog");
    if(!isset($_SESSION)) {
        session_start();
    }
    
    if(isset($_GET['delete'])) {
        $postId = $_GET['delete'];
        $deleteQuery = "DELETE FROM blog_posts WHERE id = '$postId'";
        $excuteDelete = mysqli_query($conHandler,$deleteQuery);
        
        if($excuteDelete) {
            $_SESSION['deleteSuccess'] = 'Your new post is now deleted';
        } else {
            $_SESSION['deleteError'] = 'Something went wrong and we couldn\'t delete your post';
        }
    }
?>

<!DOCTYPE html>
<html>
<body>
    <br><br><br>
    <?php
        if(isset($_SESSION['deleteSuccess'])) {
            echo '<div class="alert alert-success" role="alert">'.$_SESSION['deleteSuccess'].'</div>';
            session_destroy();
        } else if (isset($_SESSION['deleteError'])) {
            echo '<div class="alert alert-danger" role="alert">'.$_SESSION['deleteError'].'</div>';
            session_destroy();
        }
    ?>
    <table class="table table-striped table-responsive">
        <tr class="success">
            <th>Title</th>
            <th>Date</th>
            <th>Image</th>
            <th>Post</th>
            <th>Options</th>
        </tr>
        <?php
            $getQuery = "SELECT * FROM blog_posts";
            $excuteGet = mysqli_query($conHandler,$getQuery);
            
            while($dataRows = mysqli_fetch_array($excuteGet)) {
                $postId = $dataRows['id'];
                $postTitle = $dataRows['title'];
                $postDateTime = $dataRows['date_time'];
                $postImage = $dataRows['image'];
                $postPost = nl2br($dataRows['post']);
                
                $postTitle = substr($postTitle, 0, 20);
                $postPost = substr($postPost, 0, 100);
                
                ?>
                <tr>
                    <td> <?php echo $postTitle ?> </td>
                    <td> <?php echo $postDateTime ?> </td>
                    <td> <img src="<?php echo $postImage ?>" height="80"> </td>
                    <td> <?php echo $postPost ?> </td>
                    <td>
                        <a class="btn btn-danger btn-block" href="Admin.php?page=2&delete=<?php echo $postId ?>">Delete</a>
                        <a class="btn btn-success btn-block" href="Post.php?id= <?php echo $postId ?> ">View</a>
                    </td>
                </tr>
                <script>
                    var idValue = <?php echo $postId ?>;
                    if(idValue >= 1 && idValue <= 7) {
                        $('[href="Admin.php?page=2&delete='+idValue+'"]').addClass('disabled');
                    }
                </script>
                <?php
            }
        ?>
    </table>
</body>
</html>
