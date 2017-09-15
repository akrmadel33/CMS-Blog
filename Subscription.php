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
    
    <div class="container" id="Offers"><!--Offers-->
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="cont" data-offer="0.5">
                    <div class="">Blog-Basic</div>
                    <br>
                    <div>
                        <i class="fa fa-usd fa-4x" aria-hidden="true"></i>0.5/mo
                    </div>
                    <ul class="text-left">
                        <li>Omnes enim iucundum motum, quo sensus hilaretur.</li>
                        <li>Ego vero isti, inquam, permitto.</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="cont" data-offer="5">
                    <div>Blog-Standard</div>
                    <br>
                    <div>
                        <i class="fa fa-usd fa-4x" aria-hidden="true"></i>5/mo
                    </div>
                    <ul class="text-left">
                        <li>Omnes enim iucundum motum, quo sensus hilaretur.</li>
                        <li>Ego vero isti, inquam, permitto.</li>
                        <li>quo sensus hilaretur. Ego vero isti, inquam, permitto</li>
                        <li>Sed ad rem redeamus; Torquatus, is qui consul cum Cn</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="cont" data-offer="9">
                    <div>Ultimate-Blogger</div>
                    <br>
                    <div>
                        <i class="fa fa-usd fa-4x" aria-hidden="true"></i>9/mo
                    </div>
                    <ul class="text-left">
                        <li>Omnes enim iucundum motum, quo sensus hilaretur.</li>
                        <li>Ego vero isti, inquam, permitto.</li>
                        <li>quo sensus hilaretur. Ego vero isti, inquam, permitto</li>
                        <li>Sed ad rem redeamus; Torquatus, is qui consul cum Cn</li>
                        <li>Ego vero isti, inquam, permitto.</li>
                        <li>quo sensus hilaretur. Ego vero isti, inquam, permitto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container" id="FormOffers"><!--Offers form-->
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="border:1px solid #7f8c8d; border-radius:5px; background-color:#ecf0f1;">
                <form class="form-horizontal" id="FormSubscription">
                    <br>
                    <div class="col-sm-3 text-left">STEP1: WHO ARE YOU</div><!-- Who Are You Section---------- -->
                    <div class="col-sm-9"><hr class="form"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">First Name*</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="firstName"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Last Name*</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="lastName"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email*</label>
                        <div class="col-sm-10"><input type="email" class="form-control" name="email"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Phone Number*</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="phoneNumber"></div>
                    </div>
                    
                    <br><br>
                    <div class="col-sm-3 text-left">STEP2: YOUR HOME</div><!-- Your Home Section----------- -->
                    <div class="col-sm-9"><hr class="form"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Address*</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="address"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">City*</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="city"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Post Code*</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="postCode"></div>
                    </div>
                    
                    <br><br>
                    <div class="col-sm-3 text-left" style="font-size:19px;">STEP3: Select Payment</div><!-- Payment Section----------- -->
                    <div class="col-sm-9"><hr class="form"></div>
                    <?php
                        if(!isset($_GET['offer'])) {
                            ?>
                            <div class="form-group">
                                <label class="sr-only">Amount (in dollars)</label>
                                <label class="col-sm-2 control-label">Amount</label>
                                <div class="col-sm-10">
                                    <p class="form-control-static" style="font-size:15px; font-weight:bold;">0.5$/mo</p>
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="form-group">
                                <label class="sr-only">Amount (in dollars)</label>
                                <label class="col-sm-2 control-label">Amount</label>
                                <div class="col-sm-10">
                                    <p class="form-control-static" style="font-size:15px; font-weight:bold;"><?php echo $_GET['offer'] ?>$/mo</p>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Card Number*</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX" name="cardNumber"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Card CVC*</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="XXX" name="cardCVS"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Card Code*</label>
                        <div class="col-sm-3"><input type="text" class="form-control" name="cardCode1"></div>
                        <div class="col-sm-3"><input type="text" class="form-control" name="cardCode2"></div>
                    </div>
                    <button class="btn btn-success btn-lg" type="submit" style="margin:20px 0;">Subscripe</button>
                </form>
                <?php
                    if(isset($_GET['offer'])) {
                        ?>
                        <script>
                            TweenLite.to(window, 1, {scrollTo:900});
                        </script>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
            
    <script src="JavaScript.js"></script>
    <script>
        //Subscription php change
        $('#Offers .col-sm-4 .cont').click(function(){
            var offer = $(this).data('offer');
            window.location= "http://localhost/CMS-Blog/Subscription.php?offer=" + offer
        });
    </script>
</body>

</html>
