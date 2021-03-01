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
        
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
        
        
    <main>
        
        <h1>Questions? We'd love to hear from you!</h1>
        
        <div id="form">
            
            <form method="post" action=" " >
                <label for="myName">Name:</label>
                <input type="text" name="myName" id="myName">
          
                <label for="myEmail">E-mail:</label>
                <input type="text" name="myEmail" id="myEmail">
                
                <label for="myQuestion">Question:</label>
                <textarea name="myQuestion" id="myQuestion" rows="10" cols="50"></textarea>
                
                <input id="mySubmit" type="submit" value="Submit">
                
            </form>
            
        </div>
    </main>
        
        
        
  
    
    
    
    
   <?php include '../includes/footer.inc.html.php'; ?>
    
    </body>
    
</html>