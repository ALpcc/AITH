<!doctype html>
<html lang="en">
    
    <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    
    <title>Template</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- script for hamburger menu -->
        <script>
            
            $(function(){
                
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
   
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">    
        
    </head>
    
     <body>
        
        <!-- Display changes when in desktop view -->
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
                <img class="mySlides" src="images/ace3.jpg" alt="bicycle race">
                <img class="mySlides" src="images/ace5.jpg" alt="bicycle race low view">
                <img class="mySlides" src="images/ace9.jpg" alt="tricycle">
                <img class="mySlides" src="images/ace14.jpg" alt="track race">
                <img class="mySlides" src="images/ace18.jpg" alt="marathon">
            </div>
      
        </div>
        <!-- Display for Mobile view -->
        <div class="mobile">
            <?php include 'includes/nav.inc.html.php'; ?>
            <img src="images/ace3.jpg">
        </div>
    
        <!-- the start of content -->
         <div class="container">
             <main>
                
                 <h1 class="mainH1">ABOUT ACE IN THE HOLE MULTISPORT EVENTS</h1>
                 
                 <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.</p>
                 
                 <h2 class="mainH2">ABOUT THE EVENT</h2>
                 
                 <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>
                 
                 <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
                 
                 <h2 class="mainH2">What to Bring</h2>
                 
                 <p>Watch the weather closely. The show goes on no matter what the weather is doing.</p>
                 
                 <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>
                 
                 <p>Swim: Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</p>
                 
                 <p>Bike: A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>
                 
                 <p>Run: You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.</p>
                 
                 <p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>  
        
             </main>
         </div>
  
    
    
    
    
        <!-- footer plus other end page goodies -->
    <?php include 'includes/footer.inc.html.php'; ?>
                 <!-- script for slideshow -->
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