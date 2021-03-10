<?php


$server = "localhost" ;
$username = "alfinalp_aith_user" ;
$password = "NotAPassword00" ;
$dbname = "alfinalp_aith" ;


// Edit or Replace this try/catch statement to work

try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=alfinalp_aith', 'alfinalp_aith_user', 'NotAPassword00');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
        $error = 'Unable to connect to the database server.';
        include '../includes/error.html.php';
        exit();
    }


if (isset($_POST['name']))
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $name = $_POST['name']; 
    $age = $_POST['age'];
    $role = $_POST['role'];
    $phone = $_POST['phone']; 
    $email = $_POST['email'];
    $ecname = $_POST['ecname'];
    $ecphone = $_POST['ecphone'];
    $gender = $_POST['gender'];
    $size = $_POST['size'];
    $date = $_POST['date'];
    $needs = $_POST['needs'];
    
    
// And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO register SET
          name = :name,
          age = :age,
          role = :role,
          phone = :phone,
          email = :email,
          ecname = :ecname,
          ecphone = :ecphone,
          gender = :gender,
          size = :size,
          date = :date,
          needs = :needs';
        
      $s = $pdo->prepare($sql);
      $s->bindValue(':name', $_POST['name']);
      $s->bindValue(':age', $age);
      $s->bindValue(':role', $role);
      $s->bindValue(':phone', $phone);
      $s->bindValue(':email', $email);
      $s->bindValue(':ecname', $ecname);
      $s->bindValue(':ecphone', $ecphone);
      $s->bindValue(':gender', $gender);  
      $s->bindValue(':size', $size);
      $s->bindValue(':date', $date);
      $s->bindValue(':needs', $needs);
      $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    
    // load the thank you page after the INSERT runs
    include 'success.html.php';
    } else {// Add an else to load the initial page if the initial (line 19) if statement is false
    
include 'register.html.php'; //Modify this to include the initial file for this folder
}
    



?>