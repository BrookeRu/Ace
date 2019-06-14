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
    <script src="../scripts/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- script folder needs to be linked DO NOT DELETE -->



    <title>Ace In The Hole</title>

</head>

<body>


    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>

    <div id="wrapper">
        <div class="hero_wrap3"></div>


        <main>
            <section class="registration">

                <h2>PACKET PICK UP</h2><br>
                <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
                <br>
                <h2>Registration Form</h2><br>

                <!-- <div id="source"></div><br>-->
                <div id="registration">

                    <form method="post" action=" ">

                        <input type="text" name="honeypot" id="honeypot" value="" title="if you fill this field out then your email will not be sent" />

                        <tr>
                            <td class="option"><label for="myfname">First Name</label></td>
                            <td class="option"><input type="text" name="myfname" id="myfname" required></td><br>
                        </tr><br>
                        <tr>
                            <td class="option"><label for="mylname">Last Name</label></td>
                            <td class="option"><input type="text" name="mylname" id="mylname" required></td><br>
                        </tr><br>
                        <tr>
                            <td><label for="myemail">Email</label></td>
                            <td><input type="email" name="myemail" id="myemail" required></td><br>
                        </tr><br>
                        <tr>
                            <td><label for="age">Age</label></td>
                            <td><input type="text" name="age" id="age" required></td><br>
                        </tr><br>

                        <tr>

                            <td><label for="gender">Gender</label></td>
                            <td><select name="gender" id="gender">
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Non-Binary">Non-Binary</option>
                                </select></td><br>
                        </tr><br>

                        <tr>
                            <fieldset>
                                <td>
                                    <h2><strong>Emergency Contact Information</strong></h2>
                                </td><br>
                                <td><label for="myecname">Emergency Contact Name</label>
                                <td><input type="text" name="myecname" id="myecname" placeholder="First Last" required></td><br><br>
                                <td><label for="myecnumber">Emergency Contact Phone Number</label></td><br>
                                <td><input type="tel" name="myecnumber" id="myecnumber" placeholder="(xxx) xxx-xxxxx" required>
                                </td>

                            </fieldset><br>
                        <tr>
                            <td><label for="mycomments">Do you need Special Accommodations?</label></td>
                            <td><textarea name="mycomments" id="mycomments" rows="3" cols="10" required></textarea></td>
                        </tr>

                        <br><br>

                        <tr>
                            <td>
                                <h2><strong>Register for Event</strong></h2>
                            </td><br>
                            <h3>Saturday</h3>
                            <p>Long Course Triathlon 7:00 AM</p>
                            <p>Olympic Triathlon 7:30 AM</p>
                            <p>10K 7:15 AM</p>
                            <p>Half Marathon 7:15 AM</p><br>
                            <td><label for="saturday">Saturday</label></td>
                            <td><select name="saturday" id="saturday">
                                    <option value=" "></option>
                                    <option value="Long Triathlon">Long Course Triathlon</option>
                                    <option value="Olympic Triathlon">Olympic Course Triathlon</option>
                                    <option value="10k">10K</option>
                                    <option value="Half Marathon">Half Marathon</option>
                                    <option value="No Event">No Event</option>

                                </select></td>
                        </tr> <br><br>

                        <tr>
                            <h3>Sunday</h3>
                            <p>Spring Triathlon 8:00 AM</p>
                            <p>Try-a-Tri 8:20 AM</p>
                            <p>Splash n Dash 12:00 PM</p><br>
                            <td><label for="sunday">Sunday</label></td>
                            <td><select name="sunday" id="sunday">
                                    <option value=" "></option>
                                    <option value="Sprint Triathlon">Sprint Triathlon</option>
                                    <option value="Try-a-Tri">Try a Tri</option>
                                    <option value="Splash n' Dash">Splash n'Dash</option>
                                    <option value="No Event">No Event</option>
                                </select></td><br><br>


                            <td><input id="mysubmit" type="submit" value="Submit"></td>
                        </tr>

                    </form>
                </div>
            </section>


        </main>

        <div id="registration">
            <?php include '../includes/footer.inc.html.php'; ?>

        </div>

    </div>
</body>

</html>
