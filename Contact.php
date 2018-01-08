<?php
$pageName="Contact - Matt's Alcove ";
require('./common/config.php');
include('./common/navBox.php');

if(isset($_POST['submit']))
{
    if (isset ( $_POST ['message']) && isset ( $_POST ['email']) && isset ( $_POST ['name']))
    {
        $content = filter_Var($_POST['message'], FILTER_SANITIZE_STRING);
        $contacteeName = filter_Var($_POST['name'], FILTER_SANITIZE_STRING);
        //echo $headers;
        $addressees = "mjh@matthehn.com";

        if(mail($addressees, "matthehn.com contact: ".$contacteeName." has a message", $content))
        {
            echo "<p class=alertGood>Message Sent.</p>";
            header('refresh: 3; url=./index.php');
        }
        else{
            $_POST['submit'] = false;
            echo "<p class=alert>Send failed.</p>";
            
        }
    }
    else{
        echo "<p class=alert>Not all fields filled. Double check and try again.</p>";
    }
}
else
{;}

?>
<div class="grid-container">
    <div class="content">
        <div class="grid-row-1">
            <div class="grid-item-1">
                <div class="contactHeader">
                    <p>Want to chat about one of your projects, my projects, the extended works of J.R.R. Tolkien, or just to give feedback on improving this website? Drop me a line at one of sources listed here or via the form.</p>
                </div>
            </div>
        </div>
        <div class="grid-row-2">
            <div class="grid-item-1">
                <h2 class="contactFormHeader">//Contact Form</h2>
                <div class='contactForm'>
                    <form action="#" name="contactForm" method="post">
                        <div class="input-group">
                            <div class="input-group-addon" id="sizing-addon-name">Name</div>
                            <input type="text" class="form-control" placeholder="What should I call you?" value="" name='name' aria-describedby="sizing-addon-name">
                        </div>
                        <div class="input-group">
                            <div class="input-group-addon" id="sizing-addon-email">Email</div>
                            <input type="email" class="form-control" placeholder="Where can I get back to you at?" value="" name='email' aria-describedby="sizing-addon-email">
                        </div>
                        <div class="form-group">
                            <div class="input-group-addon" id="sizing-addon-message">Message</div>
                            <textarea class="form-control" rows="8" placeholder="What are we talking about?" value="" name='message' aria-describedby="sizing-addon-message"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit" name='submit' value="submit">Send</button>
                    </form>
                </div>
            </div>
            <div class="grid-item-2">
                <h2 class="contactFormHeader">//Contact Info</h2>
                <div class="contactInfo">
                    <h3>Email</h3>
                    <p>mjh@matthehn.com</p>
                    <h3>Telephone</h3>
                    <p>+1 (970) 460-6587</p>
                    <h3>Skype</h3>
                    <p>nin.eruantien</p>
                    <h3>KeyBase</h3>
                    <p><a href='https://keybase.io/arsene'>Arsene</a></p>
                </div>
            </div>
        </div>
    </div>
</div><!--content wrap-->

<?php
include('./common/footer.php');
?>