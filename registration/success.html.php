<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ace In The Hole</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css grid helpers-->
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
    <link href="../css/grid.css" rel="stylesheet" type="text/css">
    <link href="../css/reg.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">

    <!--end of css grid helpers-->

</head>

<body>
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    <main>
        <section class="success">
            <h2>Thank you!</h2>

            <p>Our records show you submitted the following:<br>
                <p>Thank you for Registering for the event!<br><br>
                    First Name: <?php echo htmlspecialchars($myfname, ENT_QUOTES, 'UTF-8'); ?><br><br>
                    Last Name: <?php echo htmlspecialchars($mylname, ENT_QUOTES, 'UTF-8'); ?><br><br>
                    Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br><br>
                    Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br><br>
                    Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br><br>
                    Emergency Contact Name: <?php echo htmlspecialchars($myecname, ENT_QUOTES, 'UTF-8'); ?><br><br>
                    Emergency Phone Number: <?php echo htmlspecialchars($myecnumber, ENT_QUOTES, 'UTF-8'); ?><br><br>
                    Saturday: <?php echo htmlspecialchars($saturday, ENT_QUOTES, 'UTF-8'); ?><br><br>
                    Sunday: <?php echo htmlspecialchars($sunday, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
        </section>
    </main>

    <section id="footer" class="section group">

        <?php include '../includes/footer.inc.html.php'; ?>

    </section>



    <!-- jQuery library DO NOT DELETE -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- script folder needs to be linked DO NOT DELETE -->

    <script src="../scripts/custom.js"></script>

</body>

</html>
