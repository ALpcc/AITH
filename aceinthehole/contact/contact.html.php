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
        </div>
        
        <div class="mobile"> 
            <?php include '../includes/nav.inc.html.php'; ?>
            <img src="../images/ace3.jpg">
        </div> 
        
        <div class="container">
    <main>
        
        <h1 class="mainH1" >FAQs</h1>
        <p>What are the Rules? We currently adhere to the USAT Rules for Triathlon &amp; Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p>
        
        <p>Can I use a personal music device while cycling? Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>
        
        <p>Can I use a personal music device while running? During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
        
        <ul>
            <li>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</li>
            
            <li>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</li>
            
            <li>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</li>   
        </ul>
        
        <p>Do I need to wear a wetsuit? No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p>
        
        <p>Do I have to use a road or racing bike? No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
        
        
        
        
        <h2 class="mainH2">Please refer to the FAQs before submiting a form.<br>
            For any question you may have that are not answered, please fill out the form below.</h2>
        
        <div id="form">
            
            <form method="post" action=" " >
                <label for="myName">Name:</label>
                <input type="text" name="myName" id="myName">
          
                <label for="myEmail">E-mail:</label>
                <input type="text" name="myEmail" id="myEmail">
                
                <label for="myRole">I am a...:</label>
                <select name="myRole" id="myRole">
                <option value="Athlete">Athlete</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Interested Party">Interested Party</option>    
                </select>
                
                <label for="myQuestion">Question:</label>
                <textarea name="myQuestion" id="myQuestion" rows="10" cols="40"></textarea>
                
                <input id="mySubmit" type="submit" value="Submit">
                
            </form>
            
        </div>
    </main>
        </div>
        
        
        
  
    
    
    
    
   <?php include '../includes/footer.inc.html.php'; ?>
    
    </body>
    
</html>