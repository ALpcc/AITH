<?php include '../includes/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>template</title>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>
        
            $(function() {
                $(".toggle").on("click", function(){
                    if($(".item").hasClass("active")){
                        $(".item").removeClass("active");
                    }
                    else{
                        $(".item").addClass("active");
                    }
                    
                })
                        
            });
            
        </script>
        <meta name="description" content="Reserve your spot for a historical Portland Tour. Prices range from $50 to $80 per person.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=../css/styles.css>
        <link rel="stylesheet" href=../css/navigation.css>
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
                    <div class="desktop">
            <header><h1>Ace In The Hole Multisport Events</h1></header>
            
            <nav>
                <ul class="menu">
                    <li class="item"><a href="<?php echo BASE_URL; ?>">Home</a></li>
                    <li class="item"><a href="<?php echo BASE_URL; ?>event">Event Details</a></li>
                    <li class="item"><a href="<?php echo BASE_URL; ?>register">Register</a></li>
                    <li class="item"><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
                    <li class="toggle"><a href="#"><span class="bars"></span></a></li>
                </ul>
            </nav>
        </div>
                    <!-- Display for Mobile view -->
        <div class="mobile">
            <?php include '../includes/nav.inc.html.php'; ?>
            <img src="../images/ace3.jpg">
        </div>
            <main>
                <h1 class="mainH1">Your Feedback is appreciated</h1>
                <h2 class="mainH2"><a href="<?php echo BASE_URL; ?>"><span class="return">Click here to return home</span></a></h2>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>