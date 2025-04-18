<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
    <title>Form </title>
</head>
<body>




<div class="container">
        <div class="contact-box">
            <div class="left-section">
                <h2>Get In Touch With Us</h2>
                <p>For More Information About Our Product & Services, Please Feel Free To Drop Us An Email.</p>
                
                <div class="info">
                    <p><strong>📍 Address</strong><br> 236 5th SE Avenue, Karachi NY10000, Pakistan</p>
                    <p><strong>📞 Phone</strong><br> Mobile: (+84) 546-5789<br> </p>
                    <p><strong>⏰ Working Time</strong><br> Monday-Friday: 9:00 - 22:00<br> Saturday-Sunday: 9:00 - 21:00</p>
                </div>
            </div>
            
            <div class="right-section">
                <form action="submit.php" method="POST">
                    <label>Your name</label>
                    <input type="text" name="name" placeholder="Enter your name" required>

                    <label>Email address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>

                    <label>Subject</label>
                    <input type="text" name="subject" placeholder="This is an optional">

                    <label>Message</label>
                    <textarea name="message" placeholder="Hi! I'd like to ask about..." required></textarea>

                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
 







</body>
</html>