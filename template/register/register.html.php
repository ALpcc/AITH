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
    
    
</head>
<body>
    
    <header><p>Ace In The Hole</p></header>

    
    
  <?php include '../includes/nav.inc.html.php'; ?>
    
    <main>
         <h1>Register Now</h1>
        <div id="source">Required fields are marked with an asterisk (*).</div>
        <div id="reservations">
            
            <form method="post" action="register.php">
            
                <label for="name">*Name:</label>
                <input type="text" name="name" id="name" >
                
                <label for="age">*Age:</label>
                <input type="text" name="age" id="age" >
                
                <label for="role">*Role:</label>
                <select name="role" id="role">
                <option value="Athlete">Athlete</option>
                <option value="Volunteer">Volunteer</option>
                </select>
                
                
                
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone">
                
                <label for="email">*Email:</label>
                <input type="email" name="email" id="email" >
                
                <label for="ecname">*Emergency Contact Name:</label>
                <input type="text" name="ecname" id="ecname" >
                
                <label for="ecphone">*Emergency Contact Phone:</label>
                <input type="text" name="ecphone" id="ecphone" >
                
                <label for="gender">*gender:</label>
                <select name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Non-Binary/Other">Non-Binary/Other</option>
                </select>
                
                <label for="size">*Size:</label>
                <input type="text" name="size" id="size" >
                
                <label for="date">*Date:</label>
                <select name="date" id="date">
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
                </select>
                  
                <label for="needs">*Do you have any special needs?</label>
                <textarea name="needs" id="needs" rows="2" cols="20" ></textarea>
                
                <input id="submit" type="submit">
                
            </form>
        </div>
    </main>
    
    
    
    
    
    <?php include '../includes/footer.inc.html.php'; ?>
    
</body>
</html>