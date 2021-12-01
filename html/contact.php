<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/contact.css">
    <link rel="stylesheet" type="text/css" href="../style/general.css">
    
    <title>Contact</title>
    
</head>
<body>
    <?php include "header.php"; ?>
    <section>
        <h1 id="contact-title">CONTACT ME</h1>
        <div id="form">
            <?php include "../script/form.php" ?>
 
            <form method="post" type="submit" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>"> 
                <span class="error"><?php echo $requiredfield ?></span>
                <div class="line">
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" placeholder="Name" size="40">
                    <span class="error">* <?php echo $nameErr ?></span>
                    
                </div>
                <div class="line">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="Email" size="40">
                    <span class="error">* <?php echo $emailErr ?></span>
                </div>
                <div class="line">
                    <label for="subject">Subject :</label>
                    <input type="text" name="subject" id="subject" placeholder="Subject" size="40">
                </div>
                <div class="line">
                    <p id="your-message"> Type your message here :</p>
                    <label></label>
                    <textarea id="message" name="message" rows="10" cols="49" placeholder="Your message"></textarea>
                </div>
            
                <div id="btn-area">
                    <input class="btn" name="submit" type="submit" value="Send Message"> 
                </div>
  
            </form>
            
        </div>
    </section>
    <footer>
        <h3>&copy; Quatadah Nasdami 2021</h3>
    </footer>
</body>


</html>