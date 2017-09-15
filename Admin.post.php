<?php
    $conHandler = mysqli_connect("mysql5.gear.host","akrmblog","Dr246rafHi_~","akrmblog");
    if(!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html>
<body>
    <br><br><br>
    <form action="Admin.php?page=3" method="post" id="FormPost">
        <?php
        ?>
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Title" name="title">
        </div>
        <div class="form-group">
            <label>Date &amp; Time</label>
            <input type="text" class="form-control" placeholder="<?php echo date('M d,Y') ?>" name="dateTime" disabled>
            <?php $_POST['dateTime'] = date('M d,Y'); ?>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="url" class="form-control" placeholder="http://myUrl.com/image" name="image">
        </div>
        <div class="form-group">
            <label>Post</label>
            <textarea class="form-control" rows="3" name="post"></textarea>
        </div>
        <button type="submit" class="btn btn-success" name="submit">Submit New Post</button>
        <br><br>
    </form>
    
    <?php
        if(isset($_POST['submit'])) {
            $postTitle = mysqli_real_escape_string($conHandler,$_POST['title']);
            $postDateTime = mysqli_real_escape_string($conHandler,$_POST['dateTime']);
            $postImage = mysqli_real_escape_string($conHandler,$_POST['image']);
            $postPost = mysqli_real_escape_string($conHandler,$_POST['post']);
            
            //echo $postTitle . $postDateTime . $postImage . $postPost;
            
            $postQuery = "INSERT INTO blog_posts(title,date_time,image,post)
                            VALUES ('$postTitle','$postDateTime','$postImage','$postPost')";
            $excuteQuery = mysqli_query($conHandler,$postQuery);
            
            if($excuteQuery) {
                $_SESSION['postSuccess'] = 'Your new post is now online';
            } else {
                $_SESSION['postError'] = 'Something went wrong and we couldn\'t post';
            }
            
            if(isset($_SESSION['postSuccess'])) {
                echo '<div class="alert alert-success" role="alert">'.$_SESSION['postSuccess'].'</div>';
                session_destroy();
            } else if (isset($_SESSION['postError'])) {
                echo '<div class="alert alert-danger" role="alert">'.$_SESSION['postError'].'</div>';
                session_destroy();
            }
        }
    ?>
</body>
</html>
