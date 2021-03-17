<?php include '../includes/bootstrap.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    
    <title>Template</title>
    
        
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
    
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <link href="../css/navigation.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet"> 
    
    
</head>
<body>
    
    
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
            <!-- wow! not so fancy slideshow -->
            <div class="headerimage">
                <img class="mySlides" src="../images/ace3.jpg">
                <img class="mySlides" src="../images/ace5.jpg">
                <img class="mySlides" src="../images/ace9.jpg">
                <img class="mySlides" src="../images/ace14.jpg">
                <img class="mySlides" src="../images/ace18.jpg">
            </div>
        </div>
        
        <!-- Display for Mobile view -->
        <div class="mobile">
            <?php include '../includes/nav.inc.html.php'; ?>
            <img src="../images/ace3.jpg">
        </div>
    <div class="container">
    <main>
         <h1 class="mainH1">Register Now</h1>
            <h2 class="mainH2">Required fields are marked with an asterisk (*).</h2>
        
        <div id="form">
            
            <form method="post" action="index.php">
                
                    <div class="formColumn">
                <h2 class="mainH2">Personal Information</h2>
                <label for="name">*Name:</label>
                <input type="text" name="name" id="name" >
                
                <label for="age">*Age:</label>
                <input type="text" name="age" id="age" >
                
                <label for="gender">*gender:</label>
                <select name="gender" id="gender">
                    <option value="" disabled="" selected="">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Non-Binary/Other">Non-Binary/Other</option>
                </select>
                        <label for="size">*Shirt Size:</label>
                        <select name="size" id="size">
                            <option value="" disabled="" selected="">T-Shirt Size</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone">
                
                <label for="email">*Email:</label>
                <input type="email" name="email" id="email" >
                
                <h2 class="mainH2">Emergency Contact Information</h2>
                        
                <label for="ecname">*Emergency Contact Name:</label>
                <input type="text" name="ecname" id="ecname" >
                
                <label for="ecphone">*Emergency Contact Phone:</label>
                <input type="text" name="ecphone" id="ecphone" >
                    </div>
                
                <h2 class="mainH2">Event Choice</h2>
                
                <label for="role">*Role:</label>
                <select name="role" id="role">
                <option value="Athlete">Athlete</option>
                <option value="Volunteer">Volunteer</option>
                </select>          
                
                <label for="date">*Event Selection:</label>
                <select name="date" id="date">
                    <option value="" disabled="" selected="">Select Your Event</option>
                    <optgroup label="Saturday">
                    <option value="Saturday">Long Course Triathlon</option>
                    <option value="Saturday">Olympic Triathlon</option>
                    <option value="Saturday">10K</option>
                    <option value="Saturday">Half Marathon</option>
                    <optgroup label="Sunday">
                    <option value="Sunday">Sprint Triathlon</option>
                    <option value="Sunday">Try-a-Tri</option>
                    <option value="Sunday">Splash n Dash</option>
                    
                </select>
                  
                <label for="needs">*Do you have any special needs?</label>
                <textarea name="needs" id="needs" rows="2" cols="20" ></textarea>
                
                <input id="mySubmit" type="submit">
                
            </form>
        </div>
    </main>
    </div>
    
    
    
    
    
    <?php include '../includes/footer.inc.html.php'; ?>
                    <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 5000); // Change image every 5 seconds
            }
        </script>
    
</body>
</html>