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
        
        <h1 class="mainH1">Event details</h1>
        
        <h2 class="mainH2">Starting Times &amp; Costs</h2>
        <table>
            <tr>
   
                <th>Course</th>
   
                <th>Time</th>
                
                <th>Registration Fee</th>
 
            </tr>
            <tr>
                <td>Long Course Triathlon</td>
                <td>Saturday 7:00 AM</td>
                <td>$240</td>
            </tr>
            <tr>
                <td>Olympic Triathlon</td>
                <td>Saturday 7:30 AM</td>
                <td>$110</td>
            </tr>
            <tr>
                <td>10K</td>
                <td>Saturday 7:15 AM</td>
                <td>$50</td>
            </tr>
            <tr>
                <td>Half Marathon</td>
                <td>Satruday 7:15 AM</td>
                <td>$75</td>
            </tr>
            <tr>
                <td>Sprint Triathlon</td>
                <td>Sunday 8:00 AM</td>
                <td>$90</td>
            </tr> 
            <tr>
                <td>Try-a-Tri</td>
                <td>Sunday 8:20 AM</td>
                <td>$65</td>
            </tr> 
            <tr>
                <td>Splash n Dash</td>
                <td>Sunday 12:00 PM</td>
                <td>Free for kids</td>
            </tr>
            
        </table>
        
        <h3>Cost Includes</h3>
        <p>Food &amp; Beer<br>
            Access to the weekend's live entertainment &amp; Fitness Expo<br>
            Commemorative Finisher medal <br>
            Accurate Chip Timing for competitive races <br>
            Ace in the Hole Multisport Weekend Tech Shirt <br>
            Post-event party &amp; entertainment <br>
            NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
        
        <h2 class="mainH2">PACKET PICK UP</h2>
        
        <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon.<br> No day of event packet pick up.</p>
        
        <h3>COURSE DETAILS</h3>
        <p>WATER TEMPERATURE is expected to be between 62 &amp; 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>
        
        <P>Long Course SWIM - 1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</P>
        
        <p>Long Course BIKE - 58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>
        
        <p>Long Course RUN - 13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
        
        <p>OLYMPIC SWIM - 1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
        
        <p>OLYMPIC BIKE - 28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p>
        
        <p>OLYMPIC RUN - 10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>
        
        <p>Sprint: Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>
        
        <p>Try-A-Tri: This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>
        
        <p>Half Marathon COURSE: Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports &amp; Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p>
        
        <p>10k COURSE: The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>
        
        <p>Splash n' Dash: Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event otherwise it is $25.</p>
        
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