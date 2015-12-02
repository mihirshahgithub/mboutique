<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Page</title>
    <link rel="stylesheet" type="text/css" href='FINALMBOUTIQUESUBMISSIONSTYLING.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include_once('header.php');
?>
<div id="contactImage">
    <img class="contact" src="contact-image.png">
</div>
<div class="leftColumnTable">Visit Us!
    <table class="moveTable">
        <tr>
            <td>Monday-Friday|10AM-9PM</td>
        </tr>
        <tr>
            <td>Saturday|10AM-8PM</td>
        </tr>
        <tr>
            <td>Sunday|11AM-7PM</td>
        </tr>
        <tr>
            <td>Closed Thanksgiving Day, Christmas Day, and Easter Day</td>
        </tr>

        <tr id="spacing">
            <td>1625 Post St
                San Francisco, CA 94115
            <td>
        </tr>
        <tr>
            <td>
                <a href="mailto: order@mboutique.com" class="e-mail">
                    <span>order@mboutique.com</span></a>

            </td>
        </tr>
        <tr>
            <td>
                <p>Send your questions, comments and flavor suggestions or place an order!</p>
            </td>
        </tr>
    </table>
</div>
<div class="middleColumn">
    <p id="cForm">Contact Form</p>

    <?php
    if (empty($_POST)) {
        ?>
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Name"><br>
            <input type="email" name="email" placeholder="E-mail"><br>
            <input type="text" name="phone" placeholder="Phone"><br>
            <input type="text" name="subject" placeholder="Subject"><br>
            <textarea rows="10" columns="6" name="message" placeholder="Message"></textarea><br>
            <button type="submit" value="submit">SEND</button>
        </form>
        <?php
    } else {
        ?>
        <form action="index.php?page=contact" method="POST">
            <input type="text" name="name" placeholder="Name" value="<?php print $_POST['name'] ?>"><br>
            <input type="email" name="email" placeholder="E-mail" value="<?php print $_POST['email'] ?>"><br>
            <input type="text" name="phone" placeholder="Phone" value="<?php print $_POST['phone'] ?>"><br>
            <input type="text" name="subject" placeholder="Subject" value="<?php print $_POST['subject'] ?>"><br>
            <textarea rows="10" columns="6" name="message" placeholder="Message"
                      value="<?php print $_POST['message'] ?>"></textarea><br>
            <button type="submit" value="submit">SEND</button>
        </form>
        <h2>Thank you for your submission.  Your response has been recorded.</h2>
        <?php
    }
    ?>



</div>
<div class="rightColumn"><img class="rightImage" src="assets/images/macarons-image.png" alt="Macarons Image"
                              class="macimaging"></div>

<?php
include_once('footer.php');
?>

</body>
</html>