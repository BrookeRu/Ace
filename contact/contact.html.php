<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!--css grid helpers-->
   <link href="../css/reset.css" rel="stylesheet" type="text/css">
   <link href="../css/helper.css" rel="stylesheet" type="text/css">
   <link href="../css/grid.css" rel="stylesheet" type="text/css">    
   <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/reg.css" rel="stylesheet" type="text/css">
   <!--end of css grid helpers-->    
 <!-- jQuery library DO NOT DELETE -->    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<!-- script folder needs to be linked DO NOT DELETE -->    
    
 <script src="../scripts/custom.js"></script> 
    
    <title>Ace In The Hole</title>
       
</head>
<body>
    
<?php include '../includes/header.inc.html.php'; ?>
<?php include '../includes/nav.inc.html.php'; ?> 
     
    <div id="wrapper">   
    <div class="hero_wrap4"></div>
              
<main>
    
   <section>
  <h2>Contact Us</h2>
       <p>Have a question that you'd like to ask?</p><br>
       <p>Interested in volunteering in one of our events?</p><br>
       <p>Compliments or concerns?</p>
       <br>
       
       <p>Feel free to use the simple form below and we we be sure to send you a quick response.</p>
       <br><br>
       <p>Thanks for visiting!</p><br>
 
      <form method="post" action=" ">

       <input type="text" name="honeypot" id="honeypot" value="" title="if you fill this field out then your email will not be sent"/>
      
 <label for="myname">Name:</label>
   <input type="text" name="myname" id="myname" required><br><br>
   <label for="myemail">Email:</label>
   <input type="text" name="myemail" id="myemail" required><br><br>
          
<label for="myparticipant">Position:</label>         
          
<select name="myparticipant" id="myparticipant">
    
   <option value="athlete">Athlete</option>
   <option value="volunteer">Volunteer</option>
   <option value="interested">Interested Party</option>
</select><br><br><br>
          
<label for="question">Question:</label><br>
<textarea name="question" id="question" rows="10" cols="50"></textarea><br><br>          
   
      <input id="mysubmit" type="submit" value="Submit">
   </form>
       
    </section>
</main>  
    
    
<?php include '../includes/footer.inc.html.php'; ?> 
        
    </div>

</body>
</html>
