<?php
    $conHandler = mysqli_connect("mysql5.gear.host","akrmblog","Dr246rafHi_~","akrmblog");
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Blog/As User</title>
    <meta charset="utf-8">
    
   <!--    Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <!--    Bootstrap-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--    FontAwesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link href="Main.css" type="text/css" rel="stylesheet">
    
    <!--    jQuery 3X-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--    Validation Plugin-->
    <script src="jquery.validate.min.js"></script>
    <!--    BootStrap 3X-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--    GSAP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/plugins/ScrollToPlugin.min.js"></script>
</head>

<body>
    <nav id="Navigation" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navbar-brand">AKRAM CMS-BLOG</div>
            </div>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span> &nbsp;
                        <span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;
                        User
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="Admin.php">Try As Admin</a></li>
                    </ul>
                </li>
                <li title="Blog"><a href="User.php"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                <li title="Accout Supscription"><a href="Subscription.php"><i class="fa fa-credit-card" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container-fluid" id="Cover-photo"></div>
    
    <div class="container" id="Posts">
        <div class="row">
            <div class="col-md-9" id="Tour6"><!--Posts Colum-->
                <?php
                    if(isset($_GET['id'])) {
                        $idPost = $_GET['id'];
                    } else {
                        echo "<script> window.location='User.php' </script>";
                    }
                    
                    $getQuery = "SELECT * FROM blog_posts WHERE id='$idPost'";
                    $excuteGet = mysqli_query($conHandler,$getQuery);
                    
                    while($dataRows = mysqli_fetch_array($excuteGet)) {
                        $postId = $dataRows['id'];
                        $postTitle = $dataRows['title'];
                        $postDateTime = $dataRows['date_time'];
                        $postImage = $dataRows['image'];
                        $postPost = nl2br($dataRows['post']);
                        
                        echo "<div class=\"headding text-center\">$postTitle<br><br></div>";
                        echo "<div class=\"date text-center\">$postDateTime<br><br></div>";
                        echo "<div> <img src=\"$postImage\" width=\"100%\"> </div>";
                        echo "<div class=\"post\">$postPost</div>";
                        echo "<br><br><br><br>";
                    }
                ?>
            </div>
            
            <div class="col-md-3"><!--About me Colum-->
                <br><br><br><br><br>
                <div style="font-size:20px;">About Me</div>
                <div style="width:80px;"> <hr> </div>
                <br><br><br>
                <div class="text-center"> <img src="http://infinitythemes.ge/aden-examples/wp-content/uploads/2015/09/people-516372_1280-300x200.jpg"> </div>
                <br><br>
                <p style="font-size:15px;text-align:justify;">Omnes enim iucundum motum, quo sensus hilaretur. Ego vero isti, inquam, permitto. Qui est in parvis malis. Quid turpius quam sapientis</p>
            </div>
        </div>
    </div>
    
    <script src="JavaScript.js"></script>
</body>

</html>
