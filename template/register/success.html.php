<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta name="description" content="Register Now!">
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
            <?php include '../includes/header.inc.html.php'; ?>
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <h1>Thank You!</h1>
                <p>Our records show you submitted the following:<br>
                  First Name:  <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                  Age:  <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
                  Role:  <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
                  Phone:  <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?><br>   
                  Email:  <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contact Name:  <?php echo htmlspecialchars($ecname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contact Phone:  <?php echo htmlspecialchars($ecphone, ENT_QUOTES, 'UTF-8'); ?><br>  
                  Gender:  <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
                  Size:  <?php echo htmlspecialchars($size, ENT_QUOTES, 'UTF-8'); ?><br>    
                  Date:  <?php echo htmlspecialchars($date, ENT_QUOTES, 'UTF-8'); ?><br>
                  Special Needs:  <?php echo htmlspecialchars($needs, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>