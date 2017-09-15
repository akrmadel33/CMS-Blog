<?php
    $conHandler = mysqli_connect("mysql5.gear.host","akrmblog","Dr246rafHi_~","akrmblog");
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Blog/As Admin</title>
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
                        <span class="glyphicon glyphicon glyphicon-king" aria-hidden="true"></span> &nbsp;
                        ADMIN
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="User.php">Try As User</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container-fluid" style="margin-top:50px;" id="AdminPanel">
        <div class="row">
            <div class="col-sm-4 col-md-3" style="background-color:#2F4050; height:500px;">
                <br><br>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="Admin.php?page=1">Blog Members</a></li>
                    <br>
                    <li><a href="Admin.php?page=2">Manage Blog</a></li>
                    <br>
                    <li><a href="Admin.php?page=3">Post to Blog</a></li>
                </ul>
            </div>
            <div class="col-sm-8 col-md-9">
                <?php
                    if(isset($_GET['page'])) {
                        $page = $_GET['page'];
                        if($page == 1) {
                            include "Admin.index.php";
                            ?>
                            <script>
                                $('#AdminPanel ul li').removeClass('active');
                                $('#AdminPanel ul li:nth-child(1)').addClass('active');
                            </script>
                            <?php
                        } else if($page == 2) {
                            include "Admin.manage.php";
                            ?>
                            <script>
                                $('#AdminPanel ul li').removeClass('active');
                                $('#AdminPanel ul li:nth-child(3)').addClass('active');
                            </script>
                            <?php
                        } else if($page == 3) {
                            include "Admin.post.php";
                            ?>
                            <script>
                                $('#AdminPanel ul li').removeClass('active');
                                $('#AdminPanel ul li:nth-child(5)').addClass('active');
                            </script>
                            <?php
                        }
                    } else {
                        include "Admin.index.php";
                        ?>
                        <script>
                            $('#AdminPanel ul li').removeClass('active');
                            $('#AdminPanel ul li:nth-child(1)').addClass('active');
                        </script>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
    
    <script src="JavaScript.js"></script>
</body>

</html>
