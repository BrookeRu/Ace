<?php
// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=brookero_Acedb','brookero_Ace', 'AceInTheHole');
  $pdo = new PDO('mysql:host=localhost;dbname=brookero_Acedb','brookero_Ace', 'AceInTheHole');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}
 //Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty
//Don't run this unless we're handling a form submission
if ((!empty($_POST['myfname'])) && (empty ($_POST['honeypot']))) {
    $myfname = $_POST['myfname'];
    $mylname = $_POST['mylname'];
    $myemail= $_POST['myemail'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $myecname = $_POST['myecname'];
    $myecnumber= $_POST['myecnumber'];
    $mycomments= $_POST['mycomments'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];
  // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
     //And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
    
      $sql = 'INSERT INTO registration SET
          fname = :fname,
          lname = :lname,
          email = :email,
          age = :age,
          gender = :gender,
          ecname = :ecname,
          ecnumber =:ecnumber,
          mycomments =:mycomments,
          saturday =:saturday,
          sunday =:sunday';
        
   $s = $pdo->prepare($sql);
      $s->bindValue(':fname', $myfname);
      $s->bindValue(':lname', $mylname);
      $s->bindValue(':email', $myemail);
      $s->bindValue(':age', $age);
      $s->bindValue(':gender', $gender);
      $s->bindValue(':ecname', $myecname);
      $s->bindValue(':ecnumber', $myecnumber);
      $s->bindValue(':mycomments', $mycomments);
      $s->bindValue(':saturday', $saturday);
      $s->bindValue(':sunday', $sunday);    
        //Modify this to include the initial file for this folder
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted registration: ' . $e->getMessage();
      $error = 'Error adding submitted reserve: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
      include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
    
  } else {
    //Modify this to include the initial file for this folder
    include 'registration.html.php';
}
?>
